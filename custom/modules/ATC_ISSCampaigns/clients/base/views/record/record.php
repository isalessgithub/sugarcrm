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
                'name' => 'client_owner_c',
                'studio' => 'visible',
                'label' => 'LBL_CLIENT_OWNER',
              ),
              2 => 
              array (
                'name' => 'campaign_type_c',
                'label' => 'LBL_CAMPAIGN_TYPE',
              ),
              3 => 
              array (
                'name' => 'campaign_email_and_password_c',
                'label' => 'LBL_CAMPAIGN_EMAIL_AND_PASSWORD',
              ),
              4 => 
              array (
                'name' => 'appointments_set_c',
                'label' => 'LBL_APPOINTMENTS_SET',
              ),
              5 => 
              array (
                'name' => 'campaign_territory_c',
                'label' => 'LBL_CAMPAIGN_TERRITORY',
              ),
              6 => 
              array (
                'name' => 'appointment_target_campaign_c',
                'label' => 'LBL_APPOINTMENT_TARGET_CAMPAIGN',
              ),
              7 => 
              array (
                'name' => 'appointment_target_monthly_c',
                'label' => 'LBL_APPOINTMENT_TARGET_MONTHLY',
              ),
              8 => 
              array (
                'name' => 'campaign_status_c',
                'label' => 'LBL_CAMPAIGN_STATUS',
              ),
              9 => 
              array (
                'name' => 'potential_start_month_c',
                'label' => 'LBL_POTENTIAL_START_MONTH',
              ),
              10 => 
              array (
                'name' => 'campaign_start_date_c',
                'label' => 'LBL_CAMPAIGN_START_DATE',
              ),
              11 => 
              array (
                'name' => 'campaign_finish_date_c',
                'label' => 'LBL_CAMPAIGN_FINISH_DATE',
              ),
              12 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'campaign_price_c',
                'label' => 'LBL_CAMPAIGN_PRICE',
              ),
              13 => 
              array (
              ),
              14 => 
              array (
                'name' => 'from_address_c',
                'label' => 'LBL_FROM_ADDRESS',
              ),
              15 => 
              array (
                'name' => 'from_name_c',
                'label' => 'LBL_FROM_NAME',
              ),
              16 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'tabindex' => '2',
              ),
              17 => 
              array (
                'name' => 'users_atc_isscampaigns_1_name',
                'label' => 'LBL_USERS_ATC_ISSCAMPAIGNS_1_FROM_USERS_TITLE',
		'required' => true,
              ),
              18 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL4',
            'label' => 'LBL_RECORDVIEW_PANEL4',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'sales_notes_c',
                'studio' => 'visible',
                'label' => 'LBL_SALES_NOTES',
                'span' => 12,
              ),
            ),
          ),
          3 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'invoice_number_c',
                'label' => 'LBL_INVOICE_NUMBER',
              ),
              1 => 
              array (
                'name' => 'invoice_date_received_c',
                'label' => 'LBL_INVOICE_DATE_RECEIVED',
              ),
              2 => 
              array (
                'name' => 'invoice_amount_paid_c',
                'label' => 'LBL_INVOICE_AMOUNT_PAID',
              ),
              3 => 
              array (
                'name' => 'invoice_date_deposited_c',
                'label' => 'LBL_INVOICE_DATE_DEPOSITED',
              ),
              4 => 
              array (
                'name' => 'invoiced_c',
                'label' => 'LBL_INVOICED',
              ),
              5 => 
              array (
                'name' => 'invoice_sent_c',
                'label' => 'LBL_INVOICE_SENT',
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => true,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL3',
            'label' => 'LBL_RECORDVIEW_PANEL3',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'client_campaign_id_c',
                'label' => 'LBL_CLIENT_CAMPAIGN_ID',
              ),
              1 => 
              array (
              ),
              2 => 
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
              3 => 
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
          5 => 
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
                'name' => 'monthly_result_start_date_c',
                'label' => 'LBL_MONTHLY_RESULT_START_DATE',
              ),
              1 => 
              array (
                'name' => 'appointments_reschedule_c',
                'label' => 'LBL_APPOINTMENTS_RESCHEDULE',
              ),
              2 => 
              array (
                'name' => 'appointment_accepted_c',
                'label' => 'LBL_APPOINTMENT_ACCEPTED',
              ),
              3 => 
              array (
                'name' => 'appointment_attended_by_poli_c',
                'label' => 'LBL_APPOINTMENT_ATTENDED_BY_POLI',
              ),
              4 => 
              array (
                'name' => 'appointment_attended_c',
                'label' => 'LBL_APPOINTMENT_ATTENDED',
              ),
              5 => 
              array (
                'name' => 'appointment_confirmed_c',
                'label' => 'LBL_APPOINTMENT_CONFIRMED',
              ),
              6 => 
              array (
                'name' => 'remaining_target_c',
                'label' => 'LBL_REMAINING_TARGET',
              ),
              7 => 
              array (
                'name' => 'grand_total_c',
                'label' => 'LBL_GRAND_TOTAL',
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'maxColumns' => '2',
          'useTabs' => true,
        ),
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
            'events' => 
            array (
              'click' => 'button:cancel_button:click',
            ),
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              2 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'divider',
              ),
              5 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              6 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'ATC_ISSCampaigns',
                'acl_action' => 'create',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              8 => 
              array (
                'type' => 'divider',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
      ),
    ),
  ),
);
