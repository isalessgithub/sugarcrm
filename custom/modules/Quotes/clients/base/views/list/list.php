<?php
$viewdefs['Quotes']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'label' => 'LBL_LIST_QUOTE_NUM',
          'enabled' => true,
          'default' => true,
          'name' => 'quote_num',
          'width' => '10%',
          'link' => false,
        ),
        1 => 
        array (
          'label' => 'LBL_LIST_QUOTE_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
          'width' => '25%',
        ),
        2 => 
        array (
          'label' => 'LBL_LIST_QUOTE_STAGE',
          'enabled' => true,
          'default' => true,
          'name' => 'quote_stage',
          'width' => '10%',
          'link' => false,
        ),
        3 => 
        array (
          'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
          'enabled' => true,
          'default' => true,
          'name' => 'total_usdollar',
          'width' => '10%',
          'link' => false,
          'currency_format' => true,
          'align' => 'right',
        ),
        4 => 
        array (
          'name' => 'atc_clients_quotes_1_name',
          'default' => true,
          'enabled' => true,
          'type' => 'relate',
          'link' => true,
          'label' => 'LBL_ATC_CLIENTS_QUOTES_1_FROM_ATC_CLIENTS_TITLE',
          'id' => 'ATC_CLIENTS_QUOTES_1ATC_CLIENTS_IDA',
          'width' => '10%',
        ),
        5 => 
        array (
          'name' => 'atc_clients_quotes_2_name',
          'default' => true,
          'enabled' => true,
          'type' => 'relate',
          'link' => true,
          'label' => 'LBL_ATC_CLIENTS_QUOTES_2_FROM_ATC_CLIENTS_TITLE',
          'id' => 'ATC_CLIENTS_QUOTES_2ATC_CLIENTS_IDA',
          'width' => '10%',
        ),
        6 => 
        array (
          'name' => 'atc_isscampaigns_quotes_1_name',
          'default' => true,
          'enabled' => true,
          'type' => 'relate',
          'link' => true,
          'label' => 'LBL_ATC_ISSCAMPAIGNS_QUOTES_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
          'id' => 'ATC_ISSCAMPAIGNS_QUOTES_1ATC_ISSCAMPAIGNS_IDA',
          'width' => '10%',
        ),
        7 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
          'width' => '10%',
          'id' => 'ASSIGNED_USER_ID',
        ),
        8 => 
        array (
          'name' => 'date_entered',
          'enabled' => true,
          'default' => true,
          'width' => '10%',
          'label' => 'LBL_DATE_ENTERED',
        ),
        9 => 
        array (
          'name' => 'team_name',
          'default' => false,
          'enabled' => true,
          'width' => '10%',
          'label' => 'LBL_LIST_TEAM',
          'link' => false,
          'related_fields' => 
          array (
            0 => 'team_id',
          ),
        ),
        10 => 
        array (
          'label' => 'LBL_LIST_AMOUNT',
          'enabled' => true,
          'default' => false,
          'name' => 'total',
          'related_fields' => 
          array (
            0 => 'currency_id',
          ),
          'width' => '10',
          'link' => false,
          'currency_format' => true,
          'align' => 'right',
          'sortable' => false,
        ),
      ),
    ),
  ),
);
