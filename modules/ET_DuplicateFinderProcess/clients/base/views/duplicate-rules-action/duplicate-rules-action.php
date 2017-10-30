<?php

$module_name = 'ET_DuplicateFinderProcess';
$viewdefs[$module_name]['base']['view']['duplicate-rules-action'] = array(
    'buttons' => array(
        array(
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn',
            'events' => array(
                'click' => 'button:cancel_button:click',
            )
        ),
        array(
            'type' => 'button',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_CONFIG_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'acl_action' => 'edit',
        ),
    ),
//    'panels' => array(
//        array(
//            'name' => 'panel_header',
//            'label' => 'LBL_RECORD_HEADER',
//            'header' => true,
//            'fields' => array(
//
//            ),
//        ),
//        array(
//            'name' => 'panel_body',
//            'label' => 'LBL_RECORD_BODY',
//            'columns' => 2,
//            'labelsOnTop' => false,
//            'placeholders' => true,
//            'fields' => array(
//                array(
//                    'name' => 'eontek_module_name',
//                    'span' => 3
//                ),
//                array(
//                    'name' => 'eontek_field',
//                    'type' => 'field-list',
//                    'required' => true,
//                    'source' => 'non-db',
//                    'options' => 'eontek_fields_list',
//                    'default_value' => '',
//                    'vname' => 'LBL_EONTEK_FIELD',
//                    'label' => 'LBL_EONTEK_FIELD',
//                    'span' => 3
//                ),
//                array(
//                    'name' => 'eontek_action',
//                    'type' => 'enum',
//                    'required' => true,
//                    'source' => 'non-db',
//                    'options' => 'comparator_list',
//                    'default_value' => 'eact',
//                    'vname' => 'LBL_EONTEK_ACTION',
//                    'label' => 'LBL_EONTEK_ACTION',
//                    'span' => 3
//                ),
//                array(
//                    'name' => 'eontek_value',
//                    'required' => true,
//                    'type' => 'varchar',
//                    'source' => 'non-db',
//                    'vname' => 'LBL_EONTEK_VALUE',
//                    'label' => 'LBL_EONTEK_VALUE',
//                    'span' => 3
//                ),
//            ),
//        ),
//    ),
);
