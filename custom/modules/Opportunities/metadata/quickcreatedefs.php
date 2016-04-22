<?php
$viewdefs ['Opportunities'] = 
array (
  'QuickCreate' => 
  array (
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
        'LBL_QUICKCREATE_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'DEFAULT' => 
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
          0 => 'amount',
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
            'name' => 'opportunity_type',
          ),
          1 => 'date_closed',
        ),
        4 => 
        array (
          0 => 'next_step',
          1 => 'sales_stage',
        ),
        5 => 
        array (
          0 => 'lead_source',
          1 => 'probability',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
          ),
          1 => 
          array (
            'name' => 'sale_type_c',
            'studio' => 'visible',
            'label' => 'LBL_SALE_TYPE',
          ),
        ),
      ),
      'lbl_quickcreate_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>
