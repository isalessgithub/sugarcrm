<?php
 // created: 2017-12-08 09:59:33
$layout_defs["ATC_Appointments"]["subpanel_setup"]['tasks_atc_appointments_1'] = array (
  'order' => 100,
  'module' => 'Tasks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TASKS_ATC_APPOINTMENTS_1_FROM_TASKS_TITLE',
  'get_subpanel_data' => 'tasks_atc_appointments_1',
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
