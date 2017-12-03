<?php
// created: 2017-11-09 17:16:17
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'atc_isscampaigns_atc_appointments_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_FROM_ATC_ISSCAMPAIGNS_TITLE',
    'id' => 'ATC_ISSCAMPAIGNS_ATC_APPOINTMENTSATC_ISSCAMPAIGNS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ATC_ISSCampaigns',
    'target_record_key' => 'atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida',
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
  'title_c' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_TITLE',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);