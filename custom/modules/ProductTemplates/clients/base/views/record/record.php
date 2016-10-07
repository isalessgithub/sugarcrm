<?php
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
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '2',
  ),
);
