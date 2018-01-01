<?php
// created: 2017-12-31 14:13:47
$viewdefs['Tasks']['base']['view']['subpanel-for-accounts-tasks_accounts_1'] = array (
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
          'enabled' => true,
          'default' => true,
          'link' => true,
          'name' => 'name',
        ),
        1 => 
        array (
          'name' => 'proj_type_c',
          'label' => 'LBL_PROJ_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'proj_start_date_c',
          'label' => 'LBL_PROJ_START_DATE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'proj_details_c',
          'label' => 'LBL_PROJ_DETAILS',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'assist_from_c',
          'label' => 'LBL_ASSIST_FROM',
          'enabled' => true,
          'id' => 'USER_ID1_C',
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
        'css_class' => 'btn',
        'tooltip' => 'LBL_PREVIEW',
        'event' => 'list:preview:fire',
        'icon' => 'fa-eye',
        'acl_action' => 'view',
        'allow_bwc' => false,
      ),
      1 => 
      array (
        'type' => 'rowaction',
        'name' => 'edit_button',
        'icon' => 'fa-pencil',
        'label' => 'LBL_EDIT_BUTTON',
        'event' => 'list:editrow:fire',
        'acl_action' => 'edit',
        'allow_bwc' => false,
      ),
      2 => 
      array (
        'type' => 'unlink-action',
        'icon' => 'fa-trash-o',
        'label' => 'LBL_UNLINK_BUTTON',
      ),
      3 => 
      array (
        'type' => 'closebutton',
        'name' => 'record-close',
        'label' => 'LBL_CLOSE_BUTTON_TITLE',
        'closed_status' => 'Completed',
        'acl_action' => 'edit',
      ),
    ),
  ),
  'type' => 'subpanel-list',
);