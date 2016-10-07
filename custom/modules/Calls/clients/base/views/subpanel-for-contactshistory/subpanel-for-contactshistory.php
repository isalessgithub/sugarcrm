<?php
// created: 2016-10-07 10:00:33
$viewdefs['Calls']['base']['view']['subpanel-for-contactshistory'] = array (
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
          'label' => 'LBL_LIST_SUBJECT',
          'default' => true,
          'enabled' => true,
          'name' => 'name',
          'link' => true,
          'type' => 'name',
        ),
        1 => 
        array (
          'target_record_key' => 'contact_id',
          'target_module' => 'Contacts',
          'sortable' => false,
          'label' => 'LBL_LIST_CONTACT',
          'default' => true,
          'enabled' => true,
          'name' => 'contact_name',
          'link' => true,
          'type' => 'relate',
        ),
        2 => 
        array (
          'target_record_key' => 'prospectlists_calls_1prospectlists_ida',
          'target_module' => 'ProspectLists',
          'sortable' => false,
          'label' => 'Target List',
          'default' => true,
          'enabled' => true,
          'name' => 'pro_list',
          'link' => true,
          'type' => 'relate',
        ),
        3 => 
        array (
          'label' => 'LBL_LIST_DATE_MODIFIED',
          'default' => true,
          'enabled' => true,
          'name' => 'date_modified',
          'type' => 'datetime',
        ),
        4 => 
        array (
          'label' => 'LBL_LIST_DATE_ENTERED',
          'default' => true,
          'enabled' => true,
          'name' => 'date_entered',
          'type' => 'datetime',
        ),
        5 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'type' => 'relate',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);