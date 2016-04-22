<?php
$module_name = 'esb_QB_Transactions';
$viewdefs [$module_name] =
array (
  'DetailView' =>
  array (
    'templateMeta' =>
    array (
      'form' =>
      array (
        'buttons' =>
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
            'name' => 'txn_num',
            'label' => 'LBL_TXN_NUM',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'txn_po',
            'label' => 'LBL_TXN_PO',
          ),
          1 =>
          array (
            'name' => 'txn_date',
            'label' => 'LBL_TXN_DATE',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'txn_type',
            'studio' => 'visible',
            'label' => 'LBL_TXN_TYPE',
          ),
          1 =>
          array (
            'name' => 'txn_amount_outstanding',
            'label' => 'LBL_TXN_AMOUNT_OUTSTANDING',
          ),
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'esb_qb_transactions_accounts_name',
          ),
          1 =>
          array (
            'name' => 'txn_due_date',
            'label' => 'LBL_TXN_DUE_DATE',
          ),
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'txn_status',
            'label' => 'LBL_TXN_STATUS',
          ),
          1 =>
          array (
            'name' => 'txn_subtotal',
            'label' => 'LBL_TXN_SUBTOTAL',
          ),
        ),
        5 =>
        array (
          0 =>
          array (
            'name' => 'txn_sales_tax',
            'label' => 'LBL_TXN_SALES_TAX',
          ),
          1 =>
          array (
            'name' => 'txn_tax_amount',
            'label' => 'LBL_TXN_TAX_AMOUNT',
          ),
        ),
        6 =>
        array (
          0 =>
          array (
            'name' => 'txn_sales_terms',
            'label' => 'LBL_TXN_SALES_TERMS',
          ),
          1 =>
          array (
            'name' => 'txn_grand_total',
            'label' => 'LBL_TXN_GRAND_TOTAL',
          ),
        ),
        7 =>
        array (
          0 =>
          array (
            'name' => 'txn_ar_account',
            'label' => 'LBL_TXN_AR_ACCOUNT',
          ),
          1 =>
          array (
            'name' => 'txn_class',
            'label' => 'LBL_TXN_CLASS',
          ),
        ),
        8 =>
        array (
          0 =>
          array (
            'name' => 'txn_shipdate',
            'label' => 'LBL_TXN_SHIPDATE',
          ),
          1 => '',
        ),
        9 =>
        array (
          0 => 'description',
          1 =>
          array (
            'name' => 'esb_qb_transactions_quotes_name',
          ),
        ),
      ),
      'lbl_detailview_panel1' =>
      array (
        0 =>
        array (
          0 => 'assigned_user_name',
          1 => 'team_name',
        ),
      ),
    ),
  ),
);
?>
