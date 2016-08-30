<?php
 // created: 2016-08-30 14:05:43
$layout_defs["CP_Client_Users"]["subpanel_setup"]['atc_isscampaigns_cp_client_users_1'] = array (
  'order' => 100,
  'module' => 'ATC_ISSCampaigns',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ATC_ISSCAMPAIGNS_CP_CLIENT_USERS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'get_subpanel_data' => 'atc_isscampaigns_cp_client_users_1',
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
