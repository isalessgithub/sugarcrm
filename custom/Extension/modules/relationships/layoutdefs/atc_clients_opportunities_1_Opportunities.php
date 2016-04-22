<?php
 // created: 2014-07-28 01:02:13
$layout_defs["Opportunities"]["subpanel_setup"]['atc_clients_opportunities_1'] = array (
  'order' => 100,
  'module' => 'ATC_Clients',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ATC_CLIENTS_OPPORTUNITIES_1_FROM_ATC_CLIENTS_TITLE',
  'get_subpanel_data' => 'atc_clients_opportunities_1',
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
