<?php
/**
 * @author: Miloš Mirić aka eitrix
 */

//$GLOBALS['log']->fatal(' start hook ');

$hook_version = 1;
$hook_array = array();
$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(1, "Update direct_phone", "custom/modules/ATC_Appointments/logic_hooks/CustomAppointmentsLH.php", "CustomAppointmentsLH", "update_direct_phone");
$hook_array['after_save'] = array();
$hook_array['after_save'][] = array(1, "Update name", "custom/modules/ATC_Appointments/logic_hooks/CustomAppointmentsLH.php", "CustomAppointmentsLH", "update_name");

// Added: P. Massardo
    $hook_array['after_relationship_add']=Array();
    $hook_array['after_relationship_add'][]=Array(1,'Increment or Decrement Appointment count on contact', 'custom/modules/ATC_Appointments/logic_hooks/upd_contact_appointments.php','ContactAppointment','ContactAppointmentCount');

    $hook_array['after_relationship_delete']=Array();
    $hook_array['after_relationship_delete'][]=Array(1,'Increment or Decrement Appointment count on contact', 'custom/modules/ATC_Appointments/logic_hooks/upd_contact_appointments.php','ContactAppointment','ContactAppointmentCount');

//$GLOBALS['log']->fatal(' end  hook ');


?>
