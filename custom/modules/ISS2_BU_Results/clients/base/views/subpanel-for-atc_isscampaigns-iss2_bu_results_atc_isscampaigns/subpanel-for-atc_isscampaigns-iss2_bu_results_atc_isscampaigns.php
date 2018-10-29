<?php
// created: 2018-10-23 12:28:44
$viewdefs['ISS2_BU_Results']['base']['view']['subpanel-for-atc_isscampaigns-iss2_bu_results_atc_isscampaigns'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'team_assigned_c',
          'label' => 'LBL_TEAM_ASSIGNED',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'monthly_team_quota_c',
          'label' => 'LBL_MONTHLY_TEAM_QUOTA',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'team_target_c',
          'label' => 'LBL_TEAM_TARGET',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'iss2_bu_results_atc_isscampaigns_name',
          'label' => 'LBL_ISS2_BU_RESULTS_ATC_ISSCAMPAIGNS_FROM_ATC_ISSCAMPAIGNS_TITLE',
          'enabled' => true,
          'id' => 'ISS2_BU_RESULTS_ATC_ISSCAMPAIGNSATC_ISSCAMPAIGNS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'type' => 'subpanel-list',
);