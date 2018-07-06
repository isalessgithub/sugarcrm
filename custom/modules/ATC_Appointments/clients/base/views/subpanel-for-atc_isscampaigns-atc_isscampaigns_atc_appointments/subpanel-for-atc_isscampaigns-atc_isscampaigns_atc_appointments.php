<?php
// created: 2018-07-05 19:52:57
$viewdefs['ATC_Appointments']['base']['view']['subpanel-for-atc_isscampaigns-atc_isscampaigns_atc_appointments'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'default' => true,
          'label' => 'LBL_NAME',
          'enabled' => true,
          'name' => 'name',
          'link' => true,
          'type' => 'name',
        ),
        1 => 
        array (
          'type' => 'enum',
          'default' => true,
          'label' => 'LBL_APPOINTMENT_STATUS',
          'enabled' => true,
          'name' => 'appointment_status',
        ),
        2 => 
        array (
          'type' => 'enum',
          'default' => true,
          'label' => 'LBL_APPOINTMENT_PLACE',
          'enabled' => true,
          'name' => 'appointment_place',
        ),
        3 => 
        array (
          'type' => 'datetimecombo',
          'default' => true,
          'label' => 'LBL_APPOINTMENT_DATE',
          'enabled' => true,
          'name' => 'appointment_date',
        ),
        4 => 
        array (
          'name' => 'prospectlists_atc_appointments_1_name',
          'label' => 'LBL_PROSPECTLISTS_ATC_APPOINTMENTS_1_FROM_PROSPECTLISTS_TITLE',
          'enabled' => true,
          'id' => 'PROSPECTLISTS_ATC_APPOINTMENTS_1PROSPECTLISTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        5 => 
        array (
          'type' => 'relate',
          'link' => true,
          'default' => true,
          'target_module' => 'Accounts',
          'target_record_key' => 'accounts_atc_appointments_1accounts_ida',
          'label' => 'LBL_ACCOUNTS_ATC_APPOINTMENTS_1_FROM_ACCOUNTS_TITLE',
          'enabled' => true,
          'name' => 'accounts_atc_appointments_1_name',
        ),
        6 => 
        array (
          'default' => true,
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'name' => 'date_modified',
          'type' => 'datetime',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);