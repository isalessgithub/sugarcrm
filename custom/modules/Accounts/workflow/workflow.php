<?php

use Sugarcrm\Sugarcrm\Util\Arrays\ArrayFunctions\ArrayFunctions;
include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class Accounts_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/Accounts/workflow/triggers_array.php");
		include("custom/modules/Accounts/workflow/alerts_array.php");
		include("custom/modules/Accounts/workflow/actions_array.php");
		include("custom/modules/Accounts/workflow/plugins_array.php");
		
 if( (  ( !($focus->fetched_row['add_to_target_list_c'] ==  stripslashes('1') )) && 
 (isset($focus->add_to_target_list_c) && $focus->add_to_target_list_c ==  stripslashes('1')) )  ||  (  (isset($focus->add_to_target_list_c) && $focus->add_to_target_list_c ==  stripslashes('1')) && !empty($_SESSION['workflow_cron']) && $_SESSION['workflow_cron']=="Yes" ) ){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 $trigger_time_count = '0';
 	 $time_array['time_int'] = '14440';
	 $time_array['time_int_type'] = 'normal';
	 $time_array['target_field'] = 'none';
	 $workflow_id = '7e8921c0-0d9e-22dd-51e0-5097fb4d79e6'; 

if(!empty($_SESSION["workflow_cron"]) && $_SESSION["workflow_cron"]=="Yes" &&
				!empty($_SESSION["workflow_id_cron"]) && ArrayFunctions::in_array_access($workflow_id, $_SESSION["workflow_id_cron"])){
				
	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['650df182_239d_11e8_a29b_6c4008b2c92e'])){
		$triggeredWorkflows['650df182_239d_11e8_a29b_6c4008b2c92e'] = true;
		 unset($alertshell_array); 
		 $action_meta_array['Accounts0_action0']['trigger_id'] = '650df182_239d_11e8_a29b_6c4008b2c92e'; 
 	 $action_meta_array['Accounts0_action0']['action_id'] = '32e4d2b6-226a-b101-1f31-5097fccc13ee'; 
 	 process_workflow_actions($focus, $action_meta_array['Accounts0_action0']); 
 	}
}

 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

// Hack for skipping the check if field has changed, just check values
if (!empty($_SESSION['workflow_cron'])) {
	$saveWorkflowCron = $_SESSION['workflow_cron'];
}
$_SESSION['workflow_cron'] = 'Yes';
$secondary_array = array();$checkFields = array('for' => 'activity', 'excludeType' => array(), 'field_filter' => array('add_to_target_list_c'));
$dataChanged = $GLOBALS['db']->getDataChanges($focus, $checkFields);
if ((empty($focus->fetched_row) || !empty($dataChanged) ) && (( (  ( !($focus->fetched_row['add_to_target_list_c'] ==  stripslashes('1') )) && 
 (isset($focus->add_to_target_list_c) && $focus->add_to_target_list_c ==  stripslashes('1')) )  ||  (  (isset($focus->add_to_target_list_c) && $focus->add_to_target_list_c ==  stripslashes('1')) && !empty($_SESSION['workflow_cron']) && $_SESSION['workflow_cron']=="Yes" ) ))) {
	 $trigger_time_count = '0';
 	 $time_array['time_int'] = '14440';
	 $time_array['time_int_type'] = 'normal';
	 $time_array['target_field'] = 'none';
$workflow_id = '7e8921c0-0d9e-22dd-51e0-5097fb4d79e6'; 

		 check_for_schedule($focus, $workflow_id, $time_array); 

 }
// Revert to original value
if (!empty($saveWorkflowCron)) {
	$_SESSION['workflow_cron'] = $saveWorkflowCron;
} else {
	unset($_SESSION['workflow_cron']);
}

	//end function process_wflow_triggers
	}

	//end class
	}

?>