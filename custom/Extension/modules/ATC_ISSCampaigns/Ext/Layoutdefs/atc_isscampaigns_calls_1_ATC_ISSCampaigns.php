<?php
 // created: 2013-08-15 15:43:30
$layout_defs["ATC_ISSCampaigns"]["subpanel_setup"]['atc_isscampaigns_calls_1'] = array (
  'order' => 100,
  'module' => 'Calls',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ATC_ISSCAMPAIGNS_CALLS_1_FROM_CALLS_TITLE',
  'get_subpanel_data' => 'atc_isscampaigns_calls_1',
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
