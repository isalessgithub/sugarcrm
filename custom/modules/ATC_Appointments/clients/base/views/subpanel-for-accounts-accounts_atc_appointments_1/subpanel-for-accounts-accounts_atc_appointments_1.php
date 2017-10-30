<?php
// created: 2017-09-08 11:15:25
$viewdefs['ATC_Appointments']['base']['view']['subpanel-for-accounts-accounts_atc_appointments_1'] = array (
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
          'type' => 'varchar',
          'default' => true,
          'label' => 'Title',
          'enabled' => true,
          'name' => 'title_c',
        ),
        2 =>
        array (
          'type' => 'relate',
          'link' => true,
          'default' => true,
          'target_module' => 'Contacts',
          'target_record_key' => 'atc_appointments_contactscontacts_ida',
          'label' => 'Contact',
          'enabled' => true,
          'name' => 'atc_appointments_contacts_name',
        ),
        3 =>
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
