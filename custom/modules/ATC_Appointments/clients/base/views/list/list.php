<?php
$viewdefs['ATC_Appointments'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'enabled' => true,
                'link' => true,
                'default' => true,
                'width' => '4',
              ),
              1 => 
              array (
                'name' => 'appointment_date',
                'label' => 'LBL_APPOINTMENT_DATE',
                'enabled' => true,
                'default' => true,
                'width' => '8',
              ),
              2 => 
              array (
                'name' => 'appointment_status',
                'label' => 'LBL_APPOINTMENT_STATUS',
                'enabled' => true,
                'width' => '8',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'appointment_place',
                'label' => 'LBL_APPOINTMENT_PLACE',
                'enabled' => true,
                'default' => true,
                'width' => '8',
              ),
              4 => 
              array (
                'name' => 'accounts_atc_appointments_1_name',
                'label' => 'LBL_ACCOUNTS_ATC_APPOINTMENTS_1_FROM_ACCOUNTS_TITLE',
                'enabled' => true,
                'id' => 'ACCOUNTS_ATC_APPOINTMENTS_1ACCOUNTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
                'width' => '8',
              ),
              5 => 
              array (
                'name' => 'atc_appointments_contacts_name',
                'label' => 'LBL_ATC_APPOINTMENTS_CONTACTS_FROM_CONTACTS_TITLE',
                'enabled' => true,
                'id' => 'ATC_APPOINTMENTS_CONTACTSCONTACTS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '8',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'direct_c',
                'label' => 'LBL_DIRECT',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
                'width' => '6',
              ),
              7 => 
              array (
                'name' => 'switchboard_c',
                'label' => 'LBL_SWITCHBOARD',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
                'width' => '6',
              ),
              8 => 
              array (
                'name' => 'atc_isscampaigns_atc_appointments_name',
                'label' => 'LBL_ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_FROM_ATC_ISSCAMPAIGNS_TITLE',
                'enabled' => true,
                'id' => 'ATC_ISSCAMPAIGNS_ATC_APPOINTMENTSATC_ISSCAMPAIGNS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10',
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'prospectlists_atc_appointments_1_name',
                'label' => 'LBL_PROSPECTLISTS_ATC_APPOINTMENTS_1_FROM_PROSPECTLISTS_TITLE',
                'enabled' => true,
                'id' => 'PROSPECTLISTS_ATC_APPOINTMENTS_1PROSPECTLISTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
                'width' => '10',
              ),
              10 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '8',
              ),
              11 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'CREATED_BY',
                'link' => true,
                'default' => true,
                'width' => '8',
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
