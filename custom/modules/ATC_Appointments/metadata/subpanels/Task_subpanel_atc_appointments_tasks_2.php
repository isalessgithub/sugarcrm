<?php
// created: 2018-01-11 17:14:17
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
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
  'atc_isscampaigns_atc_appointments_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_FROM_ATC_ISSCAMPAIGNS_TITLE',
    'id' => 'ATC_ISSCAMPAIGNS_ATC_APPOINTMENTSATC_ISSCAMPAIGNS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ATC_ISSCampaigns',
    'target_record_key' => 'atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida',
  ),
  'appointment_status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_APPOINTMENT_STATUS',
    'width' => '10%',
  ),
  'appointment_date' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_APPOINTMENT_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'appointment_place' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_APPOINTMENT_PLACE',
    'width' => '10%',
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