<?php
$popupMeta = array (
    'moduleMain' => 'Quote',
    'varName' => 'QUOTE',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'quotes.name',
  'quote_num' => 'quotes.quote_num',
  'atc_clients_quotes_1_name' => 'quotes.atc_clients_quotes_1_name',
  'atc_clients_quotes_2_name' => 'quotes.atc_clients_quotes_2_name',
  'quote_stage' => 'quotes.quote_stage',
  'purchase_order_num' => 'quotes.purchase_order_num',
  'assigned_user_id' => 'quotes.assigned_user_id',
),
    'searchInputs' => array (
  0 => 'name',
  2 => 'quote_num',
  3 => 'atc_clients_quotes_1_name',
  4 => 'atc_clients_quotes_2_name',
  5 => 'quote_stage',
  6 => 'purchase_order_num',
  7 => 'assigned_user_id',
),
    'searchdefs' => array (
  'quote_num' => 
  array (
    'name' => 'quote_num',
    'width' => '10%',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'atc_clients_quotes_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_CLIENTS_QUOTES_1_FROM_ATC_CLIENTS_TITLE',
    'id' => 'ATC_CLIENTS_QUOTES_1ATC_CLIENTS_IDA',
    'width' => '10%',
    'name' => 'atc_clients_quotes_1_name',
  ),
  'atc_clients_quotes_2_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_CLIENTS_QUOTES_2_FROM_ATC_CLIENTS_TITLE',
    'id' => 'ATC_CLIENTS_QUOTES_2ATC_CLIENTS_IDA',
    'width' => '10%',
    'name' => 'atc_clients_quotes_2_name',
  ),
  'quote_stage' => 
  array (
    'name' => 'quote_stage',
    'width' => '10%',
  ),
  'purchase_order_num' => 
  array (
    'name' => 'purchase_order_num',
    'width' => '10%',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'QUOTE_NUM' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_QUOTE_NUM',
    'link' => false,
    'default' => true,
    'name' => 'quote_num',
  ),
  'NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_QUOTE_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ATC_CLIENTS_QUOTES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_CLIENTS_QUOTES_1_FROM_ATC_CLIENTS_TITLE',
    'id' => 'ATC_CLIENTS_QUOTES_1ATC_CLIENTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ATC_CLIENTS_QUOTES_2_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_CLIENTS_QUOTES_2_FROM_ATC_CLIENTS_TITLE',
    'id' => 'ATC_CLIENTS_QUOTES_2ATC_CLIENTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'QUOTE_STAGE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_QUOTE_STAGE',
    'link' => false,
    'default' => true,
    'name' => 'quote_stage',
  ),
  'PURCHASE_ORDER_NUM' => 
  array (
    'width' => '25%',
    'label' => 'LBL_PURCHASE_ORDER_NUM',
    'default' => true,
    'name' => 'purchase_order_num',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'link' => false,
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
