<?php
// created: 2016-10-07 12:39:13
$viewdefs['ATC_ISSCampaigns']['base']['view']['record'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_RECORD_HEADER',
      'header' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'picture',
          'type' => 'avatar',
          'width' => 42,
          'height' => 42,
          'dismiss_label' => true,
          'readonly' => true,
        ),
        1 => 'name',
        2 => 
        array (
          'name' => 'favorite',
          'label' => 'LBL_FAVORITE',
          'type' => 'favorite',
          'readonly' => true,
          'dismiss_label' => true,
        ),
        3 => 
        array (
          'name' => 'follow',
          'label' => 'LBL_FOLLOW',
          'type' => 'follow',
          'readonly' => true,
          'dismiss_label' => true,
        ),
      ),
    ),
    1 => 
    array (
      'name' => 'panel_body',
      'label' => 'LBL_RECORD_BODY',
      'columns' => 2,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 'assigned_user_name',
        1 => 'team_name',
        2 => 
        array (
          'name' => 'atc_clients_atc_isscampaigns_name',
          'label' => 'LBL_ATC_CLIENTS_ATC_ISSCAMPAIGNS_FROM_ATC_CLIENTS_TITLE',
        ),
        3 => 
        array (
          'name' => 'appointment_target_monthly_c',
          'label' => 'LBL_APPOINTMENT_TARGET_MONTHLY',
        ),
        4 => 
        array (
          'name' => 'appointment_target_campaign_c',
          'label' => 'LBL_APPOINTMENT_TARGET_CAMPAIGN',
        ),
        5 => 
        array (
          'name' => 'appointments_set_c',
          'label' => 'LBL_APPOINTMENTS_SET',
        ),
        6 => 
        array (
          'name' => 'campaign_status_c',
          'label' => 'LBL_CAMPAIGN_STATUS',
        ),
        7 => 
        array (
          'name' => 'users_atc_isscampaigns_1_name',
          'label' => 'LBL_USERS_ATC_ISSCAMPAIGNS_1_FROM_USERS_TITLE',
        ),
        8 => 
        array (
          'name' => 'potential_start_month_c',
          'label' => 'LBL_POTENTIAL_START_MONTH',
        ),
        9 => 
        array (
          'name' => 'final_msg_and_email_agreed_c',
          'label' => 'LBL_FINAL_MSG_AND_EMAIL_AGREED',
        ),
        10 => 
        array (
          'name' => 'received_target_accounts_c',
          'label' => 'LBL_RECEIVED_TARGET_ACCOUNTS',
        ),
        11 => 
        array (
          'name' => 'targets_added_to_crm_c',
          'label' => 'LBL_TARGETS_ADDED_TO_CRM',
        ),
        12 => 
        array (
          'name' => 'campaign_email_and_password_c',
          'label' => 'LBL_CAMPAIGN_EMAIL_AND_PASSWORD',
        ),
        13 => 
        array (
          'name' => 'invoice_sent_c',
          'label' => 'LBL_INVOICE_SENT',
        ),
        14 => 
        array (
          'name' => 'campaign_start_date_c',
          'label' => 'LBL_CAMPAIGN_START_DATE',
        ),
        15 => 
        array (
          'name' => 'campaign_finish_date_c',
          'label' => 'LBL_CAMPAIGN_FINISH_DATE',
        ),
        16 => 
        array (
          'name' => 'reporting_c',
          'label' => 'LBL_REPORTING',
        ),
        17 => 
        array (
          'name' => 'tag',
          'span' => 12,
        ),
      ),
    ),
    2 => 
    array (
      'name' => 'panel_hidden',
      'label' => 'LBL_SHOW_MORE',
      'hide' => true,
      'columns' => 2,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'description',
          'span' => 12,
        ),
        1 => 
        array (
          'name' => 'date_modified_by',
          'readonly' => true,
          'inline' => true,
          'type' => 'fieldset',
          'label' => 'LBL_DATE_MODIFIED',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'date_modified',
            ),
            1 => 
            array (
              'type' => 'label',
              'default_value' => 'LBL_BY',
            ),
            2 => 
            array (
              'name' => 'modified_by_name',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'date_entered_by',
          'readonly' => true,
          'inline' => true,
          'type' => 'fieldset',
          'label' => 'LBL_DATE_ENTERED',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'date_entered',
            ),
            1 => 
            array (
              'type' => 'label',
              'default_value' => 'LBL_BY',
            ),
            2 => 
            array (
              'name' => 'created_by_name',
            ),
          ),
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'useTabs' => false,
  ),
);