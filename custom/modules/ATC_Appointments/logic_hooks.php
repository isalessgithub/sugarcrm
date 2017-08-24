<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will
// be automatically rebuilt in the future.
 $hook_version = 1;
$hook_array = Array();
// position, file, function
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1,'Update direct_phone','custom/modules/ATC_Appointments/logic_hooks/CustomAppointmentsLH.php','CustomAppointmentsLH','update_direct_phone',);
$hook_array['before_save'][] = Array(2,'update last appointment date','custom/modules/ATC_Appointments/logic_hooks/updateLastAppointmentDate.php','updateLastAppointmentDate','updateAppointmentDate',);
$hook_array['before_save'][] = Array(3,'set installed status','custom/modules/ATC_Appointments/logic_hooks/monthly_result_logic.php','MonthlyResults','monthly_result',);
$hook_array['before_save'][] = array(4, 'set feedback status', 'custom/modules/ATC_Appointments/logic_hooks/update_feedback.php','updateFeedback', 'updateFeedbackStatus');
$hook_array['before_save'][] = Array('1','workflow','include/workflow/WorkFlowHandler.php','WorkFlowHandler','WorkFlowHandler',);
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1,'Update name','custom/modules/ATC_Appointments/logic_hooks/CustomAppointmentsLH.php','CustomAppointmentsLH','update_name',);
$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(1,'Increment or Decrement Appointment count on contact','custom/modules/ATC_Appointments/logic_hooks/upd_contact_appointments.php','ContactAppointment','ContactAppointmentCount',);
$hook_array['after_relationship_delete'] = Array();
$hook_array['after_relationship_delete'][] = Array(1,'Increment or Decrement Appointment count on contact','custom/modules/ATC_Appointments/logic_hooks/upd_contact_appointments.php','ContactAppointment','ContactAppointmentCount',);

?>
