<?php
// created: 2018-03-09 13:27:02
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
        19 => 
        array (
          'name' => 'atc_clients_esb_qb_transactions_1_name',
          'label' => 'LBL_ATC_CLIENTS_ESB_QB_TRANSACTIONS_1_FROM_ATC_CLIENTS_TITLE',
        ),
        20 => 
        array (
          'name' => 'tag',
          'span' => 12,
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
          'acl_module' => 'esb_QB_Transactions',
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
);