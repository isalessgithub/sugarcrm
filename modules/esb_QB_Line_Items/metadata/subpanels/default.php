<?php
$module_name='esb_QB_Line_Items';
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
      'popup_module' => 'esb_QB_Line_Items',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'item_type' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_ITEM_TYPE',
      'width' => '10%',
      'default' => true,
    ),
    'unit_price' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_UNIT_PRICE',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
    ),
    'quantity' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_QUANTITY',
      'width' => '10%',
      'default' => true,
    ),
    'amount' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_AMOUNT',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
    ),
    'taxable' => 
    array (
      'type' => 'bool',
      'default' => true,
      'vname' => 'LBL_TAXABLE',
      'width' => '10%',
    ),
  ),
);