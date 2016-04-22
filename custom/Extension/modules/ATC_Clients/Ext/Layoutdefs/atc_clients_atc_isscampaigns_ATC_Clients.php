<?php
 // created: 2013-08-06 14:59:59
$layout_defs["ATC_Clients"]["subpanel_setup"]['atc_clients_atc_isscampaigns'] = array (
  'order' => 100,
  'module' => 'ATC_ISSCampaigns',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ATC_CLIENTS_ATC_ISSCAMPAIGNS_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'get_subpanel_data' => 'atc_clients_atc_isscampaigns',
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
