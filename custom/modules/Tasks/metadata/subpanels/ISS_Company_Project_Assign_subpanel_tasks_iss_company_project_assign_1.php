<?php
// created: 2018-05-08 14:04:03
$subpanel_layout['list_fields'] = array (
  'date_entered' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'vname' => 'LBL_DATE_ENTERED',
    'width' => 10,
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_LIST_SUBJECT',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => 10,
    'default' => true,
  ),
  'proj_type_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_PROJ_TYPE',
    'width' => 10,
  ),
  'contact_name' => 
  array (
    'widget_class' => 'SubPanelDetailViewLink',
    'target_record_key' => 'contact_id',
    'target_module' => 'Contacts',
    'module' => 'Contacts',
    'vname' => 'LBL_LIST_CONTACT',
    'width' => 10,
    'default' => true,
  ),
  'contact_title_c' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_CONTACT_TITLE',
    'width' => 10,
    'default' => true,
  ),
  'proj_source_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_PROJ_SOURCE',
    'width' => 10,
  ),
  'assist_from_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_ASSIST_FROM',
    'id' => 'USER_ID1_C',
    'link' => true,
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'user_id1_c',
  ),
  'parent_id' => 
  array (
    'usage' => 'query_only',
  ),
  'parent_type' => 
  array (
    'usage' => 'query_only',
  ),
  'filename' => 
  array (
    'usage' => 'query_only',
    'force_exists' => true,
  ),
);