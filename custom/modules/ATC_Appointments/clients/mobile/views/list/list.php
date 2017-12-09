<?php
$viewdefs['ATC_Appointments'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'accounts_atc_appointments_1_name',
                'label' => 'LBL_ACCOUNTS_ATC_APPOINTMENTS_1_FROM_ACCOUNTS_TITLE',
                'enabled' => true,
                'id' => 'ACCOUNTS_ATC_APPOINTMENTS_1ACCOUNTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'appointment_date',
                'label' => 'LBL_APPOINTMENT_DATE',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => false,
                'enabled' => true,
                'link' => true,
              ),
              3 => 
              array (
                'name' => 'atc_isscampaigns_atc_appointments_name',
                'label' => 'LBL_ATC_ISSCAMPAIGNS_ATC_APPOINTMENTS_FROM_ATC_ISSCAMPAIGNS_TITLE',
                'enabled' => true,
                'id' => 'ATC_ISSCAMPAIGNS_ATC_APPOINTMENTSATC_ISSCAMPAIGNS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              4 => 
              array (
                'name' => 'atc_appointments_contacts_name',
                'label' => 'LBL_ATC_APPOINTMENTS_CONTACTS_FROM_CONTACTS_TITLE',
                'enabled' => true,
                'id' => 'ATC_APPOINTMENTS_CONTACTSCONTACTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              5 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => false,
                'enabled' => true,
                'link' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
