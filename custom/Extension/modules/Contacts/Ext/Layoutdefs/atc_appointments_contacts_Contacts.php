<?php
 // created: 2013-08-06 14:59:59
$layout_defs["Contacts"]["subpanel_setup"]['atc_appointments_contacts'] = array (
  'order' => 100,
  'module' => 'ATC_Appointments',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ATC_APPOINTMENTS_CONTACTS_FROM_ATC_APPOINTMENTS_TITLE',
  'get_subpanel_data' => 'atc_appointments_contacts',
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
