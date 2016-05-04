<?php
$dashletData['QuotesDashlet']['searchFields'] = array (
  'quote_stage' => 
  array (
    'default' => '',
  ),
  'name' => 
  array (
    'default' => '',
  ),
  'date_quote_expected_closed' => 
  array (
    'default' => '',
  ),
  'team_id' => 
  array (
    'default' => '',
    'label' => 'LBL_TEAMS',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'label' => 'LBL_ASSIGNED_TO',
    'default' => 'Chris Cassity',
  ),
);
$dashletData['QuotesDashlet']['columns'] = array (
  'quote_num' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_QUOTE_NUM',
    'link' => false,
    'default' => true,
    'name' => 'quote_num',
  ),
  'name' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_QUOTE_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'quote_stage' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_QUOTE_STAGE',
    'link' => false,
    'default' => true,
    'name' => 'quote_stage',
  ),
  'total_usdollar' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
    'link' => false,
    'default' => true,
    'currency_format' => true,
    'align' => 'right',
    'name' => 'total_usdollar',
  ),
  'atc_clients_quotes_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_CLIENTS_QUOTES_1_FROM_ATC_CLIENTS_TITLE',
    'id' => 'ATC_CLIENTS_QUOTES_1ATC_CLIENTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'atc_clients_quotes_1_name',
  ),
  'atc_clients_quotes_2_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_CLIENTS_QUOTES_2_FROM_ATC_CLIENTS_TITLE',
    'id' => 'ATC_CLIENTS_QUOTES_2ATC_CLIENTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'atc_clients_quotes_2_name',
  ),
  'quote_type' => 
  array (
    'width' => '15%',
    'label' => 'LBL_QUOTE_TYPE',
    'link' => false,
    'name' => 'quote_type',
    'default' => false,
  ),
  'order_stage' => 
  array (
    'width' => '15%',
    'label' => 'LBL_ORDER_STAGE',
    'link' => false,
    'name' => 'order_stage',
    'default' => false,
  ),
  'billing_address_street' => 
  array (
    'width' => '20%',
    'label' => 'LBL_BILLING_ADDRESS_STREET',
    'link' => false,
    'name' => 'billing_address_street',
    'default' => false,
  ),
  'billing_address_city' => 
  array (
    'width' => '20%',
    'label' => 'LBL_BILLING_ADDRESS_CITY',
    'link' => false,
    'name' => 'billing_address_city',
    'default' => false,
  ),
  'date_quote_expected_closed' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
    'link' => false,
    'default' => false,
    'name' => 'date_quote_expected_closed',
  ),
  'billing_address_state' => 
  array (
    'width' => '20%',
    'label' => 'LBL_BILLING_ADDRESS_STATE',
    'link' => false,
    'name' => 'billing_address_state',
    'default' => false,
  ),
  'billing_address_postalcode' => 
  array (
    'width' => '20%',
    'label' => 'LBL_BILLING_ADDRESS_POSTAL_CODE',
    'link' => false,
    'name' => 'billing_address_postalcode',
    'default' => false,
  ),
  'billing_address_country' => 
  array (
    'width' => '20%',
    'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
    'link' => false,
    'name' => 'billing_address_country',
    'default' => false,
  ),
  'shipping_address_street' => 
  array (
    'width' => '20%',
    'label' => 'LBL_SHIPPING_ADDRESS_STREET',
    'link' => false,
    'name' => 'shipping_address_street',
    'default' => false,
  ),
  'shipping_address_city' => 
  array (
    'width' => '20%',
    'label' => 'LBL_SHIPPING_ADDRESS_CITY',
    'link' => false,
    'name' => 'shipping_address_city',
    'default' => false,
  ),
  'shipping_address_state' => 
  array (
    'width' => '20%',
    'label' => 'LBL_SHIPPING_ADDRESS_STATE',
    'link' => false,
    'name' => 'shipping_address_state',
    'default' => false,
  ),
  'shipping_address_postalcode' => 
  array (
    'width' => '20%',
    'label' => 'LBL_SHIPPING_ADDRESS_POSTAL_CODE',
    'link' => false,
    'name' => 'shipping_address_postalcode',
    'default' => false,
  ),
  'shipping_address_country' => 
  array (
    'width' => '20%',
    'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
    'link' => false,
    'name' => 'shipping_address_country',
    'default' => false,
  ),
);
