<?php
// created: 2017-11-09 17:16:17
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
          'name' => 'atc_isscampaigns_atc_appointments_name',
          'label' => 'LBL_ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_FROM_ATC_ISSCAMPAIGNS_TITLE',
          'enabled' => true,
          'id' => 'ATC_ISSCAMPAIGNS_ATC_APPOINTMENTSATC_ISSCAMPAIGNS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
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
          'type' => 'varchar',
          'default' => true,
          'label' => 'Title',
          'enabled' => true,
          'name' => 'title_c',
        ),
        4 => 
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