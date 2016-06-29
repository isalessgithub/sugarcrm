<?php
 // created: 2016-06-13 10:58:55
$layout_defs["ProspectLists"]["subpanel_setup"]['prospectlists_atc_clients_1'] = array (
  'order' => 100,
  'module' => 'ATC_Clients',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PROSPECTLISTS_ATC_CLIENTS_1_FROM_ATC_CLIENTS_TITLE',
  'get_subpanel_data' => 'prospectlists_atc_clients_1',
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
