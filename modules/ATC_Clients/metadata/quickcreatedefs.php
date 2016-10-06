<?php
// created: 2016-10-06 15:20:10
$viewdefs['ATC_Clients']['QuickCreate'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 'SAVE',
        1 => 'CANCEL',
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
    'includes' => 
    array (
      0 => 
      array (
        'file' => 'modules/Accounts/Account.js',
      ),
    ),
    'tabDefs' => 
    array (
      'LBL_ACCOUNT_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EMAIL_ADDRESSES' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'lbl_account_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 'assigned_user_name',
      ),
      1 => 
      array (
        0 => 'website',
        1 => 
        array (
          'name' => 'team_name',
          'displayParams' => 
          array (
            'display' => true,
          ),
        ),
      ),
      2 => 
      array (
        0 => 'industry',
        1 => 
        array (
          'name' => 'phone_office',
        ),
      ),
      3 => 
      array (
        0 => 'atc_clients_type',
        1 => 'phone_fax',
      ),
      4 => 
      array (
        0 => 'annual_revenue',
        1 => '',
      ),
    ),
    'lbl_email_addresses' => 
    array (
      0 => 
      array (
        0 => 'email1',
      ),
    ),
  ),
);