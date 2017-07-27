<?php
$module_name = 'ATC_Appointments';
$viewdefs[$module_name] = 
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
        'LBL_EDITVIEW_PANEL1' => 
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
            'name' => 'appointment_duration_minutes',
            'studio' => 'visible',
            'label' => 'LBL_APPOINTMENT_DURATION_MINUTES',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'accounts_atc_appointments_1_name',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'atc_appointments_contacts_name',
          ),
          1 => 
          array (
            'name' => 'title_c',
            'studio' => 'visible',
            'label' => 'LBL_TITLE',
          ),
        ),
        5 => 
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
        6 => 
        array (
          0 => 
          array (
            'name' => 'contact_email',
            'label' => 'LBL_CONTACT_EMAIL',
          ),
          1 => 
          array (
            'name' => 'contact_info_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT_INFO',
          ),
        ),
        7 => 
        array (
          0 => 'description',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'atc_isscampaigns_atc_appointments_name',
          ),
          1 => 
          array (
            'name' => 'prospectlists_atc_appointments_1_name',
          ),
        ),
        9 => 
        array (
          0 => 'assigned_user_name',
          1 => 'team_name',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'studio' => 
            array (
              'portaleditview' => false,
            ),
            'readonly' => true,
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'studio' => 
            array (
              'portaleditview' => false,
            ),
            'readonly' => true,
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'atc_clientsalesreps_atc_appointments_name',
          ),
          1 => 
          array (
            'name' => 'second_client_rep_c',
            'studio' => 'visible',
            'label' => 'LBL_SECOND_CLIENT_REP',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'feedback_status_c',
            'label' => 'LBL_FEEDBACK_STATUS',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sales_rep_feedback',
            'studio' => 'visible',
            'label' => 'LBL_SALES_REP_FEEDBACK',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'positive_appointment_c',
            'studio' => 'visible',
            'label' => 'LBL_POSITIVE_APPOINTMENT',
          ),
          1 => 
          array (
            'name' => 'second_appointment_c',
            'studio' => 'visible',
            'label' => 'LBL_SECOND_APPOINTMENT',
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
      ),
    ),
  ),
);
