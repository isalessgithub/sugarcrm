<?php
// created: 2017-08-10 14:17:16
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'appointment_date' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_APPOINTMENT_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'accounts_atc_appointments_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ACCOUNTS_ATC_APPOINTMENTS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_ATC_APPOINTMENTS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'accounts_atc_appointments_1accounts_ida',
  ),
  'atc_appointments_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ATC_APPOINTMENTS_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'ATC_APPOINTMENTS_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'atc_appointments_contactscontacts_ida',
  ),
  'title_c' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_TITLE',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'vname' => 'LBL_ASSIGNED_TO',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'assigned_user_id',
  ),
);