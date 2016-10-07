<?php
/* Created by SugarUpgrader for module ATC_Appointments */
$viewdefs['ATC_Appointments']['base']['menu']['header'] =array (
  0 => 
  array (
    'route' => '#ATC_Appointments/create',
    'label' => 'LNK_NEW_RECORD',
    'acl_action' => 'create',
    'acl_module' => 'ATC_Appointments',
    'icon' => 'fa-plus',
  ),
  1 => 
  array (
    'route' => '#ATC_Appointments',
    'label' => 'LNK_LIST',
    'acl_action' => 'list',
    'acl_module' => 'ATC_Appointments',
    'icon' => 'fa-bars',
  ),
  2 => 
  array (
    'route' => '#bwc/index.php?module=Import&action=Step1&import_module=ATC_Appointments',
    'label' => 'LNK_IMPORT_ATC_APPOINTMENTS',
    'acl_action' => 'import',
    'acl_module' => 'ATC_Appointments',
    'icon' => 'fa-arrow-circle-o-up',
  ),
);
