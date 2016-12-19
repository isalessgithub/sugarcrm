<?php
$module_name = 'SYNO_DashboardTemplateFilters';
$viewdefs[$module_name] =
array(
  'base' => array(
    'view' => array(
      'list' => array(
        'panels' => array(
          0 => array(
            'label' => 'LBL_PANEL_1',
            'fields' => array(
              0 => array(
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              1 => array(
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => 9,
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              2 => array(
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
              ),
            ),
          ),
        ),
        'orderBy' => array(
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
