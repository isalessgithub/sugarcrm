<?php
$module_name = 'ATC_Appointments';
$listViewDefs [$module_name] = 
array (
  'APPOINTMENT_NUMBER' => 
  array (
    'type' => 'int',
    'label' => 'LBL_APPOINTMENT_NUMBER',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
  'APPOINTMENT_STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_APPOINTMENT_STATUS',
    'width' => '10%',
  ),
  'APPOINTMENT_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_APPOINTMENT_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'ATC_APPOINTMENTS_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_APPOINTMENTS_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'ATC_APPOINTMENTS_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'ATC_CLIENTSALESREPS_ATC_APPOINTMENTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_CLIENTSALESREPS_ATC_APPOINTMENTS_FROM_ATC_CLIENTSALESREPS_TITLE',
    'id' => 'ATC_CLIENTSALESREPS_ATC_APPOINTMENTSATC_CLIENTSALESREPS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_FROM_ATC_ISSCAMPAIGNS_TITLE',
    'id' => 'ATC_ISSCAMPAIGNS_ATC_APPOINTMENTSATC_ISSCAMPAIGNS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'APPOINTMENT_RESULT_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_APPOINTMENT_RESULT',
    'width' => '10%',
  ),
  'ONE_APPOINTMENT_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_ONE_APPOINTMENT',
    'width' => '10%',
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
