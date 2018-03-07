<?php
$listViewDefs['ProspectLists'] = 
array (
  'name' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_PROSPECT_LIST_NAME',
    'link' => true,
    'default' => true,
  ),
  'account_total_c' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ACCOUNT_TOTAL',
    'width' => '10%',
    'default' => true,
  ),
  'description' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_DESCRIPTION',
    'default' => true,
  ),
  'atc_isscampaigns_prospectlists_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_ISSCAMPAIGNS_PROSPECTLISTS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
    'id' => 'ATC_ISSCAMPAIGNS_PROSPECTLISTS_1ATC_ISSCAMPAIGNS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'readonly' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
);
