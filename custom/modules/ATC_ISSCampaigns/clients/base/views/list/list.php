<?php
$viewdefs['ATC_ISSCampaigns']['base']['view']['list'] = array (
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
          'name' => 'campaign_email_and_password_c',
          'default' => true,
          'enabled' => true,
          'type' => 'varchar',
          'label' => 'LBL_CAMPAIGN_EMAIL_AND_PASSWORD',
          'width' => '10%',
        ),
        3 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'width' => '9%',
          'id' => 'ASSIGNED_USER_ID',
        ),
        4 => 
        array (
          'name' => 'users_atc_isscampaigns_1_name',
          'default' => true,
          'enabled' => true,
          'type' => 'relate',
          'link' => true,
          'label' => 'LBL_USERS_ATC_ISSCAMPAIGNS_1_FROM_USERS_TITLE',
          'id' => 'USERS_ATC_ISSCAMPAIGNS_1USERS_IDA',
          'width' => '10%',
        ),
        5 => 
        array (
          'name' => 'appointment_target_monthly_c',
          'default' => true,
          'enabled' => true,
          'type' => 'int',
          'label' => 'LBL_APPOINTMENT_TARGET_MONTHLY',
          'width' => '10%',
        ),
        6 => 
        array (
          'name' => 'appointment_target_campaign_c',
          'default' => true,
          'enabled' => true,
          'type' => 'int',
          'label' => 'LBL_APPOINTMENT_TARGET_CAMPAIGN',
          'width' => '10%',
        ),
        7 => 
        array (
          'name' => 'invoice_sent_c',
          'default' => true,
          'enabled' => true,
          'type' => 'date',
          'label' => 'LBL_INVOICE_SENT',
          'width' => '10%',
        ),
        8 => 
        array (
          'name' => 'appointments_set_c',
          'default' => true,
          'enabled' => true,
          'type' => 'decimal',
          'label' => 'LBL_APPOINTMENTS_SET',
          'width' => '10%',
        ),
        9 => 
        array (
          'name' => 'date_entered',
          'enabled' => true,
          'default' => true,
          'type' => 'datetime',
          'label' => 'LBL_DATE_ENTERED',
          'width' => '10%',
        ),
        10 => 
        array (
          'name' => 'team_name',
          'label' => 'LBL_TEAM',
          'default' => false,
          'enabled' => true,
          'width' => '9%',
        ),
      ),
    ),
  ),
);
