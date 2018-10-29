<?php
// created: 2018-10-23 12:28:44
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => 10,
    'default' => true,
  ),
  'team_assigned_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_TEAM_ASSIGNED',
    'width' => 10,
  ),
  'monthly_team_quota_c' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_MONTHLY_TEAM_QUOTA',
    'width' => 10,
    'default' => true,
  ),
  'team_target_c' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_TEAM_TARGET',
    'width' => 10,
    'default' => true,
  ),
  'iss2_bu_results_atc_isscampaigns_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ISS2_BU_RESULTS_ATC_ISSCAMPAIGNS_FROM_ATC_ISSCAMPAIGNS_TITLE',
    'id' => 'ISS2_BU_RESULTS_ATC_ISSCAMPAIGNSATC_ISSCAMPAIGNS_IDA',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ATC_ISSCampaigns',
    'target_record_key' => 'iss2_bu_results_atc_isscampaignsatc_isscampaigns_ida',
  ),
);