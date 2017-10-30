<?php
// created: 2016-10-24 15:02:22
$viewdefs['ET_FoundDuplicates']['base']['view']['subpanel-for-et_duplicatecheck'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'duplicate_record_id_1',
          'label' => 'LBL_DUPLICATE_RECORD_ID_1',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'duplicate_record_id_2',
          'label' => 'LBL_DUPLICATE_RECORD_ID_2',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'duplicate_finder_process_name',
          'label' => 'LBL_DUPLICATE_FINDER_PROCESS_NAME',
          'enabled' => true,
          'id' => 'DUPLICATE_FINDER_PROCESS_ID',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        4 => 
        array (
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_modified',
        ),
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'type' => 'subpanel-list',
);