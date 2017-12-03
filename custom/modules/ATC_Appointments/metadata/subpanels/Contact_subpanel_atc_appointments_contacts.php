<?php
// created: 2017-11-10 14:47:55
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'appointment_date' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_APPOINTMENT_DATE',
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
);