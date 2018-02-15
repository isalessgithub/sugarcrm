<?php
class updateFeedback{
	function updateFeedbackStatus($bean,$event,$arguments){

		//$GLOBALS['log']->fatal("---".$bean->atc_clientsalesreps_id_c);
		//check if appointment is attended.
		if (($bean->appointment_status== 'Attended' && $bean->fetched_row['appointment_status'] != 'Attended') || ($bean->appointment_status== 'DC_Appt_Attended' && $bean->fetched_row['appointment_status'] != 'DC_Appt_Attended')){
			if($bean->feedback_status_c == '' && $bean->feedback_timestamp == ''){
				$bean->feedback_status_c = 'qualified';
				$dt = new SugarDateTime();
				$bean->feedback_timestamp = $dt->asDb();
			}
		}
		if(($bean->appointment_status =='Attended' || $bean->appointment_status == 'DC_Appt_Attended') && $bean->feedback_status_c == 'resend'){
			$bean->feedback_status_c = 'qualified';
			$bean->feedback_timestamp = '';
			$dt = new SugarDateTime();
			$bean->feedback_timestamp = $dt->asDb();
		}
	}
}
