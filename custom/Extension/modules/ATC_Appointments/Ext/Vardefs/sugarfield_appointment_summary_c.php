<?php
 // created: 2016-02-05 09:30:15
$dictionary['ATC_Appointments']['fields']['appointment_summary_c']['duplicate_merge_dom_value']=0;
$dictionary['ATC_Appointments']['fields']['appointment_summary_c']['calculated']='true';
$dictionary['ATC_Appointments']['fields']['appointment_summary_c']['formula']='concat(
$name," - ",
related($atc_isscampaigns_atc_appointments,"name"),
" - ",
related($accounts_atc_appointments_1,"name")
)';
$dictionary['ATC_Appointments']['fields']['appointment_summary_c']['enforced']='true';
$dictionary['ATC_Appointments']['fields']['appointment_summary_c']['dependency']='';

 ?>