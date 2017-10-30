<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


$viewdefs['ET_DuplicateCheck']['base']['layout']['subpanels'] = array (
    'components' => array (
        array (
            'layout' => 'subpanel',
            'label' => 'LBL_FOUND_DUPLICATES_SUBPANEL_TITLE',
            'override_subpanel_list_view' => 'subpanel-for-et_duplicatecheck',
            'context' => array (
                'link' => 'et_foundduplicates',
            ),
        ),
    ),
    'type' => 'subpanels',
    'span' => 12,
);

