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
$dictionary["Note"]["fields"]["prospectlists_notes_1_name"] = array (
  'name' => 'prospectlists_notes_1_name',
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
$dictionary["Note"]["fields"]["prospectlists_notes_1prospectlists_ida"] = array (
  'name' => 'prospectlists_notes_1prospectlists_ida',
  'type' => 'link',
  'relationship' => 'prospectlists_notes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROSPECTLISTS_NOTES_1_FROM_NOTES_TITLE',
);
