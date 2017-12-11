<?php

use Sugarcrm\Sugarcrm\Util\Arrays\ArrayFunctions\ArrayFunctions;
include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class ProspectLists_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/ProspectLists/workflow/triggers_array.php");
		include("custom/modules/ProspectLists/workflow/alerts_array.php");
		include("custom/modules/ProspectLists/workflow/actions_array.php");
		include("custom/modules/ProspectLists/workflow/plugins_array.php");
		
 if( ( !(
 	 ( 
 		$focus->fetched_row['client_edit_disabled_c'] === true ||
 		$focus->fetched_row['client_edit_disabled_c'] === 'true' ||
 		$focus->fetched_row['client_edit_disabled_c'] === 'on' ||
 		$focus->fetched_row['client_edit_disabled_c'] === 1 ||
 		$focus->fetched_row['client_edit_disabled_c'] === '1'
 	 )  
 )) && 
 (
 	 ( 
 		isset($focus->client_edit_disabled_c) && $focus->client_edit_disabled_c === true ||
 		isset($focus->client_edit_disabled_c) && $focus->client_edit_disabled_c === 'true' ||
 		isset($focus->client_edit_disabled_c) && $focus->client_edit_disabled_c === 'on' ||
 		isset($focus->client_edit_disabled_c) && $focus->client_edit_disabled_c === 1 ||
 		isset($focus->client_edit_disabled_c) && $focus->client_edit_disabled_c === '1'
 	 )  
)){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['d4605b02_de2d_11e7_9405_12f45cb4e5cd'])){
		$triggeredWorkflows['d4605b02_de2d_11e7_9405_12f45cb4e5cd'] = true;
		 $alertshell_array = array(); 

	 $alertshell_array['alert_msg'] = "10af74c2-acff-11e7-83c2-12f45cb4e5cd"; 

	 $alertshell_array['source_type'] = "Custom Template"; 

	 $alertshell_array['alert_type'] = "Email"; 

	 process_workflow_alerts($focus, $alert_meta_array['ProspectLists0_alert0'], $alertshell_array, false); 
 	 unset($alertshell_array); 
		}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


	//end function process_wflow_triggers
	}

	//end class
	}

?>