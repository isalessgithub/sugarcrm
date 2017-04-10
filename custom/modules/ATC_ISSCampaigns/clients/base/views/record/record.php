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
            'newTab' => true,
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
                'name' => 'appointments_set_c',
                'label' => 'LBL_APPOINTMENTS_SET',
              ),
              2 => 
              array (
                'name' => 'appointment_target_campaign_c',
                'label' => 'LBL_APPOINTMENT_TARGET_CAMPAIGN',
              ),
              3 => 
              array (
                'name' => 'appointment_target_monthly_c',
                'label' => 'LBL_APPOINTMENT_TARGET_MONTHLY',
              ),
              4 => 
              array (
                'name' => 'campaign_status_c',
                'label' => 'LBL_CAMPAIGN_STATUS',
              ),
              5 => 
              array (
                'name' => 'potential_start_month_c',
                'label' => 'LBL_POTENTIAL_START_MONTH',
              ),
              6 => 
              array (
                'name' => 'campaign_email_and_password_c',
                'label' => 'LBL_CAMPAIGN_EMAIL_AND_PASSWORD',
              ),
              7 => 
              array (
                'name' => 'invoice_sent_c',
                'label' => 'LBL_INVOICE_SENT',
              ),
              8 => 
              array (
                'name' => 'campaign_start_date_c',
                'label' => 'LBL_CAMPAIGN_START_DATE',
              ),
              9 => 
              array (
                'name' => 'campaign_finish_date_c',
                'label' => 'LBL_CAMPAIGN_FINISH_DATE',
              ),
              10 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'tabindex' => '2',
              ),
              11 => 
              array (
                'name' => 'users_atc_isscampaigns_1_name',
                'label' => 'LBL_USERS_ATC_ISSCAMPAIGNS_1_FROM_USERS_TITLE',
              ),
              12 => 
              array (
              ),
              13 => 'team_name',
              14 => 
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
              15 => 
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
              16 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'appointment_accepted_c',
                'label' => 'LBL_APPOINTMENT_ACCEPTED',
              ),
              1 => 
              array (
                'name' => 'appointment_attended_by_poli_c',
                'label' => 'LBL_APPOINTMENT_ATTENDED_BY_POLI',
              ),
              2 => 
              array (
                'name' => 'appointment_attended_c',
                'label' => 'LBL_APPOINTMENT_ATTENDED',
              ),
              3 => 
              array (
                'name' => 'appointment_confirmed_c',
                'label' => 'LBL_APPOINTMENT_CONFIRMED',
              ),
              4 => 
              array (
                'name' => 'remaining_target_c',
                'label' => 'LBL_REMAINING_TARGET',
              ),
              5 => 
              array (
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'maxColumns' => '2',
          'useTabs' => true,
        ),
      ),
    ),
  ),
);
