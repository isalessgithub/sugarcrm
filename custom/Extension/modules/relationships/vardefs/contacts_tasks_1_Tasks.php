<?php
// created: 2017-12-31 14:23:21
$dictionary["Task"]["fields"]["contacts_tasks_1"] = array (
  'name' => 'contacts_tasks_1',
  'type' => 'link',
  'relationship' => 'contacts_tasks_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_TASKS_1_FROM_TASKS_TITLE',
  'id_name' => 'contacts_tasks_1contacts_ida',
  'link-type' => 'one',
);
$dictionary["Task"]["fields"]["contacts_tasks_1_name"] = array (
  'name' => 'contacts_tasks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_TASKS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_tasks_1contacts_ida',
  'link' => 'contacts_tasks_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Task"]["fields"]["contacts_tasks_1contacts_ida"] = array (
  'name' => 'contacts_tasks_1contacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_TASKS_1_FROM_TASKS_TITLE_ID',
  'id_name' => 'contacts_tasks_1contacts_ida',
  'link' => 'contacts_tasks_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
