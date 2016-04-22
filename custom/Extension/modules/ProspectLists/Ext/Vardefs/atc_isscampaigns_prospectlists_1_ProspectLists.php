<?php
// created: 2013-08-06 15:24:25
$dictionary["ProspectList"]["fields"]["atc_isscampaigns_prospectlists_1"] = array (
  'name' => 'atc_isscampaigns_prospectlists_1',
  'type' => 'link',
  'relationship' => 'atc_isscampaigns_prospectlists_1',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_PROSPECTLISTS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'id_name' => 'atc_isscampaigns_prospectlists_1atc_isscampaigns_ida',
);
$dictionary["ProspectList"]["fields"]["atc_isscampaigns_prospectlists_1_name"] = array (
  'name' => 'atc_isscampaigns_prospectlists_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_PROSPECTLISTS_1_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'atc_isscampaigns_prospectlists_1atc_isscampaigns_ida',
  'link' => 'atc_isscampaigns_prospectlists_1',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'name',
);
$dictionary["ProspectList"]["fields"]["atc_isscampaigns_prospectlists_1atc_isscampaigns_ida"] = array (
  'name' => 'atc_isscampaigns_prospectlists_1atc_isscampaigns_ida',
  'type' => 'link',
  'relationship' => 'atc_isscampaigns_prospectlists_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_PROSPECTLISTS_1_FROM_PROSPECTLISTS_TITLE',
);
