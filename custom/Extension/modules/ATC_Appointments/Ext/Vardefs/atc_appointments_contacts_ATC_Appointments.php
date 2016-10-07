<?php

$dictionary["ATC_Appointments"]["fields"]["atc_appointments_contacts"] = array (
  'name' => 'atc_appointments_contacts',
  'type' => 'link',
  'relationship' => 'atc_appointments_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_APPOINTMENTS_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'atc_appointments_contactscontacts_ida',
);
$dictionary["ATC_Appointments"]["fields"]["atc_appointments_contacts_name"] = array (
  'name' => 'atc_appointments_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_APPOINTMENTS_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'atc_appointments_contactscontacts_ida',
  'link' => 'atc_appointments_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ATC_Appointments"]["fields"]["atc_appointments_contactscontacts_ida"] = array (
  'name' => 'atc_appointments_contactscontacts_ida',
  'type' => 'id',
  'relationship' => 'atc_appointments_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ATC_APPOINTMENTS_CONTACTS_FROM_ATC_APPOINTMENTS_TITLE',
  'link' => 'atc_appointments_contacts',
  'rname' => 'id',
);
