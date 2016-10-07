<?php
$viewdefs['AQA_Appointment_Plan']['base']['view']['selection-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'width' => '32%',
        ),
        1 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'width' => '9%',
          'id' => 'ASSIGNED_USER_ID',
        ),
        2 => 
        array (
          'name' => 'appointment_qty',
          'default' => true,
          'enabled' => true,
          'type' => 'int',
          'label' => 'LBL_APPOINTMENT_QTY',
          'width' => '10%',
        ),
        3 => 
        array (
          'name' => 'month_start_date',
          'default' => true,
          'enabled' => true,
          'type' => 'date',
          'label' => 'LBL_MONTH_START_DATE',
          'width' => '10%',
        ),
        4 => 
        array (
          'name' => 'aqa_appointment_plan_atc_isscampaigns_name',
          'default' => true,
          'enabled' => true,
          'type' => 'relate',
          'link' => true,
          'label' => 'LBL_AQA_APPOINTMENT_PLAN_ATC_ISSCAMPAIGNS_FROM_ATC_ISSCAMPAIGNS_TITLE',
          'id' => 'AQA_APPOINTMENT_PLAN_ATC_ISSCAMPAIGNSATC_ISSCAMPAIGNS_IDA',
          'width' => '10%',
        ),
        5 => 
        array (
          'name' => 'team_name',
          'label' => 'LBL_TEAM',
          'default' => false,
          'enabled' => true,
          'width' => '9%',
        ),
      ),
    ),
  ),
);
