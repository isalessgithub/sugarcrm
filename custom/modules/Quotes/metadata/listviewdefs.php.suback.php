<?php
// created: 2016-10-06 15:20:01
$listViewDefs['Quotes'] = array (
  'QUOTE_NUM' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_QUOTE_NUM',
    'link' => false,
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_QUOTE_NAME',
    'link' => true,
    'default' => true,
  ),
  'QUOTE_STAGE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_QUOTE_STAGE',
    'link' => false,
    'default' => true,
  ),
  'TOTAL_USDOLLAR' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
    'link' => false,
    'default' => true,
    'currency_format' => true,
    'align' => 'right',
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
  'ATC_ISSCAMPAIGNS_QUOTES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_ISSCAMPAIGNS_QUOTES_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
    'id' => 'ATC_ISSCAMPAIGNS_QUOTES_1ATC_ISSCAMPAIGNS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_TEAM',
    'link' => false,
    'default' => false,
    'related_fields' => 
    array (
      0 => 'team_id',
    ),
  ),
);