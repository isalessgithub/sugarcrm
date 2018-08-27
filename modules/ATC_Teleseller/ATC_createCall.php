<?php
if (!defined('sugarEntry') || !sugarEntry) die ('Not a valid Entry Point');

global $current_user;
$GLOBALS['log']->fatal("printing post");
$GLOBALS['log']->fatal(json_encode($_POST));
//$call = new Call();
$call = BeanFactory::newBean('Calls');
$module = $_POST['module'];
$parent_id = $_POST['parent_id'];
$call_outcome_c = '';
if (isset($_REQUEST['target_list_id']) && !empty($_REQUEST['target_list_id'])) {
  require_once 'modules/ProspectLists/ProspectList.php';
  $target_list = new ProspectList();
  $target_list->disable_row_level_security = true;
  $target_list->retrieve($_REQUEST['target_list_id']);
}

if (isset($_POST['description'])) {
  $call->description = $_POST['description'];
} else {
  $call->name = "Left Voicemail";
}

if (isset($_POST['call_outcome_c'])) {
  $call_outcome_c = $_POST['call_outcome_c'];
  $call->call_outcome_c = $call_outcome_c;
}

$call->assigned_user_id = $current_user->id;
$call->assigned_user_name = $current_user->full_name;
$call->direction = "Outbound";
$call->status = "Held";
$call->date_start = date('m/d/Y h:ia'); //'12/06/2010 03:03pm'; 
if ($module == 'Contacts') {
  $Contacts = new Contact();
  $Contacts->disable_row_level_security = true;
  $Contacts->retrieve($parent_id);
  $call->parent_type = "Contacts";
  $call->parent_id = $parent_id;
  if (isset($call->description)) {
    // only add to description if call was logged with note
    if (isset($_REQUEST['description']) && !empty($_REQUEST['description'])) {
      if (isset($target_list)) {
        $Contacts->description .= "\n" . $target_list->name . " - " . $call->date_start . " * Call Made by " . $current_user->full_name . " * " . $call->description;
      } else {
        $Contacts->description .= "\n" . $call->date_start . " * Call Made by " . $current_user->full_name . " * " . $call->description;
      }
    }
    if (isset($_REQUEST['phone_other']) && $Contacts->phone_other != $_REQUEST['phone_other'])
      $Contacts->phone_other = $_REQUEST['phone_other'];
    $Contacts->save();
    $call->name = "Made call to " . $Contacts->full_name;
  }
  // lets relate the call to Target list
  if (!empty($_REQUEST['target_list_id'])){
    $call->prospectlists_calls_1prospectlists_ida = $_REQUEST['target_list_id'];
    $target_list_related = BeanFactory::getBean("ProspectLists",$_REQUEST['target_list_id']);
    // assign campaign id to call
    $call->atc_isscampaigns_calls_1atc_isscampaigns_ida = $target_list_related->atc_isscampaigns_prospectlists_1atc_isscampaigns_ida;
  }

  // let's populate account name
  $contact_account = BeanFactory::getBean("Accounts",$Contacts->account_id);
  if(isset($contact_account->name) && !empty($contact_account->name)){
    $call->account_c = $contact_account->name;
  }

  // let's populate direct phone
  $call->direct_phone_c = $Contacts->phone_other;
} else if ($module == 'Accounts') {
  $Accounts = new Account();
  $Accounts->disable_row_level_security = true;
  $Accounts->retrieve($parent_id);
  $call->parent_type = "Accounts";
  $call->parent_id = $parent_id;
  if (isset($call->description)) {
    // only add to description if call was logged with note
    if (isset($_REQUEST['description']) && !empty($_REQUEST['description'])) {
      if (isset($target_list)) {
        $Accounts->description .= "\n" . $target_list->name . " - " . $call->date_start . " * Call Made by " . $current_user->full_name . " * " . $call->description;
      } else {
        $Accounts->description .= "\n" . $call->date_start . " * Call Made by " . $current_user->full_name . " * " . $call->description;
      }
    }
    $Accounts->save();
    $call->name = "Made call to " . $Accounts->name;
  }
} else if ($module == 'Prospects') {
  $Prospects = new Prospect();
  $Prospects->disable_row_level_security = true;
  $Prospects->retrieve($parent_id);
  $call->parent_type = "Prospects";
  $call->parent_id = $parent_id;

  if (isset($call->description)) {
    // only add to description if call was logged with note
    if (isset($_REQUEST['description']) && !empty($_REQUEST['description'])) {
      if (isset($target_list)) {
        $Prospects->description .= "\n" . $target_list->name . " - " . $call->date_start . " * Call Made by " . $current_user->full_name . " * " . $call->description;
      } else {
        $Prospects->description .= "\n" . $call->date_start . " * Call Made by " . $current_user->full_name . " * " . $call->description;
      }
    }
    $Prospects->save();
    $call->name = "Made call to " . $Prospects->full_name;
  }
} else if ($module == 'Leads') {
  $Leads = new Lead();
  $Leads->disable_row_level_security = true;
  $Leads->retrieve($parent_id);
  $call->parent_type = "Leads";
  $call->parent_id = $parent_id;
  if (isset($call->description)) {
    // only add to description if call was logged with note
    if (isset($_REQUEST['description']) && !empty($_REQUEST['description'])) {
      if (isset($target_list)) {
        $Leads->description .= "\n" . $target_list->name . " - " . $call->date_start . " * Call Made by " . $current_user->full_name . " * " . $call->description;
      } else {
        $Leads->description .= "\n" . $call->date_start . " * Call Made by " . $current_user->full_name . " * " . $call->description;
      }
    }
    $Leads->save();
    $call->name = "Made call to " . $Leads->full_name;
  }
}
$_SESSION['disable_workflow'] = "Yes";
	$tl = new ProspectList();
	$tl->disable_row_level_security = true;
	$tl->retrieve($call->prospectlists_calls_1prospectlists_ida);
