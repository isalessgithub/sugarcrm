<?php
// created: 2018-07-05 19:52:56
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'appointment_status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_APPOINTMENT_STATUS',
    'width' => '10%',
  ),
  'appointment_place' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_APPOINTMENT_PLACE',
    'width' => '10%',
  ),
  'appointment_date' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_APPOINTMENT_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'prospectlists_atc_appointments_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_PROSPECTLISTS_ATC_APPOINTMENTS_1_FROM_PROSPECTLISTS_TITLE',
    'id' => 'PROSPECTLISTS_ATC_APPOINTMENTS_1PROSPECTLISTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ProspectLists',
    'target_record_key' => 'prospectlists_atc_appointments_1prospectlists_ida',
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
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);