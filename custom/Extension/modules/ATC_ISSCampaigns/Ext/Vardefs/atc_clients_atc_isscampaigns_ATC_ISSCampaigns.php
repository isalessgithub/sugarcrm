<?php
// created: 2013-08-06 14:59:59
$dictionary["ATC_ISSCampaigns"]["fields"]["atc_clients_atc_isscampaigns"] = array (
  'name' => 'atc_clients_atc_isscampaigns',
  'type' => 'link',
  'relationship' => 'atc_clients_atc_isscampaigns',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTS_ATC_ISSCAMPAIGNS_FROM_ATC_CLIENTS_TITLE',
  'id_name' => 'atc_clients_atc_isscampaignsatc_clients_ida',
);
$dictionary["ATC_ISSCampaigns"]["fields"]["atc_clients_atc_isscampaigns_name"] = array (
  'name' => 'atc_clients_atc_isscampaigns_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_CLIENTS_ATC_ISSCAMPAIGNS_FROM_ATC_CLIENTS_TITLE',
  'save' => true,
  'id_name' => 'atc_clients_atc_isscampaignsatc_clients_ida',
  'link' => 'atc_clients_atc_isscampaigns',
  'table' => 'atc_clients',
  'module' => 'ATC_Clients',
  'rname' => 'name',
);
$dictionary["ATC_ISSCampaigns"]["fields"]["atc_clients_atc_isscampaignsatc_clients_ida"] = array (
  'name' => 'atc_clients_atc_isscampaignsatc_clients_ida',
  'type' => 'link',
  'relationship' => 'atc_clients_atc_isscampaigns',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ATC_CLIENTS_ATC_ISSCAMPAIGNS_FROM_ATC_ISSCAMPAIGNS_TITLE',
);
