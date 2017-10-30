<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$viewdefs['ET_FoundDuplicates']['base']['layout']['subpanels'] = array (
    'components' => array (
        array (
            'layout' => 'subpanel',
            'label' => 'LBL_DUPLICATE_CHECK',
            'override_subpanel_list_view' => 'subpanel-for-et_foundduplicates',
            'context' => array (
                'link' => 'et_duplicatecheck',
            ),
        ),
    ),
    'type' => 'subpanels',
    'span' => 12,
);