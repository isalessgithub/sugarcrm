<?php
// created: 2017-02-28 11:25:17
$viewdefs['Leads']['base']['view']['record'] = array (
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
          'type' => 'convertbutton',
          'name' => 'lead_convert_button',
          'label' => 'LBL_CONVERT_BUTTON_LABEL',
          'acl_action' => 'edit',
        ),
        6 => 
        array (
          'type' => 'manage-subscription',
          'name' => 'manage_subscription_button',
          'label' => 'LBL_MANAGE_SUBSCRIPTIONS',
          'acl_action' => 'view',
        ),
        7 => 
        array (
          'type' => 'vcard',
          'name' => 'vcard_button',
          'label' => 'LBL_VCARD_DOWNLOAD',
          'acl_action' => 'view',
        ),
        8 => 
        array (
          'type' => 'divider',
        ),
        9 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:find_duplicates_button:click',
          'name' => 'find_duplicates_button',
          'label' => 'LBL_DUP_MERGE',
          'acl_action' => 'edit',
        ),
        10 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:duplicate_button:click',
          'name' => 'duplicate_button',
          'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
          'acl_module' => 'Leads',
          'acl_action' => 'create',
        ),
        11 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:historical_summary_button:click',
          'name' => 'historical_summary_button',
          'label' => 'LBL_HISTORICAL_SUMMARY',
          'acl_action' => 'view',
        ),
        12 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:audit_button:click',
          'name' => 'audit_button',
          'label' => 'LNK_VIEW_CHANGE_LOG',
          'acl_action' => 'view',
        ),
        13 => 
        array (
          'type' => 'divider',
        ),
        14 => 
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
          'name' => 'full_name',
          'type' => 'fullname',
          'label' => 'LBL_NAME',
          'dismiss_label' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'salutation',
              'type' => 'enum',
              'enum_width' => 'auto',
              'searchBarThreshold' => 7,
            ),
            1 => 'first_name',
            2 => 'last_name',
          ),
        ),
        2 => 
        array (
          'type' => 'favorite',
        ),
        3 => 
        array (
          'type' => 'follow',
          'readonly' => true,
        ),
        4 => 
        array (
          'name' => 'converted',
          'type' => 'badge',
          'dismiss_label' => true,
          'readonly' => true,
          'related_fields' => 
          array (
            0 => 'account_id',
            1 => 'account_name',
            2 => 'contact_id',
            3 => 'contact_name',
            4 => 'opportunity_id',
            5 => 'opportunity_name',
          ),
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
      'fields' => 
      array (
        0 => 'phone_work',
        1 => 'title',
        2 => 'phone_mobile',
        3 => 'department',
        4 => 'phone_fax',
        5 => 'account_name',
        6 => 'website',
        7 => 
        array (
          'name' => 'primary_address',
          'type' => 'fieldset',
          'css_class' => 'address',
          'label' => 'LBL_PRIMARY_ADDRESS',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'primary_address_street',
              'css_class' => 'address_street',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_STREET',
            ),
            1 => 
            array (
              'name' => 'primary_address_city',
              'css_class' => 'address_city',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_CITY',
            ),
            2 => 
            array (
              'name' => 'primary_address_state',
              'css_class' => 'address_state',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_STATE',
            ),
            3 => 
            array (
              'name' => 'primary_address_postalcode',
              'css_class' => 'address_zip',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
            ),
            4 => 
            array (
              'name' => 'primary_address_country',
              'css_class' => 'address_country',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
            ),
          ),
        ),
        8 => 
        array (
          'name' => 'alt_address',
          'type' => 'fieldset',
          'css_class' => 'address',
          'label' => 'LBL_ALT_ADDRESS',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'alt_address_street',
              'css_class' => 'address_street',
              'placeholder' => 'LBL_ALT_ADDRESS_STREET',
            ),
            1 => 
            array (
              'name' => 'alt_address_city',
              'css_class' => 'address_city',
              'placeholder' => 'LBL_ALT_ADDRESS_CITY',
            ),
            2 => 
            array (
              'name' => 'alt_address_state',
              'css_class' => 'address_state',
              'placeholder' => 'LBL_ALT_ADDRESS_STATE',
            ),
            3 => 
            array (
              'name' => 'alt_address_postalcode',
              'css_class' => 'address_zip',
              'placeholder' => 'LBL_ALT_ADDRESS_POSTALCODE',
            ),
            4 => 
            array (
              'name' => 'alt_address_country',
              'css_class' => 'address_country',
              'placeholder' => 'LBL_ALT_ADDRESS_COUNTRY',
            ),
            5 => 
            array (
              'name' => 'copy',
              'label' => 'NTC_COPY_PRIMARY_ADDRESS',
              'type' => 'copy',
              'mapping' => 
              array (
                'primary_address_street' => 'alt_address_street',
                'primary_address_city' => 'alt_address_city',
                'primary_address_state' => 'alt_address_state',
                'primary_address_postalcode' => 'alt_address_postalcode',
                'primary_address_country' => 'alt_address_country',
              ),
            ),
          ),
        ),
        9 => 
        array (
        ),
        10 => 
        array (
          'name' => 'description',
          'span' => 12,
        ),
        11 => 'twitter',
        12 => 
        array (
          'name' => 'dnb_principal_id',
          'readonly' => true,
        ),
        13 => 
        array (
          'name' => 'tag',
          'span' => 12,
        ),
      ),
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
    2 => 
    array (
      'name' => 'panel_hidden',
      'label' => 'LBL_RECORD_SHOWMORE',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'hide' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'status',
          'type' => 'status',
        ),
        1 => 'lead_source',
        2 => 'status_description',
        3 => 'lead_source_description',
        4 => 'opportunity_amount',
        5 => 
        array (
          'name' => 'refered_by',
          'comment' => 'Identifies who refered the lead',
          'label' => 'LBL_REFERED_BY',
        ),
        6 => 'campaign_name',
        7 => 'do_not_call',
      ),
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
    3 => 
    array (
      'name' => 'lbl_panel_assignment',
      'label' => 'LBL_PANEL_ASSIGNMENT',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 'assigned_user_name',
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
        2 => 'team_name',
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
        4 => 
        array (
          'name' => 'email',
          'span' => 12,
        ),
      ),
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'useTabs' => true,
  ),
);