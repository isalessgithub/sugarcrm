<?php
/* Created by SugarUpgrader for module ATC_ISSCampaigns */
$viewdefs['ATC_ISSCampaigns']['base']['menu']['header'] =array (
  0 => 
  array (
    'route' => '#ATC_ISSCampaigns/create',
    'label' => 'LNK_NEW_RECORD',
    'acl_action' => 'create',
    'acl_module' => 'ATC_ISSCampaigns',
    'icon' => 'fa-plus',
  ),
  1 => 
  array (
    'route' => '#ATC_ISSCampaigns',
    'label' => 'LNK_LIST',
    'acl_action' => 'list',
    'acl_module' => 'ATC_ISSCampaigns',
    'icon' => 'fa-bars',
  ),
  2 => 
  array (
    'route' => '#bwc/index.php?module=Import&action=Step1&import_module=ATC_ISSCampaigns',
    'label' => 'LNK_IMPORT_ATC_ISSCAMPAIGNS',
    'acl_action' => 'import',
    'acl_module' => 'ATC_ISSCampaigns',
    'icon' => 'fa-arrow-circle-o-up',
  ),
);
