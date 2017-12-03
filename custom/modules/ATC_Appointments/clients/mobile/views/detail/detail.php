<?php
$viewdefs['ATC_Appointments'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'detail' => 
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
            ),
          ),
          'maxColumns' => '1',
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
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_PANEL_DEFAULT',
            'columns' => '1',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 'name',
              1 => 
              array (
                'name' => 'appointment_date',
                'label' => 'LBL_APPOINTMENT_DATE',
              ),
              2 => 
              array (
                'name' => 'appointment_status',
                'studio' => 'visible',
                'label' => 'LBL_APPOINTMENT_STATUS',
              ),
              3 => 
              array (
                'name' => 'appointment_place',
                'studio' => 'visible',
                'label' => 'LBL_APPOINTMENT_PLACE',
              ),
              4 => 
              array (
                'name' => 'atc_appointments_contacts_name',
                'label' => 'LBL_ATC_APPOINTMENTS_CONTACTS_FROM_CONTACTS_TITLE',
              ),
              5 => 
              array (
                'name' => 'contact_email',
                'label' => 'LBL_CONTACT_EMAIL',
              ),
              6 => 
              array (
                'name' => 'title_c',
                'studio' => 'visible',
                'label' => 'LBL_TITLE',
              ),
              7 => 
              array (
                'name' => 'account_c',
                'label' => 'LBL_ACCOUNT',
              ),
              8 => 
              array (
                'name' => 'direct_c',
                'studio' => 'visible',
                'label' => 'LBL_DIRECT',
              ),
              9 => 
              array (
                'name' => 'switchboard_c',
                'studio' => 'visible',
                'label' => 'LBL_SWITCHBOARD',
              ),
              10 => 
              array (
                'name' => 'atc_isscampaigns_atc_appointments_name',
                'label' => 'LBL_ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_FROM_ATC_ISSCAMPAIGNS_TITLE',
              ),
              11 => 
              array (
                'name' => 'prospectlists_atc_appointments_1_name',
                'label' => 'LBL_PROSPECTLISTS_ATC_APPOINTMENTS_1_FROM_PROSPECTLISTS_TITLE',
              ),
              12 => 'assigned_user_name',
              13 => 
              array (
                'name' => 'created_by_name',
                'readonly' => true,
                'label' => 'LBL_CREATED',
              ),
              14 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
              ),
              15 => 
              array (
                'name' => 'atc_clientsalesreps_atc_appointments_name',
                'label' => 'LBL_ATC_CLIENTSALESREPS_ATC_APPOINTMENTS_FROM_ATC_CLIENTSALESREPS_TITLE',
              ),
              16 => 
              array (
                'name' => 'clientrep_email1_c',
                'label' => 'LBL_CLIENTREP_EMAIL1',
              ),
              17 => 
              array (
                'name' => 'appointment_feedback',
                'studio' => 'visible',
                'label' => 'LBL_APPOINTMENT_FEEDBACK',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
