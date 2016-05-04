<?php
 // created: 2016-05-02 19:08:06
$layout_defs["ATC_Clients"]["subpanel_setup"]['atc_clients_quotes_2'] = array (
  'order' => 100,
  'module' => 'Quotes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ATC_CLIENTS_QUOTES_2_FROM_QUOTES_TITLE',
  'get_subpanel_data' => 'atc_clients_quotes_2',
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
