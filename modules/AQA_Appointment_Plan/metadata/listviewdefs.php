<?php
// created: 2018-03-09 13:26:31
$listViewDefs['AQA_Appointment_Plan'] = array (
  'NAME' => 
  array (
    'width' => '32',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'APPOINTMENT_QTY' => 
  array (
    'type' => 'int',
    'label' => 'LBL_APPOINTMENT_QTY',
    'width' => '10',
    'default' => true,
  ),
  'MONTH_START_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_MONTH_START_DATE',
    'width' => '10',
    'default' => true,
  ),
  'AQA_APPOINTMENT_PLAN_ATC_ISSCAMPAIGNS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AQA_APPOINTMENT_PLAN_ATC_ISSCAMPAIGNS_FROM_ATC_ISSCAMPAIGNS_TITLE',
    'id' => 'AQA_APPOINTMENT_PLAN_ATC_ISSCAMPAIGNSATC_ISSCAMPAIGNS_IDA',
    'width' => '10',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);