<?php

require_once('modules/OutboundEmailConfiguration/OutboundEmailConfigurationPeer.php');

use Sugarcrm\Sugarcrm\Util\Serialized;

class MS_OutboundEmailConfigurationPeer extends OutboundEmailConfigurationPeer
{

    static $configuration_id;
    static $from_data;

    /**
     * @access public
     * @param User $user required
     * @param array $from_data [from name, from address]
     * @param Localization $locale
     * @param string $charset
     * @return OutboundEmailConfiguration or null if not found
     */
    public static function getMailConfigurationFromId(
        User $user,
        $from_data,
        Localization $locale = null,
        $charset = null
    ) {

        $result = $GLOBALS['db']->query("SELECT id FROM outbound_email WHERE type = 'mastersolve1'");

        $result = $GLOBALS['db']->fetchByAssoc($result);

        if (!$result) {
            return null;
        }

        $id = $result['id'];

        self::$configuration_id = $id;
        self::$from_data = $from_data;

        // Check for Inbound Email Address Match First -  Outbound Config Id may not be unique
        $mailConfigurations = self::listMailConfigurations($user, $locale, $charset);
        foreach ($mailConfigurations AS $mailConfiguration) {
            $inbox_id = $mailConfiguration->getInboxId();
            if (!empty($inbox_id) && $inbox_id == $id) {
                return $mailConfiguration;
            }
        }
        foreach ($mailConfigurations AS $mailConfiguration) {
            $inbox_id = $mailConfiguration->getInboxId();
            if (empty($inbox_id) && ($mailConfiguration->getConfigId() == $id)) {
                return $mailConfiguration;
            }
        }
        return null;
    }

