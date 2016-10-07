<?php
// created: 2016-10-07 10:00:34
$viewdefs['Quotes']['base']['view']['subpanel-atc_isscampaigns_subpanel_atc_isscampaigns_quotes_1'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'default' => true,
          'label' => 'LBL_LIST_QUOTE_NAME',
          'enabled' => true,
          'name' => 'name',
          'link' => true,
          'type' => 'name',
        ),
        1 => 
        array (
          'type' => 'relate',
          'link' => true,
          'default' => true,
          'target_module' => 'ATC_Clients',
          'target_record_key' => 'atc_clients_quotes_1atc_clients_ida',
          'label' => 'LBL_ATC_CLIENTS_QUOTES_1_FROM_ATC_CLIENTS_TITLE',
          'enabled' => true,
          'name' => 'atc_clients_quotes_1_name',
        ),
        2 => 
        array (
          'type' => 'relate',
          'link' => true,
          'default' => true,
          'target_module' => 'ATC_Clients',
          'target_record_key' => 'atc_clients_quotes_2atc_clients_ida',
          'label' => 'LBL_ATC_CLIENTS_QUOTES_2_FROM_ATC_CLIENTS_TITLE',
          'enabled' => true,
          'name' => 'atc_clients_quotes_2_name',
        ),
        3 => 
        array (
          'default' => true,
          'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
          'enabled' => true,
          'name' => 'total_usdollar',
          'type' => 'currency',
        ),
        4 => 
        array (
          'name' => 'date_quote_expected_closed',
          'default' => true,
          'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
          'enabled' => true,
          'type' => 'date',
        ),
        5 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'default' => true,
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'link' => true,
          'type' => 'relate',
        ),
        6 => 
        array (
          'type' => 'bool',
          'default' => true,
          'label' => 'LBL_ESB_SYNC',
          'enabled' => true,
          'name' => 'esb_sync_c',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);