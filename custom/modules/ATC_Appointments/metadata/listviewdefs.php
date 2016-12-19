<?php
$module_name = 'ATC_Appointments';
$listViewDefs[$module_name] = 
array (
  'name' => 
  array (
    'width' => '4%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'appointment_date' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_APPOINTMENT_DATE',
    'width' => '8%',
    'default' => true,
  ),
  'appointment_status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_APPOINTMENT_STATUS',
    'width' => '8%',
  ),
  'appointment_place' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_APPOINTMENT_PLACE',
    'width' => '8%',
  ),
  'accounts_atc_appointments_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_ATC_APPOINTMENTS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_ATC_APPOINTMENTS_1ACCOUNTS_IDA',
    'width' => '8%',
    'default' => true,
  ),
  'atc_appointments_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_APPOINTMENTS_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'ATC_APPOINTMENTS_CONTACTSCONTACTS_IDA',
    'width' => '8%',
    'default' => true,
  ),
  'direct_c' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_DIRECT',
    'sortable' => false,
    'width' => '6%',
  ),
  'switchboard_c' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SWITCHBOARD',
    'sortable' => false,
    'width' => '6%',
  ),
  'atc_isscampaigns_atc_appointments_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_FROM_ATC_ISSCAMPAIGNS_TITLE',
    'id' => 'ATC_ISSCAMPAIGNS_ATC_APPOINTMENTSATC_ISSCAMPAIGNS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'prospectlists_atc_appointments_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PROSPECTLISTS_ATC_APPOINTMENTS_1_FROM_PROSPECTLISTS_TITLE',
    'id' => 'PROSPECTLISTS_ATC_APPOINTMENTS_1PROSPECTLISTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'readonly' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '8%',
    'default' => true,
  ),
);
