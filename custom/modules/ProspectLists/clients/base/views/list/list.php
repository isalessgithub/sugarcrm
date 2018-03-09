<?php
// created: 2018-03-09 13:26:46
$viewdefs['ProspectLists']['base']['view']['list'] = array (
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
          'label' => 'LBL_LIST_PROSPECT_LIST_NAME',
          'link' => true,
          'enabled' => true,
          'default' => true,
          'width' => '25',
        ),
        1 => 
        array (
          'name' => 'account_total_c',
          'label' => 'LBL_ACCOUNT_TOTAL',
          'enabled' => true,
          'default' => true,
          'width' => '10',
        ),
        2 => 
        array (
          'name' => 'description',
          'label' => 'LBL_LIST_DESCRIPTION',
          'enabled' => true,
          'default' => true,
          'width' => '40',
        ),
        3 => 
        array (
          'name' => 'atc_isscampaigns_prospectlists_1_name',
          'default' => true,
          'enabled' => true,
          'type' => 'relate',
          'link' => true,
          'label' => 'LBL_ATC_ISSCAMPAIGNS_PROSPECTLISTS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
          'id' => 'ATC_ISSCAMPAIGNS_PROSPECTLISTS_1ATC_ISSCAMPAIGNS_IDA',
          'width' => '10',
        ),
        4 => 
        array (
          'name' => 'date_entered',
          'type' => 'datetime',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
          'width' => '10',
        ),
        5 => 
        array (
          'name' => 'created_by_name',
          'label' => 'LBL_CREATED',
          'enabled' => true,
          'readonly' => true,
          'id' => 'CREATED_BY',
          'link' => true,
          'sortable' => false,
          'default' => true,
          'width' => '10',
        ),
        6 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'id' => 'ASSIGNED_USER_ID',
          'enabled' => true,
          'default' => true,
          'width' => '10',
        ),
        7 => 
        array (
          'name' => 'date_modified',
          'default' => false,
          'enabled' => true,
          'type' => 'datetime',
          'label' => 'LBL_DATE_MODIFIED',
          'width' => '10',
        ),
      ),
    ),
  ),
);