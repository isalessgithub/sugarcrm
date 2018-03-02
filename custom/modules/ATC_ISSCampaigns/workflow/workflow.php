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
		if(empty($focus->fetched_row['id']) || (!empty($_SESSION["workflow_cron"]) && $_SESSION["workflow_cron"]=="Yes" && !empty($_SESSION["workflow_id_cron"]) && ArrayFunctions::in_array_access("4ca44246-1587-11e8-9565-12f45cb4e5cd", $_SESSION["workflow_id_cron"]))){ 
 
 if(true){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['4238b7be_167d_11e8_b6d2_12f45cb4e5cd'])){
		$triggeredWorkflows['4238b7be_167d_11e8_b6d2_12f45cb4e5cd'] = true;
		 unset($alertshell_array); 
		 $action_meta_array['ATC_ISSCampaigns0_action0']['trigger_id'] = '4238b7be_167d_11e8_b6d2_12f45cb4e5cd'; 
 	 $action_meta_array['ATC_ISSCampaigns0_action0']['action_id'] = 'd5c19408-158b-11e8-bb2d-12f45cb4e5cd'; 
 	 process_workflow_actions($focus, $action_meta_array['ATC_ISSCampaigns0_action0']); 
 	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

		 //End if new, update, or all record
 		} 


	//end function process_wflow_triggers
	}

	//end class
	}

?>