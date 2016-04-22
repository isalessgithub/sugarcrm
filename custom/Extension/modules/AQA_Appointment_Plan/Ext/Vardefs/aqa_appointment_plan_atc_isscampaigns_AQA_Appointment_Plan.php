<?php
// created: 2014-02-27 00:11:06
$dictionary["AQA_Appointment_Plan"]["fields"]["aqa_appointment_plan_atc_isscampaigns"] = array (
  'name' => 'aqa_appointment_plan_atc_isscampaigns',
  'type' => 'link',
  'relationship' => 'aqa_appointment_plan_atc_isscampaigns',
  'source' => 'non-db',
  'vname' => 'LBL_AQA_APPOINTMENT_PLAN_ATC_ISSCAMPAIGNS_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'id_name' => 'aqa_appointment_plan_atc_isscampaignsatc_isscampaigns_ida',
);
$dictionary["AQA_Appointment_Plan"]["fields"]["aqa_appointment_plan_atc_isscampaigns_name"] = array (
  'name' => 'aqa_appointment_plan_atc_isscampaigns_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AQA_APPOINTMENT_PLAN_ATC_ISSCAMPAIGNS_FROM_ATC_ISSCAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'aqa_appointment_plan_atc_isscampaignsatc_isscampaigns_ida',
  'link' => 'aqa_appointment_plan_atc_isscampaigns',
  'table' => 'atc_isscampaigns',
  'module' => 'ATC_ISSCampaigns',
  'rname' => 'name',
);
$dictionary["AQA_Appointment_Plan"]["fields"]["aqa_appointment_plan_atc_isscampaignsatc_isscampaigns_ida"] = array (
  'name' => 'aqa_appointment_plan_atc_isscampaignsatc_isscampaigns_ida',
  'type' => 'link',
  'relationship' => 'aqa_appointment_plan_atc_isscampaigns',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AQA_APPOINTMENT_PLAN_ATC_ISSCAMPAIGNS_FROM_AQA_APPOINTMENT_PLAN_TITLE',
);
