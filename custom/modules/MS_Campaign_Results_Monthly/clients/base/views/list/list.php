<?php
$module_name = 'MS_Campaign_Results_Monthly';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              2 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
              ),
              5 => 
              array (
                'name' => 'appointment_attended',
                'label' => 'LBL_APPOINTMENT_ATTENDED',
                'enabled' => true,
                'default' => false,
              ),
              6 => 
              array (
                'name' => 'appointment_target_total',
                'label' => 'LBL_APPOINTMENT_TARGET_TOTAL',
                'enabled' => true,
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'ms_campaign_results_monthly_atc_isscampaigns_name',
                'label' => 'LBL_MS_CAMPAIGN_RESULTS_MONTHLY_ATC_ISSCAMPAIGNS_FROM_ATC_ISSCAMPAIGNS_TITLE',
                'enabled' => true,
                'id' => 'MS_CAMPAIGN_RESULTS_MONTHLY_ATC_ISSCAMPAIGNSATC_ISSCAMPAIGNS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'appointment_target_monthly',
                'label' => 'LBL_APPOINTMENT_TARGET_MONTHLY',
                'enabled' => true,
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'remaining_target',
                'label' => 'LBL_REMAINING_TARGET',
                'enabled' => true,
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'appointment_attended_by_policy',
                'label' => 'LBL_APPOINTMENT_ATTENDED_BY_POLICY',
                'enabled' => true,
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'appointment_confirmed',
                'label' => 'LBL_APPOINTMENT_CONFIRMED',
                'enabled' => true,
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'appointment_accepted',
                'label' => 'LBL_APPOINTMENT_ACCEPTED',
                'enabled' => true,
                'default' => false,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
