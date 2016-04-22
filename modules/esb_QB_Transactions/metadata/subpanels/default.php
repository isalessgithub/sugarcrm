<?php
$module_name='esb_QB_Transactions';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'esb_QB_Transactions',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'txn_type' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_TXN_TYPE',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '10%',
    ),
    'txn_num' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_TXN_NUM',
      'width' => '10%',
      'default' => true,
    ),
    'txn_date' => 
    array (
      'type' => 'datetimecombo',
      'vname' => 'LBL_TXN_DATE',
      'width' => '10%',
      'default' => true,
    ),
    'txn_grand_total' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_TXN_GRAND_TOTAL',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
    ),
    'txn_amount_outstanding' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_TXN_AMOUNT_OUTSTANDING',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
    ),
    'txn_due_date' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_TXN_DUE_DATE',
      'width' => '10%',
      'default' => true,
    ),
    'txn_status' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_TXN_STATUS',
      'width' => '10%',
      'default' => true,
    ),
  ),
);