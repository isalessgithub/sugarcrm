<?php
// created: 2016-10-06 15:20:10
$viewdefs['esb_QB_Line_Items']['DetailView'] = array (
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
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_DETAILVIEW_PANEL1' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
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
        1 => 
        array (
          'name' => 'esb_qb_line_items_esb_qb_transactions_name',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'item_type',
          'label' => 'LBL_ITEM_TYPE',
        ),
        1 => 
        array (
          'name' => 'unit_price',
          'label' => 'LBL_UNIT_PRICE',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'class',
          'label' => 'LBL_CLASS',
        ),
        1 => 
        array (
          'name' => 'quantity',
          'label' => 'LBL_QUANTITY',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'taxable',
          'label' => 'LBL_TAXABLE',
        ),
        1 => 
        array (
          'name' => 'amount',
          'label' => 'LBL_AMOUNT',
        ),
      ),
      4 => 
      array (
        0 => 'description',
        1 => 
        array (
          'name' => 'group_item',
          'label' => 'LBL_GROUP_ITEM',
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
);