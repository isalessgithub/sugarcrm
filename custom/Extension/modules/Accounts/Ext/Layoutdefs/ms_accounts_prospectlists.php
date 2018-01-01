<?php
 // created: 2012-10-01 13:58:51
$layout_defs["Accounts"]["subpanel_setup"]['prospect_list_accounts'] = array (
  'order' => 101,
  'module' => 'ProspectLists',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'title_key_TODO_31086542',
  'get_subpanel_data' => 'prospect_list_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
