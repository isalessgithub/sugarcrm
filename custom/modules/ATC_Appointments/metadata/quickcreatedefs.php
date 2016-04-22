<?php
$module_name = 'ATC_Appointments';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'appointment_status',
            'studio' => 'visible',
            'label' => 'LBL_APPOINTMENT_STATUS',
          ),
          1 => 
          array (
            'name' => 'appointment_place',
            'studio' => 'visible',
            'label' => 'LBL_APPOINTMENT_PLACE',
          ),
        ),
        2 => 
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'appointment_duration_minutes',
            'studio' => 'visible',
            'label' => 'LBL_APPOINTMENT_DURATION_MINUTES',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'appointment_result_c',
            'studio' => 'visible',
            'label' => 'LBL_APPOINTMENT_RESULT',
          ),
          1 => 
          array (
            'name' => 'opportunity_amount',
            'studio' => 'visible',
            'label' => 'LBL_OPPORTUNITY_AMOUNT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'atc_isscampaigns_atc_appointments_name',
            'label' => 'LBL_ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_FROM_ATC_ISSCAMPAIGNS_TITLE',
          ),
          1 => 
          array (
            'name' => 'atc_appointments_contacts_name',
            'label' => 'LBL_ATC_APPOINTMENTS_CONTACTS_FROM_CONTACTS_TITLE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'title_c',
            'studio' => 'visible',
            'label' => 'LBL_TITLE',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'direct_c',
            'studio' => 'visible',
            'label' => 'LBL_DIRECT',
          ),
          1 => 
          array (
            'name' => 'switchboard_c',
            'studio' => 'visible',
            'label' => 'LBL_SWITCHBOARD',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'contact_info_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT_INFO',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'sales_rep_feedback',
            'studio' => 'visible',
            'label' => 'LBL_SALES_REP_FEEDBACK',
          ),
          1 => 
          array (
            'name' => 'atc_clientsalesreps_atc_appointments_name',
            'label' => 'LBL_ATC_CLIENTSALESREPS_ATC_APPOINTMENTS_FROM_ATC_CLIENTSALESREPS_TITLE',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        10 => 
        array (
          0 => 'description',
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'accounts_atc_appointments_1_name',
            'label' => 'LBL_ACCOUNTS_ATC_APPOINTMENTS_1_FROM_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'prospectlists_atc_appointments_1_name',
            'label' => 'LBL_PROSPECTLISTS_ATC_APPOINTMENTS_1_FROM_PROSPECTLISTS_TITLE',
            'displayParams' => 
            array (
              'required' => true,
            ),

          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
      ),
    ),
  ),
);
?>
