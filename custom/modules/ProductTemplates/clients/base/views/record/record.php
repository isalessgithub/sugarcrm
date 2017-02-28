<?php
// created: 2017-02-28 11:25:17
$viewdefs['ProductTemplates']['base']['view']['record'] = array (
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
          'readonly' => true,
        ),
        1 => 
        array (
          'name' => 'name',
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
        0 => 'status',
        1 => 
        array (
          'name' => 'website',
          'type' => 'url',
        ),
        2 => 'date_available',
        3 => 'tax_class',
        4 => 'qty_in_stock',
        5 => 'category_name',
        6 => 'manufacturer_name',
        7 => 'mft_part_num',
        8 => 'vendor_part_num',
        9 => 'weight',
        10 => 'type_name',
        11 => 
        array (
          'name' => 'cost_price',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'cost_usdollar',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
          'enabled' => true,
          'default' => true,
        ),
        12 => 
        array (
          'name' => 'discount_price',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'discount_usdollar',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
          'enabled' => true,
          'default' => true,
          'span' => 12,
        ),
        13 => 
        array (
          'name' => 'list_price',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'list_usdollar',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
          'enabled' => true,
          'default' => true,
          'span' => 12,
        ),
        14 => 
        array (
          'name' => 'pricing_formula',
          'related_fields' => 
          array (
            0 => 'pricing_factor',
          ),
        ),
        15 => 
        array (
        ),
        16 => 
        array (
          'name' => 'description',
          'span' => 12,
        ),
        17 => 'support_name',
        18 => 'support_description',
        19 => 'support_contact',
        20 => 'support_term',
        21 => 
        array (
          'name' => 'esb_listid_c',
          'label' => 'LBL_ESB_LISTID',
        ),
        22 => 
        array (
          'name' => 'esb_item_type_c',
          'label' => 'LBL_ESB_ITEM_TYPE',
        ),
        23 => 
        array (
          'name' => 'esb_sync_c',
          'label' => 'LBL_ESB_SYNC',
        ),
        24 => 
        array (
          'name' => 'esb_last_sync_c',
          'label' => 'LBL_ESB_LAST_SYNC',
        ),
        25 => 
        array (
          'name' => 'esb_income_account_c',
          'label' => 'LBL_ESB_INCOME_ACCOUNT',
        ),
        26 => 
        array (
          'name' => 'esb_expense_account_c',
          'label' => 'LBL_ESB_EXPENSE_ACCOUNT',
        ),
        27 => 
        array (
          'name' => 'esb_cogs_account_c',
          'label' => 'LBL_ESB_COGS_ACCOUNT',
        ),
        28 => 
        array (
          'name' => 'esb_asset_account_c',
          'label' => 'LBL_ESB_ASSET_ACCOUNT',
        ),
        29 => 'cost_usdollar',
        30 => 'date_cost_price',
        31 => 'discount_usdollar',
        32 => 'list_usdollar',
        33 => 
        array (
          'name' => 'tag',
          'span' => 12,
        ),
      ),
    ),
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
          'acl_module' => 'ProductTemplates',
          'acl_action' => 'create',
        ),
        7 => 
        array (
          'type' => 'divider',
        ),
        8 => 
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
  'templateMeta' => 
  array (
    'maxColumns' => '2',
  ),
);