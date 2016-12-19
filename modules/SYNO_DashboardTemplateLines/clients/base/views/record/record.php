<?php
$module_name = 'SYNO_DashboardTemplateLines';
$viewdefs[$module_name] =
array(
  'base' => array(
    'view' => array(
      'record' => array(
        'panels' => array(
          0 => array(
            'name' => 'panel_header',
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => array(
              0 => array(
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 42,
                'height' => 42,
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => array(
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              3 => array(
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => array(
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => array(
              0 => array(
                'name' => 'assigned_user_name',
              ),
              1 => array(
                'name' => 'syno_dashboardtemplatelines_syno_dashboardtemplates_name',
              ),
            ),
          ),
          2 => array(
            'name' => 'panel_hidden',
            'label' => 'LBL_SHOW_MORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => array(
              0 => array(
                'name' => 'description',
                'span' => 12,
              ),
              1 => 'date_modified',
              2 => 'date_entered',
            ),
          ),
        ),
      ),
    ),
  ),
);
