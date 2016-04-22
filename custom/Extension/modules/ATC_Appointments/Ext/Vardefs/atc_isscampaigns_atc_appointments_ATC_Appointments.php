<?php
// created: 2013-08-06 15:00:00
$dictionary["ATC_Appointments"]["fields"]["atc_isscampaigns_atc_appointments"] = array (
  'name' => 'atc_isscampaigns_atc_appointments',
  'type' => 'link',
  'relationship' => 'atc_isscampaigns_atc_appointments',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'id_name' => 'atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida',
);
$dictionary["ATC_Appointments"]["fields"]["atc_isscampaigns_atc_appointments_name"] = array (
  'name' => 'atc_isscampaigns_atc_appointments_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida',
  'link' => 'atc_isscampaigns_atc_appointments',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'name',
);
$dictionary["ATC_Appointments"]["fields"]["atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida"] = array (
  'name' => 'atc_isscampaigns_atc_appointmentsatc_isscampaigns_ida',
  'type' => 'link',
  'relationship' => 'atc_isscampaigns_atc_appointments',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_FROM_ATC_APPOINTMENTS_TITLE',
);
