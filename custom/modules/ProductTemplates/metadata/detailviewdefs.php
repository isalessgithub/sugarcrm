<?php
$viewdefs ['ProductTemplates'] = 
array (
  'DetailView' => 
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'status',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'label' => 'LBL_URL',
            'type' => 'link',
          ),
          1 => 'date_available',
        ),
        2 => 
        array (
          0 => 'tax_class',
          1 => 
          array (
            'name' => 'qty_in_stock',
            'label' => 'LBL_QUANTITY',
          ),
        ),
        3 => 
        array (
          0 => 'manufacturer_id',
          1 => 'weight',
        ),
        4 => 
        array (
          0 => 'mft_part_num',
          1 => 
          array (
            'name' => 'category_name',
            'type' => 'varchar',
            'label' => 'LBL_CATEGORY',
          ),
        ),
        5 => 
        array (
          0 => 'vendor_part_num',
          1 => 
          array (
            'name' => 'type_id',
            'type' => 'varchar',
            'label' => 'LBL_TYPE',
          ),
        ),
        6 => 
        array (
          0 => 'currency_id',
          1 => 'support_name',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'cost_price',
            'label' => '{$MOD.LBL_COST_PRICE|strip_semicolon} ({$CURRENCY})',
          ),
          1 => 'support_contact',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'list_price',
            'label' => '{$MOD.LBL_LIST_PRICE|strip_semicolon} ({$CURRENCY})',
          ),
          1 => 'support_description',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'discount_price',
            'label' => '{$MOD.LBL_DISCOUNT_PRICE|strip_semicolon} ({$CURRENCY})',
          ),
          1 => 'support_term',
        ),
        10 => 
        array (
          0 => 'pricing_formula',
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'displayParams' => 
            array (
              'nl2br' => true,
            ),
          ),
        ),
      ),
      'LBL_QUICKBOOKS_PLUGIN' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'esb_listid_c',
          ),
          1 => 
          array (
            'name' => 'esb_item_type_c',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'esb_sync_c',
          ),
          1 => 
          array (
            'name' => 'esb_last_sync_c',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'esb_income_account_c',
          ),
          1 => 
          array (
            'name' => 'esb_expense_account_c',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'esb_cogs_account_c',
          ),
          1 => 
          array (
            'name' => 'esb_asset_account_c',
          ),
        ),
      ),
    ),
  ),
);
?>
