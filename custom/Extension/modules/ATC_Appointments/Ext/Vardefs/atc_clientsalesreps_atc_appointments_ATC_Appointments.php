<?php

$dictionary["ATC_Appointments"]["fields"]["atc_clientsalesreps_atc_appointments"] = array (
  'name' => 'atc_clientsalesreps_atc_appointments',
  'type' => 'link',
  'relationship' => 'atc_clientsalesreps_atc_appointments',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTSALESREPS_ATC_APPOINTMENTS_FROM_ATC_CLIENTSALESREPS_TITLE',
  'id_name' => 'atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida',
);
$dictionary["ATC_Appointments"]["fields"]["atc_clientsalesreps_atc_appointments_name"] = array (
  'name' => 'atc_clientsalesreps_atc_appointments_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTSALESREPS_ATC_APPOINTMENTS_FROM_ATC_CLIENTSALESREPS_TITLE',
  'save' => true,
  'id_name' => 'atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida',
  'link' => 'atc_clientsalesreps_atc_appointments',
  'table' => 'atc_clientsalesreps',
  'module' => 'ATC_ClientSalesReps',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ATC_Appointments"]["fields"]["atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida"] = array (
  'name' => 'atc_clientsalesreps_atc_appointmentsatc_clientsalesreps_ida',
  'type' => 'id',
  'relationship' => 'atc_clientsalesreps_atc_appointments',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ATC_CLIENTSALESREPS_ATC_APPOINTMENTS_FROM_ATC_APPOINTMENTS_TITLE',
  'link' => 'atc_clientsalesreps_atc_appointments',
  'rname' => 'id',
);
