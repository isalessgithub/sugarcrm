<?php
 // created: 2017-04-06 13:06:33
$layout_defs["ATC_ISSCampaigns"]["subpanel_setup"]['ms_campaign_results_monthly_atc_isscampaigns'] = array (
  'order' => 100,
  'module' => 'MS_Campaign_Results_Monthly',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MS_CAMPAIGN_RESULTS_MONTHLY_ATC_ISSCAMPAIGNS_FROM_MS_CAMPAIGN_RESULTS_MONTHLY_TITLE',
  'get_subpanel_data' => 'ms_campaign_results_monthly_atc_isscampaigns',
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
