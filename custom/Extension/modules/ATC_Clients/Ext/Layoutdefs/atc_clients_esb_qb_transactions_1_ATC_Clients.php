<?php
 // created: 2016-04-15 12:09:51
$layout_defs["ATC_Clients"]["subpanel_setup"]['atc_clients_esb_qb_transactions_1'] = array (
  'order' => 100,
  'module' => 'esb_QB_Transactions',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ATC_CLIENTS_ESB_QB_TRANSACTIONS_1_FROM_ESB_QB_TRANSACTIONS_TITLE',
  'get_subpanel_data' => 'atc_clients_esb_qb_transactions_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
