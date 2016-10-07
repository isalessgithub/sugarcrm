<?php
$viewdefs['ATC_ISSCampaigns'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'selection-list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '32%',
              ),
              1 => 
              array (
                'name' => 'atc_clients_atc_isscampaigns_name',
                'default' => true,
                'enabled' => true,
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_ATC_CLIENTS_ATC_ISSCAMPAIGNS_FROM_ATC_CLIENTS_TITLE',
                'id' => 'ATC_CLIENTS_ATC_ISSCAMPAIGNSATC_CLIENTS_IDA',
                'width' => '10%',
              ),
              2 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '9%',
                'id' => 'ASSIGNED_USER_ID',
              ),
              3 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
                'width' => '9%',
              ),
              4 => 
              array (
                'type' => 'int',
                'default' => true,
                'label' => 'LBL_APPOINTMENT_TARGET_MONTHLY',
                'enabled' => true,
                'name' => 'appointment_target_monthly_c',
              ),
              5 => 
              array (
                'type' => 'int',
                'default' => true,
                'label' => 'LBL_APPOINTMENT_TARGET_CAMPAIGN',
                'enabled' => true,
                'name' => 'appointment_target_campaign_c',
              ),
              6 => 
              array (
                'type' => 'datetime',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_ENTERED',
                'default' => true,
                'enabled' => true,
                'name' => 'date_entered',
              ),
              7 => 
              array (
                'type' => 'enum',
                'default' => true,
                'label' => 'LBL_CAMPAIGN_STATUS',
                'enabled' => true,
                'name' => 'campaign_status_c',
              ),
              8 => 
              array (
                'type' => 'date',
                'default' => true,
                'label' => 'LBL_CAMPAIGN_START_DATE',
                'enabled' => true,
                'name' => 'campaign_start_date_c',
              ),
              9 => 
              array (
                'type' => 'text',
                'label' => 'LBL_DESCRIPTION',
                'default' => true,
                'enabled' => true,
                'name' => 'description',
              ),
              10 => 
              array (
                'type' => 'varchar',
                'default' => true,
                'label' => 'LBL_VPG_SHARED',
                'enabled' => true,
                'name' => 'vpg_shared_c',
              ),
              11 => 
              array (
                'type' => 'varchar',
                'default' => true,
                'label' => 'LBL_NATL_SHARED',
                'enabled' => true,
                'name' => 'natl_shared_c',
              ),
              12 => 
              array (
                'type' => 'int',
                'default' => true,
                'label' => 'LBL_TARGETS_ADDED_TO_CRM',
                'enabled' => true,
                'name' => 'targets_added_to_crm_c',
              ),
              13 => 
              array (
                'type' => 'relate',
                'link' => 'users_atc_isscampaigns_1',
                'label' => 'LBL_USERS_ATC_ISSCAMPAIGNS_1_FROM_USERS_TITLE',
                'default' => true,
                'enabled' => true,
                'name' => 'users_atc_isscampaigns_1_name',
              ),
              14 => 
              array (
                'type' => 'date',
                'default' => true,
                'label' => 'LBL_PLANNING_CALL',
                'enabled' => true,
                'name' => 'planning_call_c',
              ),
              15 => 
              array (
                'type' => 'varchar',
                'default' => true,
                'label' => 'LBL_FINAL_MSG_AND_EMAIL_AGREED',
                'enabled' => true,
                'name' => 'final_msg_and_email_agreed_c',
              ),
              16 => 
              array (
                'type' => 'varchar',
                'default' => true,
                'label' => 'LBL_CAMPAIGN_EMAIL_AND_PASSWORD',
                'enabled' => true,
                'name' => 'campaign_email_and_password_c',
              ),
              17 => 
              array (
                'type' => 'date',
                'default' => true,
                'label' => 'LBL_WEEKLY_CALL_DATE',
                'enabled' => true,
                'name' => 'weekly_call_date_c',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
