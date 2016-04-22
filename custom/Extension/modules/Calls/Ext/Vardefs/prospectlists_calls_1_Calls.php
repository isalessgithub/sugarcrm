<?php
// created: 2012-10-01 14:02:34
$dictionary["Call"]["fields"]["prospectlists_calls_1"] = array (
  'name' => 'prospectlists_calls_1',
  'type' => 'link',
  'relationship' => 'prospectlists_calls_1',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTLISTS_CALLS_1_FROM_PROSPECTLISTS_TITLE',
  'id_name' => 'prospectlists_calls_1prospectlists_ida',
);
$dictionary["Call"]["fields"]["pro_list"] = array (
  'name' => 'pro_list',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTLISTS_CALLS_1_FROM_PROSPECTLISTS_TITLE',
  'save' => true,
  'id_name' => 'prospectlists_calls_1prospectlists_ida',
  'link' => 'prospectlists_calls_1',
  'table' => 'prospect_lists',
  'module' => 'ProspectLists',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["prospectlists_calls_1prospectlists_ida"] = array (
  'name' => 'prospectlists_calls_1prospectlists_ida',
  'type' => 'link',
  'relationship' => 'prospectlists_calls_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROSPECTLISTS_CALLS_1_FROM_CALLS_TITLE',
);
