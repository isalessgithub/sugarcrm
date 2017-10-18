<?php
// created: 2017-10-13 12:07:00
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_SUBJECT',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'proj_type_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_PROJ_TYPE',
    'width' => '10%',
  ),
  'proj_start_date_c' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_PROJ_START_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'prospect_name_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_PROSPECT_NAME',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'contact_id_c',
  ),
  'proj_details_c' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_PROJ_DETAILS',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'assist_from_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_ASSIST_FROM',
    'id' => 'USER_ID1_C',
    'link' => true,
    'width' => '10%',
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