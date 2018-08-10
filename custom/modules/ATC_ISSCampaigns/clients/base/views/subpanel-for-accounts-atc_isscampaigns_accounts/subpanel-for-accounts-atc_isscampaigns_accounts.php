<?php
// created: 2018-08-10 14:02:55
$viewdefs['ATC_ISSCampaigns']['base']['view']['subpanel-for-accounts-atc_isscampaigns_accounts'] = array (
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
          'default' => true,
          'label' => 'LBL_NAME',
          'enabled' => true,
          'name' => 'name',
          'link' => true,
          'type' => 'name',
        ),
        1 => 
        array (
          'name' => 'campaign_type_c',
          'label' => 'LBL_CAMPAIGN_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'appointment_target_campaign_c',
          'label' => 'LBL_APPOINTMENT_TARGET_CAMPAIGN',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'campaign_start_date_c',
          'label' => 'LBL_CAMPAIGN_START_DATE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'campaign_finish_date_c',
          'label' => 'LBL_CAMPAIGN_FINISH_DATE',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);