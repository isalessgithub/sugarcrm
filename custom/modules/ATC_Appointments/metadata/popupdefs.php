<?php
$popupMeta = array (
    'moduleMain' => 'ATC_Appointments',
    'varName' => 'ATC_Appointments',
    'orderBy' => 'atc_appointments.name',
    'whereClauses' => array (
  'name' => 'atc_appointments.name',
),
    'searchInputs' => array (
  0 => 'atc_appointments_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TEAM',
    'default' => true,
    'name' => 'team_name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_modified',
  ),
  'APPOINTMENT_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_APPOINTMENT_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'appointment_date',
  ),
  'ACCOUNT_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ACCOUNT',
    'width' => '10%',
  ),
  'ATC_APPOINTMENTS_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_APPOINTMENTS_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'ATC_APPOINTMENTS_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'atc_appointments_contacts_name',
  ),
  'APPOINTMENT_STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_APPOINTMENT_STATUS',
    'width' => '10%',
    'name' => 'appointment_status',
  ),
),
);
