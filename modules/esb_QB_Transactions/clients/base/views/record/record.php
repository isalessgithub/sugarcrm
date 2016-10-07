<?php
$viewdefs['esb_QB_Transactions']['base']['view']['record'] = array (
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
          'name' => 'txn_num',
          'label' => 'LBL_TXN_NUM',
        ),
        3 => 
        array (
          'name' => 'txn_po',
          'label' => 'LBL_TXN_PO',
        ),
        4 => 
        array (
          'name' => 'txn_date',
          'label' => 'LBL_TXN_DATE',
        ),
        5 => 
        array (
          'name' => 'txn_type',
          'studio' => 'visible',
          'label' => 'LBL_TXN_TYPE',
        ),
        6 => 
        array (
          'name' => 'txn_amount_outstanding',
          'label' => 'LBL_TXN_AMOUNT_OUTSTANDING',
        ),
        7 => 
        array (
          'name' => 'esb_qb_transactions_accounts_name',
          'label' => 'LBL_ESB_QB_TRANSACTIONS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        ),
        8 => 
        array (
          'name' => 'txn_due_date',
          'label' => 'LBL_TXN_DUE_DATE',
        ),
        9 => 
        array (
          'name' => 'txn_status',
          'label' => 'LBL_TXN_STATUS',
        ),
        10 => 
        array (
          'name' => 'txn_subtotal',
          'label' => 'LBL_TXN_SUBTOTAL',
        ),
        11 => 
        array (
          'name' => 'txn_sales_tax',
          'label' => 'LBL_TXN_SALES_TAX',
        ),
        12 => 
        array (
          'name' => 'txn_tax_amount',
          'label' => 'LBL_TXN_TAX_AMOUNT',
        ),
        13 => 
        array (
          'name' => 'txn_sales_terms',
          'label' => 'LBL_TXN_SALES_TERMS',
        ),
        14 => 
        array (
          'name' => 'txn_grand_total',
          'label' => 'LBL_TXN_GRAND_TOTAL',
        ),
        15 => 
        array (
          'name' => 'txn_ar_account',
          'label' => 'LBL_TXN_AR_ACCOUNT',
        ),
        16 => 
        array (
          'name' => 'txn_class',
          'label' => 'LBL_TXN_CLASS',
        ),
        17 => 
        array (
          'name' => 'txn_shipdate',
          'label' => 'LBL_TXN_SHIPDATE',
        ),
        18 => 
        array (
          'name' => 'esb_qb_transactions_quotes_name',
          'label' => 'LBL_ESB_QB_TRANSACTIONS_QUOTES_FROM_QUOTES_TITLE',
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
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'useTabs' => false,
  ),
);
