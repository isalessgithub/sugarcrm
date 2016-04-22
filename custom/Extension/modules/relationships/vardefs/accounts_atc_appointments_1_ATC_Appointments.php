<?php
// created: 2013-10-04 10:51:35
$dictionary["ATC_Appointments"]["fields"]["accounts_atc_appointments_1"] = array (
  'name' => 'accounts_atc_appointments_1',
  'type' => 'link',
  'relationship' => 'accounts_atc_appointments_1',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_ATC_APPOINTMENTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_atc_appointments_1accounts_ida',
);
$dictionary["ATC_Appointments"]["fields"]["accounts_atc_appointments_1_name"] = array (
  'name' => 'accounts_atc_appointments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_ATC_APPOINTMENTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_atc_appointments_1accounts_ida',
  'link' => 'accounts_atc_appointments_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ATC_Appointments"]["fields"]["accounts_atc_appointments_1accounts_ida"] = array (
  'name' => 'accounts_atc_appointments_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_atc_appointments_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_ATC_APPOINTMENTS_1_FROM_ATC_APPOINTMENTS_TITLE',
);
