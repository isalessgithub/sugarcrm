<?php

use Sugarcrm\Sugarcrm\Util\Arrays\ArrayFunctions\ArrayFunctions;
include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class ATC_ISSCampaigns_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/ATC_ISSCampaigns/workflow/triggers_array.php");
		include("custom/modules/ATC_ISSCampaigns/workflow/alerts_array.php");
		include("custom/modules/ATC_ISSCampaigns/workflow/actions_array.php");
		include("custom/modules/ATC_ISSCampaigns/workflow/plugins_array.php");
		
 if( (  (
 	 ( 
 isset($focus->campaign_finish_date_c) && $focus->campaign_finish_date_c !='' &&  isset($focus->campaign_finish_date_c) && $focus->campaign_finish_date_c !='0000-00-00' 
 && $focus->fetched_row['campaign_finish_date_c']!= $focus->campaign_finish_date_c)  
 && TimeDate::getInstance()->fromDbDate($focus->campaign_finish_date_c)->getTimestamp() < (time() - 15552000)) )  ||  (  (
 	 ( 
 isset($focus->campaign_finish_date_c) && $focus->campaign_finish_date_c !='' &&  isset($focus->campaign_finish_date_c) && $focus->campaign_finish_date_c !='0000-00-00' )  
 && TimeDate::getInstance()->fromDbDate($focus->campaign_finish_date_c)->getTimestamp() < (time() - 15552000)) && !empty($_SESSION['workflow_cron']) && $_SESSION['workflow_cron']=="Yes" ) ){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 $trigger_time_count = '0';
 	 $time_array['time_int'] = '15552000';
	 $time_array['time_int_type'] = 'datetime';
	 $time_array['target_field'] = 'campaign_finish_date_c';
	 $workflow_id = '900fe690-8ceb-11e7-b026-12f45cb4e5cd'; 

if(!empty($_SESSION["workflow_cron"]) && $_SESSION["workflow_cron"]=="Yes" &&
				!empty($_SESSION["workflow_id_cron"]) && ArrayFunctions::in_array_access($workflow_id, $_SESSION["workflow_id_cron"])){
				
	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['f68c1e06_8cec_11e7_8fe7_12f45cb4e5cd'])){
		$triggeredWorkflows['f68c1e06_8cec_11e7_8fe7_12f45cb4e5cd'] = true;
		 unset($alertshell_array); 
		 $action_meta_array['ATC_ISSCampaigns0_action0']['trigger_id'] = 'f68c1e06_8cec_11e7_8fe7_12f45cb4e5cd'; 
 	 $action_meta_array['ATC_ISSCampaigns0_action0']['action_id'] = 'c9486a30-8cec-11e7-a4b1-12f45cb4e5cd'; 
 	 process_workflow_actions($focus, $action_meta_array['ATC_ISSCampaigns0_action0']); 
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
$secondary_array = array();$checkFields = array('for' => 'activity', 'excludeType' => array(), 'field_filter' => array('campaign_finish_date_c'));
$dataChanged = $GLOBALS['db']->getDataChanges($focus, $checkFields);
if ((empty($focus->fetched_row) || !empty($dataChanged) )) {
	 $trigger_time_count = '0';
 	 $time_array['time_int'] = '15552000';
	 $time_array['time_int_type'] = 'datetime';
	 $time_array['target_field'] = 'campaign_finish_date_c';
$workflow_id = '900fe690-8ceb-11e7-b026-12f45cb4e5cd'; 

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