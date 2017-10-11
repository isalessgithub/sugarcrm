<?php
 // created: 2017-10-09 12:33:04
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['labelValue']='Rep Email 1';
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['formula']='related($atc_clientsalesreps_atc_appointments,"email1")';
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['enforced']='false';
$dictionary['ATC_Appointments']['fields']['clientrep_email1_c']['dependency']='';

 ?>