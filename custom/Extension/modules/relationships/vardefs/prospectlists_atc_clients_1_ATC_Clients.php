<?php
// created: 2016-06-13 10:58:55
$dictionary["ATC_Clients"]["fields"]["prospectlists_atc_clients_1"] = array (
  'name' => 'prospectlists_atc_clients_1',
  'type' => 'link',
  'relationship' => 'prospectlists_atc_clients_1',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTLISTS_ATC_CLIENTS_1_FROM_PROSPECTLISTS_TITLE',
  'id_name' => 'prospectlists_atc_clients_1prospectlists_ida',
);
$dictionary["ATC_Clients"]["fields"]["prospectlists_atc_clients_1_name"] = array (
  'name' => 'prospectlists_atc_clients_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTLISTS_ATC_CLIENTS_1_FROM_PROSPECTLISTS_TITLE',
  'save' => true,
  'id_name' => 'prospectlists_atc_clients_1prospectlists_ida',
  'link' => 'prospectlists_atc_clients_1',
  'table' => 'prospect_lists',
  'module' => 'ProspectLists',
  'rname' => 'name',
);
$dictionary["ATC_Clients"]["fields"]["prospectlists_atc_clients_1prospectlists_ida"] = array (
  'name' => 'prospectlists_atc_clients_1prospectlists_ida',
  'type' => 'link',
  'relationship' => 'prospectlists_atc_clients_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROSPECTLISTS_ATC_CLIENTS_1_FROM_ATC_CLIENTS_TITLE',
);
