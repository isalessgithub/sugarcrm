<?php
$viewdefs['Prospects']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'title',
          'label' => 'LBL_LIST_TITLE',
          'enabled' => true,
          'default' => true,
          'width' => '20%',
          'link' => false,
        ),
        1 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
          'width' => '10%',
          'link' => false,
        ),
        2 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
          'type' => 'datetime',
          'width' => '10%',
        ),
      ),
    ),
  ),
);
