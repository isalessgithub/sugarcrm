<?php
// created: 2018-01-09 19:29:37
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'users_atc_isscampaigns_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_USERS_ATC_ISSCAMPAIGNS_1_FROM_USERS_TITLE',
    'id' => 'USERS_ATC_ISSCAMPAIGNS_1USERS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'users_atc_isscampaigns_1users_ida',
  ),
  'campaign_start_date_c' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_CAMPAIGN_START_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'campaign_finish_date_c' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_CAMPAIGN_FINISH_DATE',
    'width' => '10%',
    'default' => true,
  ),
);