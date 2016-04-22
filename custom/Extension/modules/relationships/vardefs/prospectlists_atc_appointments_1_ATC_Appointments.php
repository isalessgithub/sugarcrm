<?php
// created: 2013-10-18 13:10:14
$dictionary["ATC_Appointments"]["fields"]["prospectlists_atc_appointments_1"] = array (
  'name' => 'prospectlists_atc_appointments_1',
  'type' => 'link',
  'relationship' => 'prospectlists_atc_appointments_1',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTLISTS_ATC_APPOINTMENTS_1_FROM_PROSPECTLISTS_TITLE',
  'id_name' => 'prospectlists_atc_appointments_1prospectlists_ida',
);
$dictionary["ATC_Appointments"]["fields"]["prospectlists_atc_appointments_1_name"] = array (
  'name' => 'prospectlists_atc_appointments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROSPECTLISTS_ATC_APPOINTMENTS_1_FROM_PROSPECTLISTS_TITLE',
  'save' => true,
  'id_name' => 'prospectlists_atc_appointments_1prospectlists_ida',
  'link' => 'prospectlists_atc_appointments_1',
  'table' => 'prospect_lists',
  'module' => 'ProspectLists',
  'rname' => 'name',
);
$dictionary["ATC_Appointments"]["fields"]["prospectlists_atc_appointments_1prospectlists_ida"] = array (
  'name' => 'prospectlists_atc_appointments_1prospectlists_ida',
  'type' => 'link',
  'relationship' => 'prospectlists_atc_appointments_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROSPECTLISTS_ATC_APPOINTMENTS_1_FROM_ATC_APPOINTMENTS_TITLE',
);
