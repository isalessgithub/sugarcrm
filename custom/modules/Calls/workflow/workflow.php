<?php

include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class Calls_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/Calls/workflow/triggers_array.php");
		include("custom/modules/Calls/workflow/alerts_array.php");
		include("custom/modules/Calls/workflow/actions_array.php");
		include("custom/modules/Calls/workflow/plugins_array.php");
		
 if( (isset($focus->call_outcome_c) && $focus->call_outcome_c ==  'Left company')){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['799dd2d8_7cd9_040e_7779_57f75566b19f'])){
		$triggeredWorkflows['799dd2d8_7cd9_040e_7779_57f75566b19f'] = true;
		 unset($alertshell_array); 
		 process_workflow_actions($focus, $action_meta_array['Calls0_action0']); 
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