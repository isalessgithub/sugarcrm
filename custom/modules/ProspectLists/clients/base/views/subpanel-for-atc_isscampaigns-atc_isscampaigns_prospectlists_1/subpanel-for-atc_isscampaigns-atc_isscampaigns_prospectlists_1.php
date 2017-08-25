<?php
// created: 2017-07-23 11:29:04
$viewdefs['ProspectLists']['base']['view']['subpanel-for-atc_isscampaigns-atc_isscampaigns_prospectlists_1'] = array (
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
          'name' => 'account_total_c',
          'label' => 'LBL_ACCOUNT_TOTAL',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO',
          'enabled' => true,
          'id' => 'ASSIGNED_USER_ID',
          'link' => true,
          'default' => true,
        ),
        3 => 
        array (
          'label' => 'LBL_LIST_DESCRIPTION',
          'enabled' => true,
          'default' => true,
          'name' => 'description',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);