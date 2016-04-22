<?php

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
		
 if( (  ( !($focus->fetched_row['add_to_target_list_c'] ==  '1' )) && 
 (isset($focus->add_to_target_list_c) && $focus->add_to_target_list_c ==  '1') )  ||  (  (isset($focus->add_to_target_list_c) && $focus->add_to_target_list_c ==  '1') && !empty($_SESSION['workflow_cron']) && $_SESSION['workflow_cron']=="Yes" ) ){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 $trigger_time_count = '0'; 

 	 $time_array['time_int'] = '14440'; 

	 $time_array['time_int_type'] = 'normal'; 

	 $time_array['target_field'] = 'none'; 

	 $workflow_id = '7e8921c0-0d9e-22dd-51e0-5097fb4d79e6'; 

if(!empty($_SESSION["workflow_cron"]) && $_SESSION["workflow_cron"]=="Yes" &&
				!empty($_SESSION["workflow_id_cron"]) && $_SESSION["workflow_id_cron"]==$workflow_id){
				
	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['aeccc939_28c1_9357_314d_510a28c3dc5f'])){
		$triggeredWorkflows['aeccc939_28c1_9357_314d_510a28c3dc5f'] = true;
		 unset($alertshell_array); 
		 process_workflow_actions($focus, $action_meta_array['Accounts0_action0']); 
 	}
}

else{
		 check_for_schedule($focus, $workflow_id, $time_array); 

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