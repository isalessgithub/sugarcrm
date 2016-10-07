<?php
/* Created by SugarUpgrader for module ATC_ClientSalesReps */
$viewdefs['ATC_ClientSalesReps']['base']['menu']['header'] =array (
  0 => 
  array (
    'route' => '#ATC_ClientSalesReps/create',
    'label' => 'LNK_NEW_RECORD',
    'acl_action' => 'create',
    'acl_module' => 'ATC_ClientSalesReps',
    'icon' => 'fa-plus',
  ),
  1 => 
  array (
    'route' => '#ATC_ClientSalesReps/vcard-import',
    'label' => 'LNK_IMPORT_VCARD',
    'acl_action' => 'create',
    'acl_module' => 'ATC_ClientSalesReps',
    'icon' => 'fa-plus',
  ),
  2 => 
  array (
    'route' => '#ATC_ClientSalesReps',
    'label' => 'LNK_LIST',
    'acl_action' => 'list',
    'acl_module' => 'ATC_ClientSalesReps',
    'icon' => 'fa-bars',
  ),
  3 => 
  array (
    'route' => '#bwc/index.php?module=Import&action=Step1&import_module=ATC_ClientSalesReps',
    'label' => 'LNK_IMPORT_ATC_CLIENTSALESREPS',
    'acl_action' => 'import',
    'acl_module' => 'ATC_ClientSalesReps',
    'icon' => 'fa-arrow-circle-o-up',
  ),
);
