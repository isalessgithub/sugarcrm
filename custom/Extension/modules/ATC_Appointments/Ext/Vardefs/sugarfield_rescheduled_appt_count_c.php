<?php
 // created: 2014-02-26 23:25:21
$dictionary['ATC_Appointments']['fields']['rescheduled_appt_count_c']['duplicate_merge_dom_value']=0;
$dictionary['ATC_Appointments']['fields']['rescheduled_appt_count_c']['calculated']='1';
$dictionary['ATC_Appointments']['fields']['rescheduled_appt_count_c']['formula']='ifElse(equal($appointment_status,"Reschedule"),1,0)';
$dictionary['ATC_Appointments']['fields']['rescheduled_appt_count_c']['enforced']='1';
$dictionary['ATC_Appointments']['fields']['rescheduled_appt_count_c']['dependency']='';

 ?>