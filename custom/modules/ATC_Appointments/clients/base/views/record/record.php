<?php
$viewdefs['ATC_Appointments'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
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
                'type' => 'manage-subscription',
                'name' => 'manage_subscription_button',
                'label' => 'LBL_MANAGE_SUBSCRIPTIONS',
                'showOn' => 'view',
                'value' => 'edit',
              ),
              6 => 
              array (
                'type' => 'vcard',
                'name' => 'vcard_button',
                'label' => 'LBL_VCARD_DOWNLOAD',
                'acl_action' => 'edit',
              ),
              7 => 
              array (
                'type' => 'divider',
              ),
              8 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'ATC_Appointments',
                'acl_action' => 'create',
              ),
              10 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:historical_summary_button:click',
                'name' => 'historical_summary_button',
                'label' => 'LBL_HISTORICAL_SUMMARY',
                'acl_action' => 'view',
              ),
              11 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              12 => 
              array (
                'type' => 'divider',
              ),
              13 => 
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
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
              ),
              1 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labels' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'appointment_status',
                'studio' => 'visible',
                'label' => 'LBL_APPOINTMENT_STATUS',
              ),
              1 => 
              array (
                'name' => 'appointment_place',
                'studio' => 'visible',
                'label' => 'LBL_APPOINTMENT_PLACE',
              ),
              2 => 
              array (
                'name' => 'appointment_date',
                'label' => 'LBL_APPOINTMENT_DATE',
              ),
              3 => 
              array (
                'name' => 'appointment_duration_minutes',
                'studio' => 'visible',
                'label' => 'LBL_APPOINTMENT_DURATION_MINUTES',
              ),
              4 => 
              array (
                'name' => 'accounts_atc_appointments_1_name',
                'label' => 'LBL_ACCOUNTS_ATC_APPOINTMENTS_1_FROM_ACCOUNTS_TITLE',
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'atc_appointments_contacts_name',
                'label' => 'LBL_ATC_APPOINTMENTS_CONTACTS_FROM_CONTACTS_TITLE',
              ),
              6 => 
              array (
                'name' => 'title_c',
                'studio' => 'visible',
                'label' => 'LBL_TITLE',
              ),
              7 => 
              array (
                'name' => 'direct_c',
                'studio' => 'visible',
                'label' => 'LBL_DIRECT',
              ),
              8 => 
              array (
                'name' => 'switchboard_c',
                'studio' => 'visible',
                'label' => 'LBL_SWITCHBOARD',
              ),
              9 => 
              array (
                'name' => 'contact_email',
                'label' => 'LBL_CONTACT_EMAIL',
              ),
              10 => 
              array (
                'name' => 'contact_info_c',
                'studio' => 'visible',
                'label' => 'LBL_CONTACT_INFO',
              ),
              11 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
                'span' => 12,
              ),
              12 => 
              array (
                'name' => 'atc_isscampaigns_atc_appointments_name',
                'label' => 'LBL_ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_FROM_ATC_ISSCAMPAIGNS_TITLE',
              ),
              13 => 
              array (
                'name' => 'prospectlists_atc_appointments_1_name',
                'label' => 'LBL_PROSPECTLISTS_ATC_APPOINTMENTS_1_FROM_PROSPECTLISTS_TITLE',
              ),
              14 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO',
              ),
              15 => 
              array (
                'name' => 'team_name',
                'studio' => 
                array (
                  'portallistview' => false,
                  'portalrecordview' => false,
                ),
                'label' => 'LBL_TEAMS',
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => false,
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
              ),
              1 => 
              array (
              ),
              2 => 
              array (
                'name' => 'atc_clientsalesreps_atc_appointments_name',
                'label' => 'LBL_ATC_CLIENTSALESREPS_ATC_APPOINTMENTS_FROM_ATC_CLIENTSALESREPS_TITLE',
              ),
              3 => 
              array (
                'name' => 'second_client_rep_c',
                'studio' => 'visible',
                'label' => 'LBL_SECOND_CLIENT_REP',
              ),
              4 => 
              array (
                'name' => 'sales_rep_email_c',
                'label' => 'LBL_SALES_REP_EMAIL',
              ),
              5 => 
              array (
              ),
              6 => 
              array (
                'name' => 'feedback_status_c',
                'label' => 'LBL_FEEDBACK_STATUS',
              ),
              7 => 
              array (
                'name' => 'feedback_timestamp',
                'label' => 'LBL_FEEDBACK_TIMESTAMP',
              ),
              8 => 
              array (
                'name' => 'appointment_feedback',
                'studio' => 'visible',
                'label' => 'LBL_APPOINTMENT_FEEDBACK',
                'span' => 12,
              ),
              9 => 
              array (
                'name' => 'positive_appointment_c',
                'label' => 'LBL_POSITIVE_APPOINTMENT',
              ),
              10 => 
              array (
                'name' => 'second_appointment_c',
                'label' => 'LBL_SECOND_APPOINTMENT',
              ),
              11 => 
              array (
                'name' => 'appointment_result_c',
                'label' => 'LBL_APPOINTMENT_RESULT',
              ),
              12 => 
              array (
                'name' => 'opportunity_amount',
                'studio' => 'visible',
                'label' => 'LBL_OPPORTUNITY_AMOUNT',
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
