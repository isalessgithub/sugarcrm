<?php
$viewdefs['CP_Client_Users']['base']['view']['selection-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'username',
          'default' => true,
          'enabled' => true,
          'type' => 'varchar',
          'label' => 'LBL_USERNAME',
          'width' => '10%',
        ),
        1 => 
        array (
          'name' => 'date_modified',
          'enabled' => true,
          'default' => false,
          'type' => 'datetime',
          'label' => 'LBL_DATE_MODIFIED',
          'width' => '10%',
        ),
        2 => 
        array (
          'name' => 'date_entered',
          'enabled' => true,
          'default' => false,
          'type' => 'datetime',
          'label' => 'LBL_DATE_ENTERED',
          'width' => '10%',
        ),
      ),
    ),
  ),
);
