<?php
// created: 2018-03-09 13:26:31
$listViewDefs['ATC_Appointments'] = array (
  'NAME' => 
  array (
    'width' => '32',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'APPOINTMENT_NUMBER' => 
  array (
    'type' => 'int',
    'label' => 'LBL_APPOINTMENT_NUMBER',
    'width' => '10',
    'default' => true,
  ),
  'APPOINTMENT_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_APPOINTMENT_DATE',
    'width' => '10',
    'default' => true,
  ),
  'APPOINTMENT_DATE_ORIGINAL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APPOINTMENT_DATE_ORIGINAL',
    'width' => '10',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);