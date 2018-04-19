<?php
 // created: 2018-03-09 14:56:58
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['duplicate_merge_dom_value']=0;
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['labelValue']='Rep Email 1';
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['calculated']='1';
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['formula']='related($atc_clientsalesreps_atc_appointments,"email1")';
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['enforced']='1';

 ?>