<?php
 // created: 2018-07-19 16:21:10
$dictionary['ATC_Appointments']['fields']['appt_bu_c']['duplicate_merge_dom_value']=0;
$dictionary['ATC_Appointments']['fields']['appt_bu_c']['labelValue']='Appt BU';
$dictionary['ATC_Appointments']['fields']['appt_bu_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ATC_Appointments']['fields']['appt_bu_c']['calculated']='1';
$dictionary['ATC_Appointments']['fields']['appt_bu_c']['formula']='getDropdownValue("business_unit_list",related($assigned_user_link,"bu_team_c"))';
$dictionary['ATC_Appointments']['fields']['appt_bu_c']['enforced']='1';
$dictionary['ATC_Appointments']['fields']['appt_bu_c']['dependency']='';

 ?>