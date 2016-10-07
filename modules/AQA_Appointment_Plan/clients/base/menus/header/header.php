<?php
/* Created by SugarUpgrader for module AQA_Appointment_Plan */
$viewdefs['AQA_Appointment_Plan']['base']['menu']['header'] =array (
  0 => 
  array (
    'route' => '#AQA_Appointment_Plan/create',
    'label' => 'LNK_NEW_RECORD',
    'acl_action' => 'create',
    'acl_module' => 'AQA_Appointment_Plan',
    'icon' => 'fa-plus',
  ),
  1 => 
  array (
    'route' => '#AQA_Appointment_Plan',
    'label' => 'LNK_LIST',
    'acl_action' => 'list',
    'acl_module' => 'AQA_Appointment_Plan',
    'icon' => 'fa-bars',
  ),
  2 => 
  array (
    'route' => '#bwc/index.php?module=Import&action=Step1&import_module=AQA_Appointment_Plan',
    'label' => 'LNK_IMPORT_AQA_APPOINTMENT_PLAN',
    'acl_action' => 'import',
    'acl_module' => 'AQA_Appointment_Plan',
    'icon' => 'fa-arrow-circle-o-up',
  ),
);
