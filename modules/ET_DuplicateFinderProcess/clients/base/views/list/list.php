<?php
$module_name = 'ET_DuplicateFinderProcess';
$viewdefs[$module_name] =
    array(
        'base' =>
            array(
                'view' =>
                    array(
                        'list' =>
                            array(
                                'panels' =>
                                    array(
                                        0 =>
                                            array(
                                                'label' => 'LBL_PANEL_1',
                                                'fields' =>
                                                    array(
                                                        0 =>
                                                            array(
                                                                'name' => 'name',
                                                                'label' => 'LBL_NAME',
                                                                'default' => true,
                                                                'enabled' => true,
                                                                'link' => true,
                                                            ),
                                                        1 =>
                                                            array(
                                                                'name' => 'eontek_module_name',
                                                                'label' => 'LBL_EONTEK_MODULE_NAME',
                                                                'enabled' => true,
                                                                'default' => true,
                                                                'readonly' => true,
                                                            ),
                                                        2 =>
                                                            array(
                                                                'name' => 'active',
                                                                'label' => 'LBL_ACTIVE',
                                                                'enabled' => true,
                                                                'readonly' => true,
                                                                'default' => true,
                                                            ),
                                                        3 =>
                                                            array(
                                                                'name' => 'automerge',
                                                                'label' => 'LBL_AUTOMERGE',
                                                                'enabled' => true,
                                                                'readonly' => true,
                                                                'default' => true,
                                                            ),
                                                        4 =>
                                                            array(
                                                                'name' => 'date_entered',
                                                                'enabled' => true,
                                                                'default' => true,
                                                            ),
                                                        5 =>
                                                            array(
                                                                'name' => 'date_modified',
                                                                'enabled' => true,
                                                                'default' => true,
                                                            ),
                                                        6 =>
                                                            array(
                                                                'name' => 'assigned_user_name',
                                                                'label' => 'LBL_ASSIGNED_TO_NAME',
                                                                'default' => false,
                                                                'enabled' => true,
                                                                'link' => true,
                                                            ),
                                                        7 =>
                                                            array(
                                                                'name' => 'team_name',
                                                                'label' => 'LBL_TEAM',
                                                                'default' => false,
                                                                'enabled' => true,
                                                            ),
                                                    ),
                                            ),
                                    ),
                                'orderBy' =>
                                    array(
                                        'field' => 'date_modified',
                                        'direction' => 'desc',
                                    ),
                            ),
                    ),
            ),
    );
