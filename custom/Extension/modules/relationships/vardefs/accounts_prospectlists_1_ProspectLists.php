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
$dictionary["ProspectList"]["fields"]["accounts_prospectlists_1_name"] = array (
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
$dictionary["ProspectList"]["fields"]["accounts_prospectlists_1accounts_ida"] = array (
  'name' => 'accounts_prospectlists_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_prospectlists_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_PROSPECTLISTS_1_FROM_PROSPECTLISTS_TITLE',
);
