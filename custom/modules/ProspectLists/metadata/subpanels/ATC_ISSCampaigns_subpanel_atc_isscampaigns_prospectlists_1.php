<?php
// created: 2017-07-23 11:29:03
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_PROSPECT_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'account_total_c' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_ACCOUNT_TOTAL',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'vname' => 'LBL_ASSIGNED_TO',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'assigned_user_id',
  ),
  'description' => 
  array (
    'vname' => 'LBL_LIST_DESCRIPTION',
    'width' => '10%',
    'sortable' => false,
    'default' => true,
  ),
);