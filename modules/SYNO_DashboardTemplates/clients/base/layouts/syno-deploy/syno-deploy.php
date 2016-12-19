<?php

$viewdefs['SYNO_DashboardTemplates']['base']['layout']['syno-deploy'] = array(
    'components' => array(
        array(
            'layout' => array(
                'components' => array(
                    array(
                        'layout' => array(
                            'components' => array(
                                array(
                                    'layout' => array(
                                        'type' => 'filterpanel',
                                        'span' => 12,
                                        'availableToggles' => array(
                                        ),
                                        'components' => array(
                                            array(
                                                'layout' => 'filter',
                                                'targetEl' => '.filter',
                                                'position' => 'prepend',
                                                /*'context' => array(
                                                    'layoutName' => 'records',
                                                ),*/
                                            ),
                                            array(
                                                'view' => 'filter-actions',
                                                "targetEl" => '.filter-options',
                                            ),
                                            array(
                                                'view' => 'filter-rows',
                                                "targetEl" => '.filter-options',
                                            ),
                                            array(
                                                'layout' => array(
                                                    'components' => array(
                                                        array(
                                                            'view' => 'massupdate',
                                                        ),
                                                        array(
                                                            'view' => array(
                                                                'name' => 'flex-list',
                                                                'action' => 'list',
                                                                'selection' => array(
                                                                    'type' => 'multi',
                                                                    'actions' => array(
                                                                        array(
                                                                            'name' => 'export_button',
                                                                            'type' => 'button',
                                                                            'label' => 'LBL_EXPORT',
                                                                            'acl_action' => 'export',
                                                                            'primary' => true,
                                                                            'events' => array(
                                                                                'click' => 'list:massexport:fire',
                                                                            ),
                                                                        ),
                                                                    ),
                                                                ),
                                                                'rowactions' => array(
                                                                    'actions' => array(
                                                                        array(
                                                                            'type' => 'rowaction',
                                                                            'css_class' => 'btn',
                                                                            'tooltip' => 'LBL_PREVIEW',
                                                                            'event' => 'list:preview:fire',
                                                                            'icon' => 'icon-eye-open fa-eye',
                                                                            'acl_action' => 'view',
                                                                        ),
                                                                    ),
                                                                ),
                                                                'last_state' => array(
                                                                    'id' => 'record-list',
                                                                ),
                                                            ),
                                                        ),
                                                        array(
                                                            'view' => 'list-bottom',
                                                        ),
                                                    ),
                                                    'name' => 'list',
                                                    'span' => 12,
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'type' => 'simple',
                            'name' => 'main-pane',
                            'span' => 8,
                        ),
                    ),
                    array(
                        'layout' => array(
                            'components' => array(
                                array(
                                    'layout' => 'sidebar',
                                ),
                            ),
                            'type' => 'simple',
                            'name' => 'side-pane',
                            'span' => 4,
                        ),
                    ),
                    array(
                        'layout' => array(
                            'components' => array(
                                array(
                                    'layout' => 'preview',
                                ),
                            ),
                            'type' => 'simple',
                            'name' => 'preview-pane',
                            'span' => 8,
                        ),
                    ),
                ),
                'type' => 'default',
                'name' => 'sidebar',
                'span' => 12,
            ),
        ),
    ),
    'type' => 'simple',
    'name' => 'base',
    'span' => 12,
);
