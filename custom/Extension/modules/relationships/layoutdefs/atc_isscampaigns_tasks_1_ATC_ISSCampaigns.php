<?php
 // created: 2017-05-22 21:29:10
$layout_defs["ATC_ISSCampaigns"]["subpanel_setup"]['atc_isscampaigns_tasks_1'] = array (
  'order' => 100,
  'module' => 'Tasks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ATC_ISSCAMPAIGNS_TASKS_1_FROM_TASKS_TITLE',
  'get_subpanel_data' => 'atc_isscampaigns_tasks_1',
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
