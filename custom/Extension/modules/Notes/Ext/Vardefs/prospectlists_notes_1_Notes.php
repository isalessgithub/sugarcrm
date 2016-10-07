<?php
// created: 2012-10-02 14:01:40
$dictionary["Note"]["fields"]["prospectlists_notes_1"] = array (
  'name' => 'prospectlists_notes_1',
  'type' => 'link',
  'relationship' => 'prospectlists_notes_1',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTLISTS_NOTES_1_FROM_PROSPECTLISTS_TITLE',
  'id_name' => 'prospectlists_notes_1prospectlists_ida',
);
$dictionary["Note"]["fields"]["pro_list"]=array (
  'name' => 'pro_list',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTLISTS_NOTES_1_FROM_PROSPECTLISTS_TITLE',
  'save' => true,
  'id_name' => 'prospectlists_notes_1prospectlists_ida',
  'link' => 'prospectlists_notes_1',
  'table' => 'prospect_lists',
  'module' => 'ProspectLists',
  'rname' => 'name',
);

$dictionary["Note"]["fields"]["prospectlists_notes_1prospectlists_ida"]=array (
  'name' => 'prospectlists_notes_1prospectlists_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTLISTS_NOTES_1_FROM_NOTES_TITLE',
  'id_name' => 'prospectlists_notes_1prospectlists_ida',
  'link' => 'prospectlists_notes_1',
  'table' => 'prospect_lists',
  'module' => 'ProspectLists',
  'rname' => 'id',
  'reportable' => false,
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
$dictionary["Note"]["fields"]["prospectlists_notes_1_right"]=array (
  'name' => 'prospectlists_notes_1_right',
  'type' => 'link',
  'relationship' => 'prospectlists_notes_1',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTLISTS_NOTES_1_FROM_NOTES_TITLE',
  'id_name' => '_idb',
  'side' => 'right',
  'link-type' => 'many',
);

