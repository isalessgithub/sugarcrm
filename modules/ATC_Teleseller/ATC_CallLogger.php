<?php

//TODO: figure out if we can get rid of the logic hook or the vardef function
class CallLogger {
  function ATCrenderLogCall($bean, $event, $arguments) {
    echo '<script type="text/javascript" src="modules/ATC_Teleseller/javascript/ATC_JS/call_logging.js"></script>';
    $moduleName = $bean->module_dir;
    $record = $bean->id;
    $retStr = renderLogCall($moduleName, $record);
    $bean->log_call_c = $retStr;
  }
}

function renderLogCall($moduleName = '', $record = '', $logcall_options = array()) {
  global $sugar_config;
  global $db;

  // Return 10 most recent calls
  $sql = "SELECT pl.name as TLName ,calls.description AS Description, MAX(calls.date_entered) AS Create_Date, calls_cstm.call_outcome_c AS Outcome FROM calls
	LEFT JOIN calls_contacts ON calls.id = calls_contacts.call_id
	INNER JOIN calls_cstm ON calls.id = calls_cstm.id_c
	LEFT JOIN prospectlists_calls_1_c AS plc ON plc.prospectlists_calls_1calls_idb = calls.id
	LEFT JOIN prospect_lists AS pl ON pl.id = prospectlists_calls_1prospectlists_ida
	WHERE calls_contacts.contact_id = '".$record ."' AND calls.deleted = 0 GROUP BY TLName,Description,Outcome ORDER BY Create_Date DESC LIMIT 10";
  $history = null;
  $result = $db->query($sql, true);
  while (($rows = $db->fetchByAssoc($result)) != null) {
    // replace special characters because newline for example is not allowed in JSON
    foreach ($rows as $k => $v) {
      $rows[$k] = trim(preg_replace('/(\r\n)|\n|\t|\r|\\\\/', '', $v));
    }
    $history[] = $rows;

  }
  $json_history = json_encode($history);
  $json_history = htmlspecialchars($json_history);

  // Return 10 most recent notes
  $note_sql = "SELECT notes.name AS 'NAME', notes.date_entered AS Create_Date, tl.name AS 'target_list_name' FROM notes
INNER JOIN prospectlists_notes_1_c AS tln ON tln.prospectlists_notes_1notes_idb = notes.id
INNER JOIN prospect_lists AS tl ON tl.id = tln.prospectlists_notes_1prospectlists_ida
WHERE notes.contact_id = '" . $record . " ' AND notes.deleted = 0 ORDER BY notes.date_entered DESC LIMIT 10";
  $note_history = null;
  $note_result = $db->query($note_sql, true);
  while (($note_rows = $db->fetchByAssoc($note_result)) != null) {
    $note_history[] = $note_rows;
  }
  $json_notes = json_encode($note_history);
  $json_notes = htmlspecialchars($json_notes);

  // fetch direct_phone_value
  require_once('modules/Contacts/Contact.php');
  $contact = new Contact();
  $contact->disable_row_level_security = true;
  $contact->retrieve($record);
  //$contactname = htmlspecialchars(json_encode($contact->first_name." ".$contact->last_name));
  $contactname = htmlspecialchars($contact->first_name." ".$contact->last_name);
  //$contactname = 'Silly';
  //we're going to get account name now.
  $accountname = 'No Account';

  if(!empty($contact->account_id)){
  	require_once('modules/Accounts/Account.php');
  	$account = new Account();
  	$account->disable_row_level_security = true;
  	$account->retrieve($contact->account_id);
  	//$accountname = htmlspecialchars(json_encode($account->name));
  	$accountname = htmlspecialchars($account->name);
  }


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
        $retStr .= "<a id =\"$record\" data-json=\"$json_history\" href=\"javascript:LogCall('$moduleName', '$record', '$json_history','$contact->phone_other','$contactname','$accountname');\"" .
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
        $retStr .= "<a href=\"javascript:CreateNote('$moduleName', '$record','$json_notes');\"" .
            ' class="listViewTdToolsS1" title="' . $html_tupple[0] . '"' .
            " style='vertical-align:top'>$icon_log_call_html</a>";
      }
      if ($config_name == "appointment") {
        $retStr .= "<a href=\"javascript:ManageAppointments('$moduleName', '$record', '$contactname', '$accountname');\"" .
            ' class="listViewTdToolsS1" title="' . $html_tupple[0] . '"' .
            " style='vertical-align:top'>$icon_log_call_html</a>";
      }
    }
  }
  $retStr .= "</div></span>"; //End span for IE7
  return $retStr;

}