if(!isset($_REQUEST['save_only_followup_call']) || empty($_REQUEST['save_only_followup_call']) || $_REQUEST['save_only_followup_call'] == 'false'){
	//$call->save();
	global $db;
	$update_campaign_name_c_query = "UPDATE calls_cstm SET campaign_name_c = '{$tl->name}' WHERE id_c = '{$call->id}'";
	$db->query($update_campaign_name_c_query);
	//$call->campaign_name_c = $tl->name;
	$call->save();
	$_SESSION['disable_workflow'] = "No";
$GLOBALS['log']->fatal($call->id);
	if ($module == "Contacts") {
	  //set relationship between calls and contacts calls_contacts
		$GLOBALS['log']->fatal("parent id".$parent_id);
	  $columns = array("call_id" => $call->id, "contact_id" => $parent_id);
	  $values = array($call->id, $parent_id);
	  $call->set_relationship('calls_contacts', $columns, true, false, $values);
	  //$call->load_relationship("contacts");
	  //$call->contacts->add($parent_id);

	}

	if ($module == "Leads") {
	  //set relationship between calls and leads calls_leads
	  $columns = array("call_id" => $call->id, "lead_id" => $parent_id);
	  $values = array($call->id, $parent_id);
	  $call->set_relationship('calls_leads', $columns, true, false, $values);
	}

	if ($call->id != "" && ${$module}->id != "") {
	  if ($call->name != "Left Voicemail") {
		$msg = "Call Created successfully!";
	  } else {
		$msg = "Call Created with Left Voicemail subject!";
	  }
	} else {
	  $msg = "Call Creation Failed, Please try again.";
	}
}
if(isset($_REQUEST['start_date']) && !empty($_REQUEST['start_date'])){
	$additional_call = $call;
	$formated_start_date = date("m/d/Y h:ia", strtotime($_REQUEST['start_date']));
	$additional_call->date_start = $formated_start_date;
	$additional_call->status = 'Planned';
	if(isset($_REQUEST['reminder_checked']) && $_REQUEST['reminder_checked'] == 'true'){
		$additional_call->reminder_time = $_REQUEST['reminder_time'];
	}
	unset($additional_call->id);
	$additional_call->save();
	$tl->retrieve($additional_call->prospectlists_calls_1prospectlists_ida);
	global $db;
	$update_campaign_name_c_query = "UPDATE calls_cstm SET campaign_name_c = '{$tl->name}' WHERE id_c = '{$additional_call->id}'";
	$db->query($update_campaign_name_c_query);
	//$call->campaign_name_c = $tl->name;
	//$call->save();
	$_SESSION['disable_workflow'] = "No";

	if ($module == "Contacts") {
	  //set relationship between calls and contacts calls_contacts
	  $columns = array("call_id" => $additional_call->id, "contact_id" => $parent_id);
	  $values = array($additional_call->id, $parent_id);
	  $additional_call->set_relationship('calls_contacts', $columns, true, false, $values);
	  //$call->calls_contacts->add($parent_id);

	}

	if ($module == "Leads") {
	  //set relationship between calls and leads calls_leads
	  $columns = array("call_id" => $additional_call->id, "lead_id" => $parent_id);
	  $values = array($additional_call->id, $parent_id);
	  $additional_call->set_relationship('calls_leads', $columns, true, false, $values);
	}
}
if(empty($msg))
{
  $msg = "Failed";
}
$ret = array('message' => $msg, 'row_id' => $parent_id, 'call_outcome' => $call_outcome_c);
echo json_encode($ret);

?>
