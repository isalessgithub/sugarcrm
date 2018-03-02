<?php
 // created: 2018-02-20 20:03:50
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['duplicate_merge_dom_value']=0;
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['labelValue']='Rep Email 1';
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['calculated']='true';
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['formula']='related($atc_clientsalesreps_atc_appointments,"email1")';
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['enforced']='true';
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['dependency']='';

 ?>