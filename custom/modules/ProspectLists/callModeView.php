<?php
echo getVersionedScript('custom/modules/ProspectLists/js/jquery.dataTables.min.js');
echo getVersionedScript('modules/ATC_Teleseller/javascript/ATC_JS/call_logging.js');

$url = "http://test.isaless.com/";
global $mod_strings;
// only if Target ID exists
if(isset($_REQUEST['uid']) && !empty($_REQUEST['uid'])){
$sTargetId = $_REQUEST['uid'];
// retrieve details of target list
$oProspectList = new ProspectList();
$oProspectList->retrieve($sTargetId);

// module title
echo getClassicModuleTitle("ProspectLists", array("<a href='index.php?module=ProspectLists&action=index'>" .
        translate('LBL_MODULE_NAME', 'ProspectLists') . "</a>",
        $mod_strings['LBL_CALLING_MODE_TARGET_LIST'] .
        "<a href='index.php?module=ProspectLists&action=DetailView&record=".$oProspectList->id."'>".$oProspectList->name."</a>"), false);

// fetch all related contacts
//$oContacts = $oProspectList->get_linked_beans('contacts', 'Contacts');
//global $db;
$db = $GLOBALS['db'];

$cSQL = " SELECT accounts.id 'account_id', accounts.name 'account_name', CONCAT(first_name, ' ', last_name) AS 'full_name', contacts.id AS 'contact_id', title,phone_other, phone_work, primary_address_city, primary_address_state, call_outcome_c, email_addresses.email_address as 'email1' 
FROM contacts
INNER JOIN contacts_cstm ON contacts_cstm.id_c = contacts.id AND contacts.deleted = 0
INNER JOIN prospect_lists_prospects ON prospect_lists_prospects.related_id = contacts.id AND prospect_list_id = '".$_REQUEST['uid']."' AND prospect_lists_prospects.deleted=0 AND prospect_lists_prospects.related_type ='Contacts' 
LEFT JOIN accounts_contacts ON accounts_contacts.contact_id = contacts.id and accounts_contacts.deleted=0
LEFT JOIN accounts ON accounts_contacts.account_id = accounts.id and accounts.deleted = 0
LEFT JOIN email_addr_bean_rel on bean_id = contacts.id and email_addr_bean_rel.deleted=0 AND email_addr_bean_rel.primary_address = 1
LEFT JOIN email_addresses on email_addr_bean_rel.email_address_id = email_addresses.id and email_addresses.deleted=0;";

$cResult = $db->query($cSQL);

// labels of modules
global $current_language;
$contactModStrings = return_module_language($current_language, 'Contacts');
$callModStrings = return_module_language($current_language, 'Calls');

// setting up table header here
$sTableHeader = '';
$sTableHeader .= '<tr>';
$sTableHeader .= '<th>'.$contactModStrings['LBL_LIST_ACCOUNT_NAME'].'</th>';
$sTableHeader .= '<th>'.$contactModStrings['LBL_LIST_CONTACT_NAME'].'</th>';
$sTableHeader .= '<th>'.$contactModStrings['LBL_LIST_TITLE'].'</th>';
$sTableHeader .= '<th>'.$contactModStrings['LBL_OTHER_PHONE'].'</th>';
$sTableHeader .= '<th>'.$contactModStrings['LBL_PHONE_WORK'].'</th>';
$sTableHeader .= '<th>'.$contactModStrings['LBL_LIST_EMAIL_ADDRESS'].'</th>';
$sTableHeader .= '<th>'.$contactModStrings['LBL_PRIMARY_ADDRESS_CITY'].'</th>';
$sTableHeader .= '<th>'.$contactModStrings['LBL_PRIMARY_ADDRESS_STATE'].'</th>';
$sTableHeader .= '<th>'.$callModStrings['LBL_CALL_OUTCOME'].'</th>';
$sTableHeader .= '<th>'.$contactModStrings['LBL_LOG_CALL'].'</th>';
$sTableHeader .= '</tr>';
//$sTableHeader .= '<td colspan=10>'.$cSQL.'</td>';
// setting up buttons
require_once('modules/ATC_Teleseller/ATC_CallLogger.php');
$logcall_options = array(
            'log_call' => array('Call', 'accept_inline'),
            'no_result' => array('Not Interested', 'decline_inline'),
            'create_note' => array('Note', 'txt_image_inline'),
            'appointment' => array('Appointment', 'Meetings_favico')
        );
// rolling up rows
$sTableRow = '';
$ctr = 0;

if(!empty($cResult)){
    while($oContact = $db->fetchByAssoc($cResult)){
        $ctr++;
        $class = ($ctr & 1) ? "oddListRowS1" : "evenListRowS1";
        $sTableRow .= '<tr >';
	if($oContact['account_name'] != ''){
        $sTableRow .= '<td><a href = '.$url.'#Accounts/'.$oContact['account_id'].'">'.$oContact['account_name'].'</a></td>';
	}else{
	$sTableRow .= '<td></td>';
	}
	$sTableRow .= '<td><a href = '.$url.'#Contacts/'.$oContact['contact_id'].'">'.$oContact['full_name'].'</a></td>';
        $sTableRow .= '<td>'.$oContact['title'].'</td>';
        $sTableRow .= '<td>'.$oContact['phone_other'].'</td>';
        $sTableRow .= '<td>'.$oContact['phone_work'].'</td>';
        $sTableRow .= '<td>'.$oContact['email1'].'</td>';
        $sTableRow .= '<td>'.$oContact['primary_address_city'].'</td>';
        $sTableRow .= '<td>'.$oContact['primary_address_state'].'</td>';
        $sTableRow .= '<td><div id = "reloadVal_'.$oContact['contact_id'].'" name = "reloadVal_'.$oContact['contact_id'].'">'.$oContact['call_outcome_c'].'</div></td>';
        $sTableRow .= '<td>'.renderLogCall('Contacts', $oContact['contact_id'], $logcall_options).'</td>';
        $sTableRow .= '</tr>';
    }
}
$count = count($cContacts);

// echo output
$callModeView =<<<EOQ
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	<script type="text/javascript" src="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"></script>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
                <link rel="stylesheet" type="text/css" href="custom/modules/ProspectLists/css/data_table.css" />
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
			if($count > 200){
				$('.dataTable').dataTable(
                                {
                                    "iDisplayLength": 100,
                                    "aLengthMenu": [25, 50, 100, 200, $count]
                                });
			}
			else if($count > 100 && $count < 200){
				$('.dataTable').dataTable(
                                {
                                    "iDisplayLength": 100,
                                    "aLengthMenu": [100,$count]
                                });
			}
		else
			$('.dataTable').dataTable(
                                {
                                    "iDisplayLength": 100,
                                    "aLengthMenu": [$count]
                                });
			});
		</script>
	</head>
	<body id="dt_example">
        <input type = "hidden" id = "target_list_id" name = "target_list_id" value = "$sTargetId">
		<div id="container">
			<div class="full_width big">

			</div>
			<div id="demo_trident">
        <table cellpadding="0" cellspacing="0" border="0" class="display dataTable" id="datatable" width = "100%">
            <thead>
                $sTableHeader
            </thead>
            <tbody>
                $sTableRow
            </tbody>
	</table>
EOQ;
  echo $callModeView;
}
else
    echo 'Error: Record id not found';
