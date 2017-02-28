<?php

use Sugarcrm\Sugarcrm\Util\Arrays\ArrayFunctions\ArrayFunctions;
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
	if (!isset($triggeredWorkflows['2d4c43c6_fda0_11e6_8799_32e031d0c37b'])){
		$triggeredWorkflows['2d4c43c6_fda0_11e6_8799_32e031d0c37b'] = true;
		 unset($alertshell_array); 
		 $action_meta_array['Calls0_action0']['trigger_id'] = '2d4c43c6_fda0_11e6_8799_32e031d0c37b'; 
 	 $action_meta_array['Calls0_action0']['action_id'] = '65c3d4e6-6d5d-3275-55d6-53ff88705006'; 
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