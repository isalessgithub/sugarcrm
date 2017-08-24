<?php
$searchdefs['ProspectLists'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'label' => 'LBL_PROSPECT_LIST_NAME',
        'default' => true,
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'label' => 'LBL_PROSPECT_LIST_NAME',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_name' => 
      array (
        'link' => true,
        'type' => 'relate',
        'label' => 'LBL_ASSIGNED_TO',
        'id' => 'ASSIGNED_USER_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_name',
      ),
      'atc_isscampaigns_prospectlists_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ATC_ISSCAMPAIGNS_PROSPECTLISTS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
        'id' => 'ATC_ISSCAMPAIGNS_PROSPECTLISTS_1ATC_ISSCAMPAIGNS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'atc_isscampaigns_prospectlists_1_name',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'readonly' => true,
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
