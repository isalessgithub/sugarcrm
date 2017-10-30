<?php
 // created: 2017-10-13 10:58:49
$layout_defs["ATC_ISSCampaigns"]["subpanel_setup"]['atc_isscampaigns_opportunities_2'] = array (
  'order' => 100,
  'module' => 'Opportunities',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ATC_ISSCAMPAIGNS_OPPORTUNITIES_2_FROM_OPPORTUNITIES_TITLE',
  'get_subpanel_data' => 'atc_isscampaigns_opportunities_2',
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
