<?php
 // created: 2013-09-04 13:19:47
$layout_defs["Users"]["subpanel_setup"]['users_atc_clients_1'] = array (
  'order' => 100,
  'module' => 'ATC_Clients',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_USERS_ATC_CLIENTS_1_FROM_ATC_CLIENTS_TITLE',
  'get_subpanel_data' => 'users_atc_clients_1',
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
