<?php
 // created: 2014-03-10 14:54:08
$layout_defs["Users"]["subpanel_setup"]['users_atc_isscampaigns_1'] = array (
  'order' => 100,
  'module' => 'ATC_ISSCampaigns',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_USERS_ATC_ISSCAMPAIGNS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'get_subpanel_data' => 'users_atc_isscampaigns_1',
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
