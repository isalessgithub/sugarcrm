<?php
class updateFeedback{
	function updateFeedbackStatus($bean,$event,$arguments){
		//check if appointment is attended.
		if (preg_match('/Attended/',$bean->appointment_status) != false && preg_match('/Attended/',$bean->fetched_row['appointment_status']) == false){
			if($bean->feedback_status_c == '' && $bean->feedback_timestamp == ''){
				$bean->feedback_status_c = 'qualified';
				$dt = new SugarDateTime();
				$bean->feedback_timestamp = $dt->asDb();
			}
		}
	}
}
