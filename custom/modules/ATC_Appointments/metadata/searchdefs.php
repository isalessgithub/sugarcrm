<?php
$module_name = 'ATC_Appointments';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
      2 => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'atc_isscampaigns_atc_appointments_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_FROM_ATC_ISSCAMPAIGNS_TITLE',
        'id' => 'ATC_ISSCAMPAIGNS_ATC_APPOINTMENTSATC_ISSCAMPAIGNS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'atc_isscampaigns_atc_appointments_name',
      ),
      'accounts_atc_appointments_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_ATC_APPOINTMENTS_1_FROM_ACCOUNTS_TITLE',
        'id' => 'ACCOUNTS_ATC_APPOINTMENTS_1ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_atc_appointments_1_name',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'appointment_status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_APPOINTMENT_STATUS',
        'width' => '10%',
        'name' => 'appointment_status',
      ),
      'one_appointment_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_ONE_APPOINTMENT',
        'width' => '10%',
        'name' => 'one_appointment_c',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'width' => '10%',
        'default' => true,
      ),
      'appointment_date' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_APPOINTMENT_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'appointment_date',
      ),
      'prospectlists_atc_appointments_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_PROSPECTLISTS_ATC_APPOINTMENTS_1_FROM_PROSPECTLISTS_TITLE',
        'id' => 'PROSPECTLISTS_ATC_APPOINTMENTS_1PROSPECTLISTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'prospectlists_atc_appointments_1_name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
