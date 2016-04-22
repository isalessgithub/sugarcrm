<?php
$module_name = 'ATC_ISSCampaigns';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ATC_CLIENTS_ATC_ISSCAMPAIGNS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ATC_CLIENTS_ATC_ISSCAMPAIGNS_FROM_ATC_CLIENTS_TITLE',
    'id' => 'ATC_CLIENTS_ATC_ISSCAMPAIGNSATC_CLIENTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'CAMPAIGN_EMAIL_AND_PASSWORD_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CAMPAIGN_EMAIL_AND_PASSWORD',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'USERS_ATC_ISSCAMPAIGNS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_USERS_ATC_ISSCAMPAIGNS_1_FROM_USERS_TITLE',
    'id' => 'USERS_ATC_ISSCAMPAIGNS_1USERS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'APPOINTMENT_TARGET_MONTHLY_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_APPOINTMENT_TARGET_MONTHLY',
    'width' => '10%',
  ),
  'APPOINTMENT_TARGET_CAMPAIGN_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_APPOINTMENT_TARGET_CAMPAIGN',
    'width' => '10%',
  ),
  'INVOICE_SENT_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_INVOICE_SENT',
    'width' => '10%',
  ),
  'APPOINTMENTS_SET_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_APPOINTMENTS_SET',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
