<?php
// created: 2017-02-28 11:17:59
$searchdefs['Quotes'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
      2 => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
      ),
      3 => 
      array (
        'name' => 'open_only',
        'label' => 'LBL_OPEN_ITEMS',
        'type' => 'bool',
        'default' => false,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      1 => 
      array (
        'name' => 'quote_num',
        'default' => true,
        'width' => '10%',
      ),
      2 => 
      array (
        'name' => 'total_usdollar',
        'label' => 'LBL_LIST_AMOUNT',
        'default' => true,
        'width' => '10%',
      ),
      3 => 
      array (
        'name' => 'quote_type',
        'type' => 'enum',
        'options' => 'quote_type_dom',
        'default' => true,
        'width' => '10%',
      ),
      4 => 
      array (
        'name' => 'date_quote_expected_closed',
        'default' => true,
        'width' => '10%',
      ),
      5 => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ATC_CLIENTS_QUOTES_1_FROM_ATC_CLIENTS_TITLE',
        'id' => 'ATC_CLIENTS_QUOTES_1ATC_CLIENTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'atc_clients_quotes_1_name',
      ),
      6 => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ATC_CLIENTS_QUOTES_2_FROM_ATC_CLIENTS_TITLE',
        'id' => 'ATC_CLIENTS_QUOTES_2ATC_CLIENTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'atc_clients_quotes_2_name',
      ),
      7 => 
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
        'default' => true,
        'width' => '10%',
      ),
      8 => 
      array (
        'name' => 'quote_stage',
        'default' => true,
        'width' => '10%',
      ),
      9 => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
);