<?php
// created: 2018-10-22 16:48:21
$viewdefs['Campaigns']['base']['view']['subpanel-for-iss2_bu_results-iss2_bu_results_campaigns_1'] = array (
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
          'name' => 'name',
          'label' => 'LBL_LIST_CAMPAIGN_NAME',
          'enabled' => true,
          'default' => true,
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'status',
          'label' => 'LBL_LIST_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'iss2_bu_results_campaigns_1_name',
          'label' => 'LBL_ISS2_BU_RESULTS_CAMPAIGNS_1_FROM_ISS2_BU_RESULTS_TITLE',
          'enabled' => true,
          'id' => 'ISS2_BU_RESULTS_CAMPAIGNS_1ISS2_BU_RESULTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
      ),
    ),
  ),
  'rowactions' => 
  array (
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'rowaction',
        'name' => 'edit_button',
        'icon' => 'fa-pencil',
        'label' => 'LBL_EDIT_BUTTON',
        'event' => 'list:editrow:fire',
        'acl_action' => 'edit',
      ),
      1 => 
      array (
        'type' => 'unlink-action',
        'icon' => 'fa-chain-broken',
        'label' => 'LBL_UNLINK_BUTTON',
      ),
    ),
  ),
  'type' => 'subpanel-list',
);