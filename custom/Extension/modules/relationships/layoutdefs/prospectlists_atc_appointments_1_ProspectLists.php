<?php
 // created: 2013-10-18 13:10:14
$layout_defs["ProspectLists"]["subpanel_setup"]['prospectlists_atc_appointments_1'] = array (
  'order' => 100,
  'module' => 'ATC_Appointments',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PROSPECTLISTS_ATC_APPOINTMENTS_1_FROM_ATC_APPOINTMENTS_TITLE',
  'get_subpanel_data' => 'prospectlists_atc_appointments_1',
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
