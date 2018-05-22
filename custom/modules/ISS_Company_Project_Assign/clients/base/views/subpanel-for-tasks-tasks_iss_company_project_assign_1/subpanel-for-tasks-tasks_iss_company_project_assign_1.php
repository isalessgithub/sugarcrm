<?php
// created: 2018-05-17 13:46:27
$viewdefs['ISS_Company_Project_Assign']['base']['view']['subpanel-for-tasks-tasks_iss_company_project_assign_1'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'cp_assign_status_c',
          'label' => 'LBL_CP_ASSIGN_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'users_iss_company_project_assign_1_name',
          'label' => 'LBL_USERS_ISS_COMPANY_PROJECT_ASSIGN_1_FROM_USERS_TITLE',
          'enabled' => true,
          'id' => 'USERS_ISS_COMPANY_PROJECT_ASSIGN_1USERS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'related_campaign_c',
          'label' => 'LBL_RELATED_CAMPAIGN',
          'enabled' => true,
          'id' => 'ATC_ISSCAMPAIGNS_ID_C',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'booked_appt_c',
          'label' => 'LBL_BOOKED_APPT',
          'enabled' => true,
          'id' => 'ATC_APPOINTMENTS_ID_C',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO',
          'enabled' => true,
          'id' => 'ASSIGNED_USER_ID',
          'link' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'description',
          'label' => 'LBL_DESCRIPTION',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'type' => 'subpanel-list',
);