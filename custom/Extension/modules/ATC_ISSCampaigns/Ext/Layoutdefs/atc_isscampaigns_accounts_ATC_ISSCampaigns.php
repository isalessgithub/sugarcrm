<?php
 // created: 2013-08-06 15:00:00
$layout_defs["ATC_ISSCampaigns"]["subpanel_setup"]['atc_isscampaigns_accounts'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ATC_ISSCAMPAIGNS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'atc_isscampaigns_accounts',
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
