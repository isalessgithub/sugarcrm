<?php
$viewdefs['Contacts'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'detail' => 
      array (
        'templateMeta' => 
        array (
          'maxColumns' => '1',
          'widths' => 
          array (
            0 => 
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
              0 => 'full_name',
              1 => 'title',
              2 => 'account_name',
              3 => 
              array (
                'name' => 'phone_other',
                'comment' => 'Other phone number for the contact',
                'label' => 'LBL_OTHER_PHONE',
              ),
              4 => 'phone_work',
              5 => 'phone_mobile',
              6 => 'phone_home',
              7 => 'email',
              8 => 'primary_address_street',
              9 => 'primary_address_city',
              10 => 'primary_address_state',
              11 => 'primary_address_postalcode',
              12 => 'primary_address_country',
              13 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
              ),
              14 => 
              array (
                'name' => 'created_by_name',
                'readonly' => true,
                'label' => 'LBL_CREATED',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
