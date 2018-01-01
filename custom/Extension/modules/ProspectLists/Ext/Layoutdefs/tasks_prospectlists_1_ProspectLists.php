<?php
 // created: 2017-12-31 14:06:43
$layout_defs["ProspectLists"]["subpanel_setup"]['tasks_prospectlists_1'] = array (
  'order' => 100,
  'module' => 'Tasks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TASKS_PROSPECTLISTS_1_FROM_TASKS_TITLE',
  'get_subpanel_data' => 'tasks_prospectlists_1',
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
