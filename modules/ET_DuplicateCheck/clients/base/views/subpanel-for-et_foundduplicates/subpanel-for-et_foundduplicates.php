<?php

$viewdefs['ET_DuplicateCheck']['base']['view']['subpanel-for-et_foundduplicates'] = array (
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
                                    'label' => 'LBL_MODULE_NAME',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'eontek_module_name',
                                ),
                            2 =>
                                array (
                                    'label' => 'LBL_RECORD_ID',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'record_id',
                                ),
                            3 =>
                                array (
                                    'label' => 'LBL_CHECK_FOR_DUPLICATES',
                                    'enabled' => true,
                                    'default' => true,
                                    'name' => 'check_for_duplicates',
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