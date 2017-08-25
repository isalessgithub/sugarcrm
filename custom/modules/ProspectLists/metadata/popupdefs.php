<?php
$popupMeta = array (
    'moduleMain' => 'ProspectList',
    'varName' => 'PROSPECTLIST',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'prospect_lists.name',
  'list_type' => 'prospect_lists.list_type',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'list_type',
),
    'create' => array (
  'formBase' => 'ProspectListFormBase.php',
  'formBaseClass' => 'ProspectListFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'ProspectListSave',
  ),
  'createButton' => 'LNK_NEW_PROSPECT_LIST',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PROSPECT_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ACCOUNT_TOTAL_C' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ACCOUNT_TOTAL',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_DESCRIPTION',
    'default' => true,
    'name' => 'description',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
