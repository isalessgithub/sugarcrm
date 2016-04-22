<?php
// created: 2014-03-10 14:54:09
$dictionary["ATC_ISSCampaigns"]["fields"]["users_atc_isscampaigns_1"] = array (
  'name' => 'users_atc_isscampaigns_1',
  'type' => 'link',
  'relationship' => 'users_atc_isscampaigns_1',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_ATC_ISSCAMPAIGNS_1_FROM_USERS_TITLE',
  'id_name' => 'users_atc_isscampaigns_1users_ida',
);
$dictionary["ATC_ISSCampaigns"]["fields"]["users_atc_isscampaigns_1_name"] = array (
  'name' => 'users_atc_isscampaigns_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_ATC_ISSCAMPAIGNS_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_atc_isscampaigns_1users_ida',
  'link' => 'users_atc_isscampaigns_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'name',
);
$dictionary["ATC_ISSCampaigns"]["fields"]["users_atc_isscampaigns_1users_ida"] = array (
  'name' => 'users_atc_isscampaigns_1users_ida',
  'type' => 'link',
  'relationship' => 'users_atc_isscampaigns_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_USERS_ATC_ISSCAMPAIGNS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
);
