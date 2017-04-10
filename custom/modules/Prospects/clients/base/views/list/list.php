<?php
// created: 2017-02-28 11:25:17
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
          'link' => false,
        ),
        1 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
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
        ),
        3 => 
        array (
          'name' => 'et_telesales',
          'label' => 'LBL_ET_TELESALES_DISPOSITION',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
      ),
    ),
  ),
);