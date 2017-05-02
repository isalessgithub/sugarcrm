<?php
$hook_version = 1;
$hook_array = array();
$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(1, "Populate Fields", "custom/modules/ATC_ISSCampaigns/logic_hooks/calculate_appt_data.php", "calculateAppointmentData", "calculateApptData");

?>
