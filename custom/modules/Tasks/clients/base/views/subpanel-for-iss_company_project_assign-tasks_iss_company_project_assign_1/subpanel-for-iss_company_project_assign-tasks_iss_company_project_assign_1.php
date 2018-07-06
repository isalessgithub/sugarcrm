<?php
// created: 2018-05-08 14:04:03
$viewdefs['Tasks']['base']['view']['subpanel-for-iss_company_project_assign-tasks_iss_company_project_assign_1'] = array (
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
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
        1 => 
        array (
          'label' => 'LBL_LIST_SUBJECT',
          'enabled' => true,
          'default' => true,
          'link' => true,
          'name' => 'name',
        ),
        2 => 
        array (
          'name' => 'proj_type_c',
          'label' => 'LBL_PROJ_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'target_record_key' => 'contact_id',
          'target_module' => 'Contacts',
          'label' => 'LBL_LIST_CONTACT',
          'enabled' => true,
          'default' => true,
          'name' => 'contact_name',
        ),
        4 => 
        array (
          'name' => 'contact_title_c',
          'label' => 'LBL_CONTACT_TITLE',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'proj_source_c',
          'label' => 'LBL_PROJ_SOURCE',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
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
      ),
      1 => 
      array (
        'type' => 'rowaction',
        'name' => 'edit_button',
        'icon' => 'fa-pencil',
        'label' => 'LBL_EDIT_BUTTON',
        'event' => 'list:editrow:fire',
        'acl_action' => 'edit',
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