<?php
// created: 2018-03-09 13:24:25
/*$dictionary['atc_isscampaigns_contacts'] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'atc_isscampaigns_contacts' => 
    array (
      'lhs_module' => 'ATC_ISSCampaigns',
      'lhs_table' => 'atc_isscampaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'atc_isscampaigns_contacts_c',
      'join_key_lhs' => 'atc_isscampaigns_contactsatc_isscampaigns_ida',
      'join_key_rhs' => 'atc_isscampaigns_contactscontacts_idb',
    ),
  ),
  'table' => 'atc_isscampaigns_contacts_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    'atc_isscampaigns_contactsatc_isscampaigns_ida' => 
    array (
      'name' => 'atc_isscampaigns_contactsatc_isscampaigns_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'atc_isscampaigns_contactscontacts_idb' => 
    array (
      'name' => 'atc_isscampaigns_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'atc_isscampaigns_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'atc_isscampaigns_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'atc_isscampaigns_contactsatc_isscampaigns_ida',
        1 => 'atc_isscampaigns_contactscontacts_idb',
      ),
    ),
  ),
);*/
