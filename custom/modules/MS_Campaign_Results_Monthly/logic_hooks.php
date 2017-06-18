<?php
$hook_version = 1;
$hook_array = array();
$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(1, "Populate Fields", "custom/modules/MS_Campaign_Results_Monthly/logic_hooks/calculate_monthly_appt_data.php", "calculateMonthlyAppointmentData", "MonthlyApptData");

?>
