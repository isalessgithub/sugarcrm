<?php

include_once("include/workflow/alert_utils.php");
    class ATC_Appointments_alerts {
    function process_wflow_ATC_Appointments0_alert0(&$focus){
            include("custom/modules/ATC_Appointments/workflow/alerts_array.php");

	 $alertshell_array = array(); 

	 $alertshell_array['alert_msg'] = "3800a120-c313-11e7-ad1f-12f45cb4e5cd"; 

	 $alertshell_array['source_type'] = "Custom Template"; 

	 $alertshell_array['alert_type'] = "Email"; 

	 process_workflow_alerts($focus, $alert_meta_array['ATC_Appointments0_alert0'], $alertshell_array, false); 
 	 unset($alertshell_array); 
	 }



    //end class
    }

?>