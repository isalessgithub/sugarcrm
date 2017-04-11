<?php

//TODO: figure out if we can get rid of the logic hook or the vardef function
class CallLogger
{
    function ATCrenderLogCall($bean, $event, $arguments)
    {

        if ($_REQUEST['module'] != 'ProspectLists' && $_REQUEST['action'] != 'DetailView') {
            return;
        }

        echo '<script type="text/javascript" src="modules/ATC_Teleseller/javascript/ATC_JS/call_logging.js"></script>';
        $moduleName = $bean->module_dir;
        $record = $bean->id;
        $retStr = renderLogCall($moduleName, $record);
        $bean->log_call_c = $retStr;
    }
}

function renderLogCall($moduleName = '', $record = '', $logcall_options = array())
{
    global $sugar_config;

    // fetch direct_phone_value
    require_once('modules/Contacts/Contact.php');
    $contact = new Contact();
    $contact->disable_row_level_security = true;
    $contact->retrieve($record);
    //$contactname = htmlspecialchars(json_encode($contact->first_name." ".$contact->last_name));
    $contactname = htmlspecialchars($contact->first_name . " " . $contact->last_name);
    //$contactname = 'Silly';
    //we're going to get account name now.
    $accountname = 'No Account';


    if (!empty($contact->account_id)) {
        require_once('modules/Accounts/Account.php');
        $account = new Account();
        $account->disable_row_level_security = true;
        $account->retrieve($contact->account_id);
        //$accountname = htmlspecialchars(json_encode($account->name));
        $accountname = htmlspecialchars($account->name);
    }

    //$email_address = "notanaddress@isaless.com";
    $email_address = $contact->email1;

    if (is_object($moduleName)) {
        $moduleName = $moduleName->module_dir;
    }
    if (empty($moduleName) || empty($record)) {
        $args = func_get_args();
        $moduleName = $args[0]->module_dir;
        $record = $args[0]->id;
    }
    if (empty($logcall_options)) {
        $logcall_options = array(
            'log_call' => array('Log Call', 'accept_inline'),
            'no_result' => array('No Result', 'decline_inline'),
            'schedule_call' => array('Schedule Call', 'schedule_inline'),
            'create_note' => array('Create Note', 'txt_image_inline')
        );
    }
    $list_view_options = $sugar_config['teleseller'][$moduleName]['listview'];
    $retStr = "<span style='white-space: nowrap'> <div id='$record'>"; //Encapsulate in span for IE7 to correctly handle nowrap

    foreach ($logcall_options as $config_name => $html_tupple) {
        if (isset($list_view_options[$config_name]) && $list_view_options[$config_name] == 'true' || $config_name == "appointment") {
            $icon_log_call_html = SugarThemeRegistry::current()->getImage($html_tupple[1],
                'align="absmiddle" alt="' . $html_tupple[0] . '" border="0"');

            if ($config_name == "log_call") {
                $retStr .= "<a id =\"$record\" data-json=\"$json_history\" href=\"javascript:LogCall('$moduleName', '$record', 'null','$contact->phone_other', '$contactname','$accountname');\"" .
                    ' class="listViewTdToolsS1" title="' . $html_tupple[0] . '"' .
                    " style='vertical-align:top'>$icon_log_call_html</a>";
            }

            if ($config_name == "no_result") {
                $retStr .= "<a href=\"javascript:NoResultCall('$moduleName', '$record');\"" .
                    ' class="listViewTdToolsS1" title="' . $html_tupple[0] . '"' .
                    " style='vertical-align:top'>$icon_log_call_html</a>";
            }
            if ($config_name == "schedule_call") {
                $retStr .= "<a href=\"javascript:ScheduleCall('$moduleName', '$record');\"" .
                    ' class="listViewTdToolsS1" title="' . $html_tupple[0] . '"' .
                    " style='vertical-align:top'>$icon_log_call_html</a>";
            }
            if ($config_name == "create_note") {
                $retStr .= "<a href=\"javascript:CreateNote('$moduleName', '$record','null');\"" .
                    ' class="listViewTdToolsS1" title="' . $html_tupple[0] . '"' .
                    " style='vertical-align:top'>$icon_log_call_html</a>";
            }
            if ($config_name == "appointment") {
                ////$retStr .= "<a href=\"javascript:ManageAppointments('$moduleName', '$record', '$contactname', '$accountname');\"" .
                $retStr .= "<a href=\"javascript:ManageAppointments('$moduleName', '$record', '$email_address','$contactname', '$accountname');\"" .
                    ' class="listViewTdToolsS1" title="' . $html_tupple[0] . '"' .
                    " style='vertical-align:top'>$icon_log_call_html</a>";
            }
        }
    }
    $retStr .= "</div></span>"; //End span for IE7
    return $retStr;

}

