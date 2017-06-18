<?php
// created: 2017-06-03 13:15:18
$viewdefs['ProspectLists']['base']['view']['subpanel-for-accounts-accounts_prospectlists_1'] = array (
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
          'label' => 'LBL_LIST_PROSPECT_LIST_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'label' => 'LBL_LIST_DESCRIPTION',
          'enabled' => true,
          'default' => true,
          'name' => 'description',
        ),
        2 => 
        array (
          'label' => 'LBL_LIST_TYPE_NO',
          'enabled' => true,
          'default' => true,
          'name' => 'list_type',
        ),
        3 => 
        array (
          'label' => 'LBL_LIST_ENTRIES',
          'enabled' => true,
          'default' => true,
          'name' => 'entry_count',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);