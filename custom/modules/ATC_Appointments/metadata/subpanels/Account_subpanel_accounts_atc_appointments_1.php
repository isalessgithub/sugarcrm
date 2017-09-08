<?php
// created: 2017-09-08 11:15:25
$subpanel_layout['list_fields'] = array (
  'title_c' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_TITLE',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'atc_appointments_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ATC_APPOINTMENTS_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'ATC_APPOINTMENTS_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'atc_appointments_contactscontacts_ida',
  ),
);