<?php
/* Created by SugarUpgrader for module ATC_Clients */
$viewdefs['ATC_Clients']['base']['menu']['header'] =array (
  0 => 
  array (
    'route' => '#ATC_Clients/create',
    'label' => 'LNK_NEW_RECORD',
    'acl_action' => 'create',
    'acl_module' => 'ATC_Clients',
    'icon' => 'fa-plus',
  ),
  1 => 
  array (
    'route' => '#ATC_Clients',
    'label' => 'LNK_LIST',
    'acl_action' => 'list',
    'acl_module' => 'ATC_Clients',
    'icon' => 'fa-bars',
  ),
  2 => 
  array (
    'route' => '#bwc/index.php?module=Import&action=Step1&import_module=ATC_Clients',
    'label' => 'LNK_IMPORT_ATC_CLIENTS',
    'acl_action' => 'import',
    'acl_module' => 'ATC_Clients',
    'icon' => 'fa-arrow-circle-o-up',
  ),
);
