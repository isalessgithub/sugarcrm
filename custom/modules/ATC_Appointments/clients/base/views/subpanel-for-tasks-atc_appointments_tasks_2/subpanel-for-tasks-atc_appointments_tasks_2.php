<?php
// created: 2018-01-11 17:14:17
$viewdefs['ATC_Appointments']['base']['view']['subpanel-for-tasks-atc_appointments_tasks_2'] = array (
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
          'name' => 'title_c',
          'label' => 'LBL_TITLE',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'atc_isscampaigns_atc_appointments_name',
          'label' => 'LBL_ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_FROM_ATC_ISSCAMPAIGNS_TITLE',
          'enabled' => true,
          'id' => 'ATC_ISSCAMPAIGNS_ATC_APPOINTMENTSATC_ISSCAMPAIGNS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'type' => 'enum',
          'default' => true,
          'label' => 'LBL_APPOINTMENT_STATUS',
          'enabled' => true,
          'name' => 'appointment_status',
        ),
        4 => 
        array (
          'type' => 'datetimecombo',
          'default' => true,
          'label' => 'LBL_APPOINTMENT_DATE',
          'enabled' => true,
          'name' => 'appointment_date',
        ),
        5 => 
        array (
          'type' => 'enum',
          'default' => true,
          'label' => 'LBL_APPOINTMENT_PLACE',
          'enabled' => true,
          'name' => 'appointment_place',
        ),
        6 => 
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
        7 => 
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