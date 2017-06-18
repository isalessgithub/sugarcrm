<?php

// make sure this is a valid entry point
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('modules/Emails/clients/base/api/MailApi.php');

require_once('custom/modules/Emails/override/MS_MailRecord.php');


class MS_MailApi extends MailApi
{
    const FORWARD_REPLY = "forward_reply";

    public function registerApiRest()
    {

        $api = parent::registerApiRest();

        $api['customSendEmail'] = array(
            'reqType' => 'POST',
            'path' => array('mastersolve', 'send-email'),
            'pathVars' => array('', ''),
            'method' => 'createMailCustom',
        );

        return $api;
    }

    /**
     * @param $api
     * @param $args
     * @return array
     */
    public function createMailCustom($api, $args)
    {
        return $this->handleMail($api, $args);
    }

    /**
     * @param $api
     * @param $args
     * @return array
     * @throws SugarApiExceptionRequestMethodFailure
     */
    protected function handleMail($api, $args)
    {
        // Perform Front End argument validation per the Mail API architecture
        // Non-compliant arguments will result in an Invalid Parameter Exception Thrown
        $this->validateArguments($args);

        $mailRecord = $this->initMailRecord($args);

        try {
            if ($args[self::STATUS] == "ready") {
                $response = $mailRecord->send(); // send immediately
            } else {
                $response = $mailRecord->saveAsDraft(); // save as draft
            }
        } catch (MailerException $e) {
            $eMessage = $e->getUserFriendlyMessage();
            if (isset($GLOBALS["log"])) {
                $GLOBALS["log"]->error("MailApi: Request Failed - Message: {$eMessage}");
            }
            throw new SugarApiExceptionRequestMethodFailure($eMessage, null, 'Emails');
        }

        return $response;
    }

    /**
     * Instantiate and initialize the MaiRecord from the incoming api arguments
     *
     * @param string - $message
     */
    protected function initMailRecord($args)
    {
//        $mailRecord = new MailRecord();
        // use custom class
        $mailRecord = new MS_MailRecord();

        $mailRecord->mailConfig = $args[self::EMAIL_CONFIG];
        $mailRecord->toAddresses = $args[self::TO_ADDRESSES];
        $mailRecord->ccAddresses = $args[self::CC_ADDRESSES];
        $mailRecord->bccAddresses = $args[self::BCC_ADDRESSES];
        $mailRecord->attachments = $args[self::ATTACHMENTS];
        $mailRecord->teams = $args[self::TEAMS];
        $mailRecord->related = $args[self::RELATED];
        $mailRecord->subject = $args[self::SUBJECT];
        $mailRecord->html_body = $args[self::HTML_BODY];
        $mailRecord->text_body = $args[self::TEXT_BODY];
        $mailRecord->fromAddress = $args[self::FROM_ADDRESS];
        $mailRecord->assigned_user_id = $args[self::ASSIGNED_USER_ID];
        $mailRecord->forward_reply = $args[self::FORWARD_REPLY];

        // add from data to the mail record
        $mailRecord->msFromAddress = $args['ms_from_address'];
        $mailRecord->msFromName = $args['ms_from_name'];

        if (!empty($args[self::DATE_SENT])) {
            $date = TimeDate::getInstance()->fromIso($args[self::DATE_SENT]);
            $mailRecord->date_sent = $date->asDb();
        }

        return $mailRecord;
    }


}

