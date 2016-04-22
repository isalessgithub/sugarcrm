<?php
$module_name = 'ATC_Appointments';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'appointment_number',
            'label' => 'LBL_APPOINTMENT_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'appointment_date',
            'label' => 'LBL_APPOINTMENT_DATE',
          ),
          1 => 
          array (
            'name' => 'appointment_date_original',
            'label' => 'LBL_APPOINTMENT_DATE_ORIGINAL',
          ),
        ),
        2 => 
        array (
          0 => 'team_name',
          1 => 'assigned_user_name',
        ),
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'atc_clientsalesreps_atc_appointments_name',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'atc_isscampaigns_atc_appointments_name',
          ),
          1 => 
          array (
            'name' => 'atc_appointments_contacts_name',
          ),
        ),
      ),
    ),
  ),
);
?>