    /**
     * @access public
     * @param User $user required
     * @param Localization $locale
     * @param string $charset
     * @return array MailConfigurations
     * @throws MailerException
     */
    public static function listMailConfigurations(User $user, Localization $locale = null, $charset = null)
    {
        global $app_strings, $current_user;
        $outboundEmailConfigurations = array();
        $ret = $user->getUsersNameAndEmail();
        $systemDefaultOutbound = null;

        if (empty($ret['email'])) {
            $systemReturn = $user->getSystemDefaultNameAndEmail();
            $ret['email'] = $systemReturn['email'];
            $ret['name'] = $systemReturn['name'];
            $system_replyToAddress = $ret['email'];
        } else {
            $system_replyToAddress = '';
        }

        $system_replyToName = $ret['name'];
        $replyTo = $user->emailAddress->getReplyToAddress($user, true);

        if (!empty($replyTo)) {
            $system_replyToAddress = $replyTo;
        }

        /* Retrieve any Inbound User Mail Accounts and the Outbound Mail Accounts Associated with them */
        $inboundEmail = new InboundEmail();
        $ieAccounts = $inboundEmail->retrieveAllByGroupIdWithGroupAccounts($user->id);
        $ie_ids = array_keys($ieAccounts);
        foreach ($ieAccounts as $inbox_id => $ie) {
            $name = $ie->get_stored_options('from_name');
            $addr = $ie->get_stored_options('from_addr');
            $storedOptions = Serialized::unserialize($ie->stored_options, array(), true);
            $isAllowedGroup = $ie->get_stored_options('allow_outbound_group_usage', false);
            if (!$ie->is_personal && !$isAllowedGroup) {
                continue;
            }

            $outbound_config_id = empty($storedOptions["outbound_email"]) ? null : $storedOptions["outbound_email"];
            $oe = null;

            if (!empty($outbound_config_id)) {
                $oe = static::loadOutboundEmail();
                $oe->retrieve($outbound_config_id);
            } else {
                if (empty($systemDefaultOutbound)) {
                    $systemDefaultOutbound = self::getSystemMailConfiguration($user, $locale, $charset);
                }
                $outbound_config_id = $systemDefaultOutbound->getConfigId();
                $oe = static::loadOutboundEmail();
                $oe->retrieve($outbound_config_id);
            }

            if ($name != null && $addr != null && !empty($outbound_config_id) && !empty($oe) && ($outbound_config_id == $oe->id)) {
                // turn the OutboundEmail object into a useable set of mail configurations
                $configurations = array();
                $configurations["config_id"] = $outbound_config_id;
                $configurations["config_type"] = "user";
                $configurations["inbox_id"] = $inbox_id;
                $configurations["from_email"] = $addr;
                $configurations["from_name"] = $name;
                if ($isAllowedGroup) {
                    $configurations["display_name"] = "{$name} ({$addr}) - [" . $app_strings['LBL_GROUP_EMAIL_ACCOUNT_CONFIGURATION'] . "]";
                } else {
                    $configurations["display_name"] = "{$name} ({$addr}) - [" . $app_strings['LBL_USER_OUTBOUND_EMAIL_ACCOUNT_CONFIGURATION'] . "]";
                }
                $configurations["personal"] = (bool)($ie->is_personal);
                $configurations["replyto_email"] = (!empty($storedOptions["reply_to_addr"])) ?
                    $storedOptions["reply_to_addr"] :
                    $addr;
                $configurations["replyto_name"] = (!empty($storedOptions["reply_to_name"])) ?
                    $storedOptions["reply_to_name"] :
                    $name;
                $outboundEmailConfiguration = self::buildOutboundEmailConfiguration(
                    $user,
                    $configurations,
                    $oe,
                    $locale,
                    $charset
                );
                $outboundEmailConfigurations[] = $outboundEmailConfiguration;
            }
        }

        $systemUser = BeanFactory::getBean("Users");
        $systemUser->getSystemUser();

        $oe = static::loadOutboundEmail();
        $systemMailerConfiguration = $oe->getSystemMailerSettings();

        if ($oe->isAllowUserAccessToSystemDefaultOutbound()) {
            $system = $systemMailerConfiguration;
            $personal = false;
        } else {
            $system = $oe->getUsersMailerForSystemOverride($user->id);
            $personal = true;

            if (empty($system)) {
                // Create a User System-Override Configuration
                if ($user->id == $systemUser->id) {
                    $oe = $oe->createUserSystemOverrideAccount(
                        $user->id,
                        $systemMailerConfiguration->mail_smtpuser,
                        $systemMailerConfiguration->mail_smtppass
                    );
                } else {
                    $oe = $oe->createUserSystemOverrideAccount($user->id);
                }

                $system = $oe->getUsersMailerForSystemOverride($user->id);
            }
        }

        if (empty($system->id)) {
            throw new MailerException("No Valid Mail Configurations Found", MailerException::InvalidConfiguration);
        }

        // turn the OutboundEmail object into a usable set of mail configurations

        $oe = static::loadOutboundEmail();

        $oe->retrieve(self::$configuration_id);

        if (!empty($oe->id)) {

            $configurations = array();

            $configurations["config_id"] = $oe->id;
            $configurations["config_type"] = "system";
            $configurations["inbox_id"] = null;

            $from_address = self::$from_data['msFromAddress'];
            $from_name = self::$from_data['msFromName'];

            $configurations["from_email"] = $from_address;
            $configurations["from_name"] = $from_name;

            $configurations["replyto_email"] = $from_address;
            $configurations["replyto_name"] = $from_name;

            $configurations["display_name"] = $from_name . '<' . $from_address . '>';

            $configurations["personal"] = $oe->type == 'personal';

            $configurations["inbound_ids"] = $ie_ids;

            $outboundEmailConfiguration = self::buildOutboundEmailConfiguration(
                $user,
                $configurations,
                $oe,
                $locale,
                $charset
            );

            $outboundEmailConfigurations[] = $outboundEmailConfiguration;

        } else {

            $GLOBALS['log']->fatal("OE configuration for id " . self::$configuration_id . " wasn't found.");

        }

        return $outboundEmailConfigurations;
    }

}
