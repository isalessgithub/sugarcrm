<?php
$viewdefs['ProspectLists'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
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
                'name' => 'description',
                'label' => 'LBL_LIST_DESCRIPTION',
                'enabled' => true,
                'default' => true,
                'width' => '40',
              ),
              2 => 
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
              3 => 
              array (
                'name' => 'date_entered',
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
                'width' => '10',
              ),
              4 => 
              array (
                'name' => 'date_modified',
                'default' => true,
                'enabled' => true,
                'type' => 'datetime',
                'label' => 'LBL_DATE_MODIFIED',
                'width' => '10',
              ),
              5 => 
              array (
                'name' => 'entry_count',
                'default' => true,
                'enabled' => true,
                'type' => 'int',
                'label' => 'LBL_LIST_ENTRIES',
                'width' => '10',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
