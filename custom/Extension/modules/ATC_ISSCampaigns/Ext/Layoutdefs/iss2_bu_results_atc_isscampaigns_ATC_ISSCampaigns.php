<?php
 // created: 2018-10-23 09:38:37
$layout_defs["ATC_ISSCampaigns"]["subpanel_setup"]['iss2_bu_results_atc_isscampaigns'] = array (
  'order' => 100,
  'module' => 'ISS2_BU_Results',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ISS2_BU_RESULTS_ATC_ISSCAMPAIGNS_FROM_ISS2_BU_RESULTS_TITLE',
  'get_subpanel_data' => 'iss2_bu_results_atc_isscampaigns',
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
