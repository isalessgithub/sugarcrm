<?php
// created: 2016-10-06 15:20:01
$viewdefs['Opportunities']['EditView'] = array (
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
    'javascript' => '{$PROBABILITY_SCRIPT}',
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
    'useTabs' => false,
    'syncDetailEditViews' => true,
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'prospect_name_c',
          'label' => 'LBL_PROSPECT_NAME',
        ),
        1 => 
        array (
          'name' => 'prospect_title_c',
          'label' => 'LBL_PROSPECT_TITLE',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'sale_type_c',
          'studio' => 'visible',
          'label' => 'LBL_SALE_TYPE',
        ),
        1 => 
        array (
          'name' => 'no_of_apts_or_days_c',
          'label' => 'LBL_NO_OF_APTS_OR_DAYS',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'amount',
        ),
        1 => 'opportunity_type',
      ),
      4 => 
      array (
        0 => 'sales_stage',
        1 => 'lead_source',
      ),
      5 => 
      array (
        0 => 'probability',
        1 => 'campaign_name',
      ),
      6 => 
      array (
        0 => 'next_step',
        1 => 
        array (
          'name' => 'date_closed',
        ),
      ),
      7 => 
      array (
        0 => 'description',
      ),
    ),
    'LBL_PANEL_ASSIGNMENT' => 
    array (
      0 => 
      array (
        0 => 'assigned_user_name',
        1 => 
        array (
          'name' => 'team_name',
        ),
      ),
    ),
  ),
);