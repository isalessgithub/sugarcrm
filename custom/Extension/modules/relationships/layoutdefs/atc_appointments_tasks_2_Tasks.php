<?php
 // created: 2018-01-11 14:52:12
$layout_defs["Tasks"]["subpanel_setup"]['atc_appointments_tasks_2'] = array (
  'order' => 100,
  'module' => 'ATC_Appointments',
  'subpanel_name' => 'Atc_isscampaigns_subpanel_atc_isscampaigns_atc_appointments',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ATC_APPOINTMENTS_TASKS_2_FROM_ATC_APPOINTMENTS_TITLE',
  'get_subpanel_data' => 'atc_appointments_tasks_2',
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
