<?php
$popupMeta = array (
    'moduleMain' => 'ATC_ISSCampaigns',
    'varName' => 'ATC_ISSCampaigns',
    'orderBy' => 'atc_isscampaigns.name',
    'whereClauses' => array (
  'name' => 'atc_isscampaigns.name',
),
    'searchInputs' => array (
  0 => 'atc_isscampaigns_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'ATC_CLIENTS_ATC_ISSCAMPAIGNS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_CLIENTS_ATC_ISSCAMPAIGNS_FROM_ATC_CLIENTS_TITLE',
    'id' => 'ATC_CLIENTS_ATC_ISSCAMPAIGNSATC_CLIENTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'atc_clients_atc_isscampaigns_name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'APPOINTMENT_TARGET_MONTHLY_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_APPOINTMENT_TARGET_MONTHLY',
    'width' => '10%',
    'name' => 'appointment_target_monthly_c',
  ),
  'APPOINTMENT_TARGET_CAMPAIGN_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_APPOINTMENT_TARGET_CAMPAIGN',
    'width' => '10%',
    'name' => 'appointment_target_campaign_c',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
  ),
  'CAMPAIGN_STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CAMPAIGN_STATUS',
    'width' => '10%',
  ),
  'CAMPAIGN_START_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_CAMPAIGN_START_DATE',
    'width' => '10%',
    'name' => 'campaign_start_date_c',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'VPG_SHARED_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_VPG_SHARED',
    'width' => '10%',
    'name' => 'vpg_shared_c',
  ),
  'NATL_SHARED_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NATL_SHARED',
    'width' => '10%',
    'name' => 'natl_shared_c',
  ),
  'TARGETS_ADDED_TO_CRM_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_TARGETS_ADDED_TO_CRM',
    'width' => '10%',
    'name' => 'targets_added_to_crm_c',
  ),
  'USERS_ATC_ISSCAMPAIGNS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_USERS_ATC_ISSCAMPAIGNS_1_FROM_USERS_TITLE',
    'id' => 'USERS_ATC_ISSCAMPAIGNS_1USERS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'users_atc_isscampaigns_1_name',
  ),
  'PLANNING_CALL_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_PLANNING_CALL',
    'width' => '10%',
    'name' => 'planning_call_c',
  ),
  'FINAL_MSG_AND_EMAIL_AGREED_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_FINAL_MSG_AND_EMAIL_AGREED',
    'width' => '10%',
    'name' => 'final_msg_and_email_agreed_c',
  ),
  'CAMPAIGN_EMAIL_AND_PASSWORD_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CAMPAIGN_EMAIL_AND_PASSWORD',
    'width' => '10%',
    'name' => 'campaign_email_and_password_c',
  ),
  'WEEKLY_CALL_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_WEEKLY_CALL_DATE',
    'width' => '10%',
    'name' => 'weekly_call_date_c',
  ),
),
);
