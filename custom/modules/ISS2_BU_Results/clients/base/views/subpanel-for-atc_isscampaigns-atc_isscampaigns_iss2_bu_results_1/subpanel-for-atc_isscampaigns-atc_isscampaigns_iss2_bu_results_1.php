<?php
// created: 2018-06-28 22:40:12
$viewdefs['ISS2_BU_Results']['base']['view']['subpanel-for-atc_isscampaigns-atc_isscampaigns_iss2_bu_results_1'] = array (
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
          'name' => 'atc_isscampaigns_iss2_bu_results_1_name',
          'label' => 'LBL_ATC_ISSCAMPAIGNS_ISS2_BU_RESULTS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
          'enabled' => true,
          'id' => 'ATC_ISSCAMPAIGNS_ISS2_BU_RESULTS_1ATC_ISSCAMPAIGNS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
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
          'name' => 'team_target_c',
          'label' => 'LBL_TEAM_TARGET',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'created_by_name',
          'label' => 'LBL_CREATED',
          'enabled' => true,
          'readonly' => true,
          'id' => 'CREATED_BY',
          'link' => true,
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