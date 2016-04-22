<?php
 // created: 2013-10-04 10:51:35
$layout_defs["Accounts"]["subpanel_setup"]['accounts_atc_appointments_1'] = array (
  'order' => 100,
  'module' => 'ATC_Appointments',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_ATC_APPOINTMENTS_1_FROM_ATC_APPOINTMENTS_TITLE',
  'get_subpanel_data' => 'accounts_atc_appointments_1',
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
