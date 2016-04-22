<?php
 // created: 2013-12-24 15:50:27
$layout_defs["ATC_Clients"]["subpanel_setup"]['cp_client_users_atc_clients'] = array (
  'order' => 100,
  'module' => 'CP_Client_Users',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CP_CLIENT_USERS_ATC_CLIENTS_FROM_CP_CLIENT_USERS_TITLE',
  'get_subpanel_data' => 'cp_client_users_atc_clients',
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
