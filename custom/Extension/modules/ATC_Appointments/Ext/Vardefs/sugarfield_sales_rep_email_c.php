<?php
 // created: 2017-08-30 11:25:20
$dictionary['ATC_Appointments']['fields']['sales_rep_email_c']['labelValue']='Sales Rep Email';
$dictionary['ATC_Appointments']['fields']['sales_rep_email_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ATC_Appointments']['fields']['sales_rep_email_c']['formula']='related($atc_clientsalesreps_atc_appointments,"email")';
$dictionary['ATC_Appointments']['fields']['sales_rep_email_c']['enforced']='false';
$dictionary['ATC_Appointments']['fields']['sales_rep_email_c']['dependency']='';

 ?>