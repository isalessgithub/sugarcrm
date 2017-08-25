<?php

use Sugarcrm\Sugarcrm\Util\Arrays\ArrayFunctions\ArrayFunctions;
include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class ATC_Appointments_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/ATC_Appointments/workflow/triggers_array.php");
		include("custom/modules/ATC_Appointments/workflow/alerts_array.php");
		include("custom/modules/ATC_Appointments/workflow/actions_array.php");
		include("custom/modules/ATC_Appointments/workflow/plugins_array.php");
		if(isset($focus->fetched_row['id']) && $focus->fetched_row['id']!=""){ 
 
 if( ( !($focus->fetched_row['appointment_status'] ==  stripslashes('Attended') )) && 
 (isset($focus->appointment_status) && $focus->appointment_status ==  stripslashes('Attended'))){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['7ccc51f2_6db2_11e7_a3c3_12f45cb4e5cd'])){
		$triggeredWorkflows['7ccc51f2_6db2_11e7_a3c3_12f45cb4e5cd'] = true;
		 unset($alertshell_array); 
		 $action_meta_array['ATC_Appointments0_action0']['trigger_id'] = '7ccc51f2_6db2_11e7_a3c3_12f45cb4e5cd'; 
 	 $action_meta_array['ATC_Appointments0_action0']['action_id'] = '7cc2383e-6db2-11e7-a9d0-12f45cb4e5cd'; 
 	 process_workflow_actions($focus, $action_meta_array['ATC_Appointments0_action0']); 
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