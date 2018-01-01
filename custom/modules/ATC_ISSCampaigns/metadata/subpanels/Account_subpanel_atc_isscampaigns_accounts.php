<?php
// created: 2017-12-13 11:39:02
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
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
  'atc_clients_atc_isscampaigns_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ATC_CLIENTS_ATC_ISSCAMPAIGNS_FROM_ATC_CLIENTS_TITLE',
    'id' => 'ATC_CLIENTS_ATC_ISSCAMPAIGNSATC_CLIENTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ATC_Clients',
    'target_record_key' => 'atc_clients_atc_isscampaignsatc_clients_ida',
  ),
);