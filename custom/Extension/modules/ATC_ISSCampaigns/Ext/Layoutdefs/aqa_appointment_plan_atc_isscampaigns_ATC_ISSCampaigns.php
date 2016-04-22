<?php
 // created: 2014-02-27 00:11:06
$layout_defs["ATC_ISSCampaigns"]["subpanel_setup"]['aqa_appointment_plan_atc_isscampaigns'] = array (
  'order' => 100,
  'module' => 'AQA_Appointment_Plan',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AQA_APPOINTMENT_PLAN_ATC_ISSCAMPAIGNS_FROM_AQA_APPOINTMENT_PLAN_TITLE',
  'get_subpanel_data' => 'aqa_appointment_plan_atc_isscampaigns',
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
