<?php
// created: 2016-10-11 18:06:40
$subpanel_layout['list_fields'] = array (
  'full_name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '40%',
    'sort_by' => 'last_name',
    'default' => true,
  ),
  'title' => 
  array (
    'vname' => 'LBL_LIST_TITLE',
    'width' => '25%',
    'default' => true,
  ),
  'email' => 
  array (
    'vname' => 'LBL_LIST_EMAIL_ADDRESS',
    'width' => '15%',
    'widget_class' => 'SubPanelEmailLink',
    'sortable' => false,
    'default' => true,
  ),
  'phone_work' => 
  array (
    'vname' => 'LBL_LIST_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'log_call_c' => 
  array (
    'name' => 'log_call_c',
    'vname' => 'LBL_LOG_CALL',
    'width' => '15%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'Contacts',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Contacts',
    'width' => '5%',
    'default' => true,
  ),
  'first_name' => 
  array (
    'usage' => 'query_only',
  ),
  'last_name' => 
  array (
    'usage' => 'query_only',
  ),
);