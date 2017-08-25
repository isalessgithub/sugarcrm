<?php
class updateFeedback{
	function updateFeedbackStatus($bean,$event,$arguments){
		//check if appointment is attended.
		if ($bean->appointment_status== 'Attended' && $bean->fetched_row['appointment_status'] != 'Attended'){
			if($bean->feedback_status_c == '' && $bean->feedback_timestamp == ''){
				$bean->feedback_status_c = 'qualified';
				$dt = new SugarDateTime();
				$bean->feedback_timestamp = $dt->asDb();
			}
		}
	}
}
