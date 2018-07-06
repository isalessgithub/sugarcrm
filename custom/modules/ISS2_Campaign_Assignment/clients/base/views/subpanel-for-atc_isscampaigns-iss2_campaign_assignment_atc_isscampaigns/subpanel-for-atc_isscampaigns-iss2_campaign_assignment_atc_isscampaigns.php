<?php
// created: 2018-06-28 14:09:33
$viewdefs['ISS2_Campaign_Assignment']['base']['view']['subpanel-for-atc_isscampaigns-iss2_campaign_assignment_atc_isscampaigns'] = array (
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
          'name' => 'team_target_c',
          'label' => 'LBL_TEAM_TARGET',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'team_target_rem_c',
          'label' => 'LBL_TEAM_TARGET_REM',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'team_completed_c',
          'label' => 'LBL_TEAM_COMPLETED',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'team_upcoming_c',
          'label' => 'LBL_TEAM_UPCOMING',
          'enabled' => true,
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