<?php
// created: 2018-05-17 13:46:27
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'cp_assign_status_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_CP_ASSIGN_STATUS',
    'width' => '10%',
  ),
  'users_iss_company_project_assign_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_USERS_ISS_COMPANY_PROJECT_ASSIGN_1_FROM_USERS_TITLE',
    'id' => 'USERS_ISS_COMPANY_PROJECT_ASSIGN_1USERS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'users_iss_company_project_assign_1users_ida',
  ),
  'related_campaign_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_RELATED_CAMPAIGN',
    'id' => 'ATC_ISSCAMPAIGNS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ATC_ISSCampaigns',
    'target_record_key' => 'atc_isscampaigns_id_c',
  ),
  'booked_appt_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_BOOKED_APPT',
    'id' => 'ATC_APPOINTMENTS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'ATC_Appointments',
    'target_record_key' => 'atc_appointments_id_c',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'vname' => 'LBL_ASSIGNED_TO',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'assigned_user_id',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
);