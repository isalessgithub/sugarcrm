<?php
 // created: 2018-01-11 20:04:59
$dictionary['Task']['fields']['rel_appt_date_c']['duplicate_merge_dom_value']=0;
$dictionary['Task']['fields']['rel_appt_date_c']['labelValue']='Appointment Date';
$dictionary['Task']['fields']['rel_appt_date_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Task']['fields']['rel_appt_date_c']['calculated']='1';
$dictionary['Task']['fields']['rel_appt_date_c']['formula']='related($atc_appointments_tasks_1,"appointment_date")';
$dictionary['Task']['fields']['rel_appt_date_c']['enforced']='1';
$dictionary['Task']['fields']['rel_appt_date_c']['dependency']='';

 ?>