<?php
/**
 * @author: Miloš Mirić aka eitrix
 */

$hook_version = 1;
$hook_array = array();
$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(1, "Update direct_phone", "custom/modules/ATC_Appointments/logic_hooks/CustomAppointmentsLH.php", "CustomAppointmentsLH", "update_direct_phone");
$hook_array['after_save'] = array();
$hook_array['after_save'][] = array(1, "Update name", "custom/modules/ATC_Appointments/logic_hooks/CustomAppointmentsLH.php", "CustomAppointmentsLH", "update_name");
