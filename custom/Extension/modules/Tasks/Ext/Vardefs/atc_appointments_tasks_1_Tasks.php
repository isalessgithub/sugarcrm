<?php
// created: 2017-12-28 12:20:49
$dictionary["Task"]["fields"]["atc_appointments_tasks_1"] = array (
  'name' => 'atc_appointments_tasks_1',
  'type' => 'link',
  'relationship' => 'atc_appointments_tasks_1',
  'source' => 'non-db',
  'module' => 'ATC_Appointments',
  'bean_name' => 'ATC_Appointments',
  'side' => 'right',
  'vname' => 'LBL_ATC_APPOINTMENTS_TASKS_1_FROM_TASKS_TITLE',
  'id_name' => 'atc_appointments_tasks_1atc_appointments_ida',
  'link-type' => 'one',
);
$dictionary["Task"]["fields"]["atc_appointments_tasks_1_name"] = array (
  'name' => 'atc_appointments_tasks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_APPOINTMENTS_TASKS_1_FROM_ATC_APPOINTMENTS_TITLE',
  'save' => true,
  'id_name' => 'atc_appointments_tasks_1atc_appointments_ida',
  'link' => 'atc_appointments_tasks_1',
  'table' => 'atc_appointments',
  'module' => 'ATC_Appointments',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["atc_appointments_tasks_1atc_appointments_ida"] = array (
  'name' => 'atc_appointments_tasks_1atc_appointments_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_APPOINTMENTS_TASKS_1_FROM_TASKS_TITLE_ID',
  'id_name' => 'atc_appointments_tasks_1atc_appointments_ida',
  'link' => 'atc_appointments_tasks_1',
  'table' => 'atc_appointments',
  'module' => 'ATC_Appointments',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
