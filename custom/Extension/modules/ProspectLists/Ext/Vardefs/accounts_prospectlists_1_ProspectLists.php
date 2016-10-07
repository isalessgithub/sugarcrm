<?php
// created: 2012-10-01 13:58:51
$dictionary["ProspectList"]["fields"]["accounts_prospectlists_1"] = array (
  'name' => 'accounts_prospectlists_1',
  'type' => 'link',
  'relationship' => 'accounts_prospectlists_1',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PROSPECTLISTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_prospectlists_1accounts_ida',
);
$dictionary["ProspectList"]["fields"]["accounts_prospectlists_1_name"]=array (
  'name' => 'accounts_prospectlists_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PROSPECTLISTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_prospectlists_1accounts_ida',
  'link' => 'accounts_prospectlists_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);

$dictionary["ProspectList"]["fields"]["accounts_prospectlists_1accounts_ida"]=array (
  'name' => 'accounts_prospectlists_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PROSPECTLISTS_1_FROM_PROSPECTLISTS_TITLE',
  'id_name' => 'accounts_prospectlists_1accounts_ida',
  'link' => 'accounts_prospectlists_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
$dictionary["ProspectList"]["fields"]["accounts_prospectlists_1_right"]=array (
  'name' => 'accounts_prospectlists_1_right',
  'type' => 'link',
  'relationship' => 'accounts_prospectlists_1',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PROSPECTLISTS_1_FROM_PROSPECTLISTS_TITLE',
  'id_name' => '_idb',
  'side' => 'right',
  'link-type' => 'many',
);

