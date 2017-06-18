<?php
$viewdefs['ATC_ISSCampaigns'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
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
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'atc_clients_atc_isscampaigns_name',
                'label' => 'LBL_ATC_CLIENTS_ATC_ISSCAMPAIGNS_FROM_ATC_CLIENTS_TITLE',
              ),
              1 => 
              array (
                'name' => 'client_owner_c',
                'studio' => 'visible',
                'label' => 'LBL_CLIENT_OWNER',
              ),
              2 => 
              array (
                'name' => 'face_to_face_drop_c',
                'label' => 'LBL_FACE_TO_FACE_DROP',
              ),
              3 => 
              array (
                'name' => 'appointments_set_c',
                'label' => 'LBL_APPOINTMENTS_SET',
              ),
              4 => 
              array (
                'name' => 'appointment_target_campaign_c',
                'label' => 'LBL_APPOINTMENT_TARGET_CAMPAIGN',
              ),
              5 => 
              array (
                'name' => 'appointment_target_monthly_c',
                'label' => 'LBL_APPOINTMENT_TARGET_MONTHLY',
              ),
              6 => 
              array (
                'name' => 'campaign_status_c',
                'label' => 'LBL_CAMPAIGN_STATUS',
              ),
              7 => 
              array (
                'name' => 'potential_start_month_c',
                'label' => 'LBL_POTENTIAL_START_MONTH',
              ),
              8 => 
              array (
                'name' => 'campaign_email_and_password_c',
                'label' => 'LBL_CAMPAIGN_EMAIL_AND_PASSWORD',
              ),
              9 => 
              array (
                'name' => 'campaign_start_date_c',
                'label' => 'LBL_CAMPAIGN_START_DATE',
              ),
              10 => 
              array (
                'name' => 'invoice_sent_c',
                'label' => 'LBL_INVOICE_SENT',
              ),
              11 => 
              array (
                'name' => 'campaign_finish_date_c',
                'label' => 'LBL_CAMPAIGN_FINISH_DATE',
              ),
              12 => 
              array (
                'name' => 'invoice_number_c',
                'label' => 'LBL_INVOICE_NUMBER',
              ),
              13 => 
              array (
                'name' => 'invoice_paid_c',
                'label' => 'LBL_INVOICE_PAID',
              ),
              14 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'tabindex' => '2',
              ),
              15 => 
              array (
                'name' => 'users_atc_isscampaigns_1_name',
                'label' => 'LBL_USERS_ATC_ISSCAMPAIGNS_1_FROM_USERS_TITLE',
              ),
              16 => 
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
              17 => 
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
              18 => 
              array (
                'name' => 'campaign_task_c',
                'studio' => 'visible',
                'label' => 'LBL_CAMPAIGN_TASK',
              ),
              19 => 
              array (
                'name' => 'team_name',
              ),
              20 => 
              array (
              ),
              21 => 
              array (
                'name' => 'client_campaign_id_c',
                'label' => 'LBL_CLIENT_CAMPAIGN_ID',
              ),
              22 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'maxColumns' => '2',
          'useTabs' => false,
        ),
      ),
    ),
  ),
);
