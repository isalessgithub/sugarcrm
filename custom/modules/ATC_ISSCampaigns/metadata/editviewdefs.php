<?php
$module_name = 'ATC_ISSCampaigns';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'atc_clients_atc_isscampaigns_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'appointment_target_monthly_c',
            'label' => 'LBL_APPOINTMENT_TARGET_MONTHLY',
          ),
          1 => 
          array (
            'name' => 'appointment_target_campaign_c',
            'label' => 'LBL_APPOINTMENT_TARGET_CAMPAIGN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'appointments_set_c',
            'label' => 'LBL_APPOINTMENTS_SET',
          ),
          1 => 
          array (
            'name' => 'campaign_status_c',
            'studio' => 'visible',
            'label' => 'LBL_CAMPAIGN_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'users_atc_isscampaigns_1_name',
            'label' => 'LBL_USERS_ATC_ISSCAMPAIGNS_1_FROM_USERS_TITLE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'potential_start_month_c',
            'label' => 'LBL_POTENTIAL_START_MONTH',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'final_msg_and_email_agreed_c',
            'label' => 'LBL_FINAL_MSG_AND_EMAIL_AGREED',
          ),
          1 => 
          array (
            'name' => 'received_target_accounts_c',
            'label' => 'LBL_RECEIVED_TARGET_ACCOUNTS',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'targets_added_to_crm_c',
            'label' => 'LBL_TARGETS_ADDED_TO_CRM',
          ),
          1 => 
          array (
            'name' => 'campaign_email_and_password_c',
            'label' => 'LBL_CAMPAIGN_EMAIL_AND_PASSWORD',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'invoice_sent_c',
            'label' => 'LBL_INVOICE_SENT',
          ),
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'campaign_start_date_c',
            'label' => 'LBL_CAMPAIGN_START_DATE',
          ),
          1 => 
          array (
            'name' => 'campaign_finish_date_c',
            'label' => 'LBL_CAMPAIGN_FINISH_DATE',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'last_appointment_date_c',
            'label' => 'LBL_LAST_APPOINTMENT_DATE',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'reporting_c',
            'label' => 'LBL_REPORTING',
          ),
        ),
      ),
    ),
  ),
);
?>
