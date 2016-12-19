<?php
$module_name = 'SYNO_DashboardTemplates';
$viewdefs[$module_name] =
array(
  'base' => array(
    'view' => array(
      'record' => array(
            'buttons' => array(
            array(
                'type' => 'button',
                'name' => 'cancel_button',
                'label' => 'LBL_CANCEL_BUTTON_LABEL',
                'css_class' => 'btn-invisible btn-link',
                'showOn' => 'edit',
            ),
            array(
                'type' => 'rowaction',
                'event' => 'button:save_button:click',
                'name' => 'save_button',
                'label' => 'LBL_SAVE_BUTTON_LABEL',
                'css_class' => 'btn btn-primary',
                'showOn' => 'edit',
                'acl_action' => 'edit',
            ),
            array(
                'type' => 'actiondropdown',
                'name' => 'main_dropdown',
                'primary' => true,
                'showOn' => 'view',
                'buttons' => array(
                    array(
                        'type' => 'rowaction',
                        'event' => 'button:edit_button:click',
                        'name' => 'edit_button',
                        'label' => 'LBL_EDIT_BUTTON_LABEL',
                        'acl_action' => 'edit',
                    ),
                    array(
                        'type' => 'divider',
                    ),
                    array(
                        'type' => 'syno-dashboard-load-data',
                        'name' => 'syno-dashboard-load-data',
                        'label' => 'LBL_LOAD_DASHBOARD_DATA',
                        'acl_module' => 'SYNO_DashboardTemplates',
                        'acl_action' => 'detail',
                    ),
                    array(
                        'type' => 'syno-dashboard-deploy',
                        'name' => 'syno-dashboard-deploy',
                        'label' => 'LBL_DEPLOY_DASHBOARD_DATA',
                        'acl_module' => 'SYNO_DashboardTemplates',
                        'acl_action' => 'detail',
                    ),
                    array(
                        'type' => 'divider',
                    ),
                    array(
                        'type' => 'rowaction',
                        'event' => 'button:delete_button:click',
                        'name' => 'delete_button',
                        'label' => 'LBL_DELETE_BUTTON_LABEL',
                        'acl_action' => 'delete',
                    ),
                ),
            ),
            array(
                'name' => 'sidebar_toggle',
                'type' => 'sidebartoggle',
            ),
        ),
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
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => array(
              0 => array(
                'name' => 'description',
              ),
              1 => array(
                'name' => 'flag_data',
                'label' => 'LBL_FLAG_DATA',
                'readonly' => true,
              ),
              3 => 'date_modified',
              4 => 'date_entered',
            ),
          ),
        ),
        'templateMeta' => array(
          'useTabs' => false,
        ),
      ),
    ),
  ),
);
