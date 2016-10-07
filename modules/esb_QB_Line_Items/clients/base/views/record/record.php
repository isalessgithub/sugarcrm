<?php
$viewdefs['esb_QB_Line_Items']['base']['view']['record'] = array (
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
          'name' => 'esb_qb_line_items_esb_qb_transactions_name',
          'label' => 'LBL_ESB_QB_LINE_ITEMS_ESB_QB_TRANSACTIONS_FROM_ESB_QB_TRANSACTIONS_TITLE',
        ),
        3 => 
        array (
          'name' => 'item_type',
          'label' => 'LBL_ITEM_TYPE',
        ),
        4 => 
        array (
          'name' => 'unit_price',
          'label' => 'LBL_UNIT_PRICE',
        ),
        5 => 
        array (
          'name' => 'class',
          'label' => 'LBL_CLASS',
        ),
        6 => 
        array (
          'name' => 'quantity',
          'label' => 'LBL_QUANTITY',
        ),
        7 => 
        array (
          'name' => 'taxable',
          'label' => 'LBL_TAXABLE',
        ),
        8 => 
        array (
          'name' => 'amount',
          'label' => 'LBL_AMOUNT',
        ),
        9 => 
        array (
          'name' => 'group_item',
          'label' => 'LBL_GROUP_ITEM',
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
