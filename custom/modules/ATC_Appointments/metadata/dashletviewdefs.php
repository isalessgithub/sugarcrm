<?php
$dashletData['ATC_AppointmentsDashlet']['searchFields'] = array (
  'appointment_number' => 
  array (
    'default' => '',
  ),
  'appointment_date' => 
  array (
    'default' => '',
  ),
  'appointment_status' => 
  array (
    'default' => '',
  ),
  'appointment_place' => 
  array (
    'default' => '',
  ),
  'atc_clientsalesreps_atc_appointments_name' => 
  array (
    'default' => '',
  ),
  'atc_appointments_contacts_name' => 
  array (
    'default' => '',
  ),
  'atc_isscampaigns_atc_appointments_name' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'team_id' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['ATC_AppointmentsDashlet']['columns'] = array (
  'appointment_number' => 
  array (
    'type' => 'int',
    'label' => 'LBL_APPOINTMENT_NUMBER',
    'width' => '10%',
    'default' => true,
    'name' => 'appointment_number',
    'link' => true,
  ),
  'appointment_date' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_APPOINTMENT_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'appointment_date',
  ),
  'appointment_status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_APPOINTMENT_STATUS',
    'width' => '10%',
    'name' => 'appointment_status',
  ),
  'direct_phone' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_DIRECT_PHONE',
    'width' => '10%',
    'default' => true,
    'name' => 'direct_phone',
  ),
  'accounts_atc_appointments_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_ATC_APPOINTMENTS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_ATC_APPOINTMENTS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'atc_appointments_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_APPOINTMENTS_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'ATC_APPOINTMENTS_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'atc_appointments_contacts_name',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'atc_clientsalesreps_atc_appointments_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_CLIENTSALESREPS_ATC_APPOINTMENTS_FROM_ATC_CLIENTSALESREPS_TITLE',
    'id' => 'ATC_CLIENTSALESREPS_ATC_APPOINTMENTSATC_CLIENTSALESREPS_IDA',
    'width' => '10%',
    'default' => false,
    'name' => 'atc_clientsalesreps_atc_appointments_name',
  ),
  'appointment_place' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_APPOINTMENT_PLACE',
    'width' => '10%',
    'name' => 'appointment_place',
  ),
  'atc_isscampaigns_atc_appointments_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_FROM_ATC_ISSCAMPAIGNS_TITLE',
    'id' => 'ATC_ISSCAMPAIGNS_ATC_APPOINTMENTSATC_ISSCAMPAIGNS_IDA',
    'width' => '10%',
    'default' => false,
    'name' => 'atc_isscampaigns_atc_appointments_name',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'team_name' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
);
