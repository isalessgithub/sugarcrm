<?php
echo getVersionedScript('custom/modules/ProspectLists/js/jquery.dataTables.min.js');
echo getVersionedScript('modules/ATC_Teleseller/javascript/ATC_JS/call_logging.js');
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
$oContacts = $oProspectList->get_linked_beans('contacts', 'Contacts');

// fetch last call outcome for a contact
function last_call_outcome($sContactId = ''){
    global $db;
    $sSQL = 'SELECT call_outcome_c FROM calls_cstm
            INNER JOIN calls ON calls_cstm.id_c = calls.id
            INNER JOIN calls_contacts ON calls_contacts.call_id = calls.id
	    inner join prospectlists_calls_1_c on calls.id = prospectlists_calls_1_c.prospectlists_calls_1calls_idb
            WHERE calls.deleted = 0 AND calls_contacts.deleted = 0
            AND calls_contacts.contact_id = "'.$sContactId.'" and
            prospectlists_calls_1_c.prospectlists_calls_1prospectlists_ida = "'.$_REQUEST['uid'].'"
            ORDER BY calls.date_entered DESC LIMIT 0 , 1';
    $aResult = $db->query($sSQL, true);
    $sReturnResult = $db->fetchByAssoc($aResult);
    return $sReturnResult['call_outcome_c'];
}

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
if(count($oContacts) > 0){
    foreach($oContacts as $iContact => $oContact){
        $ctr++;
        $class = ($ctr & 1) ? "oddListRowS1" : "evenListRowS1";
        $sTableRow .= '<tr >';//class = "'.$class.'"
        $sTableRow .= '<td><a href = "index.php?module=Accounts&action=DetailView&record='.$oContact->account_id.'">'.$oContact->account_name.'</a></td>';
        $sTableRow .= '<td><a href = "index.php?module=Contacts&action=DetailView&record='.$oContact->id.'">'.$oContact->full_name.'</a></td>';
        $sTableRow .= '<td>'.$oContact->title.'</td>';
        $sTableRow .= '<td>'.$oContact->phone_other.'</td>';
        $sTableRow .= '<td>'.$oContact->phone_work.'</td>';
        $sTableRow .= '<td>'.$oContact->email1.'</td>';
        $sTableRow .= '<td>'.$oContact->primary_address_city.'</td>';
        $sTableRow .= '<td>'.$oContact->primary_address_state.'</td>';
        $sTableRow .= '<td><div id = "reloadVal_'.$oContact->id.'" name = "reloadVal_'.$oContact->id.'">'.last_call_outcome($oContact->id).'</div></td>';
        $sTableRow .= '<td>'.renderLogCall('Contacts', $oContact->id, $logcall_options).'</td>';
        $sTableRow .= '</tr>';
    }
}
$count = count($oContacts);
// echo output
$callModeView =<<<EOQ
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
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