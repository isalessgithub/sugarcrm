<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$viewdefs['base']['view']['syno-deploy-headerpane'] = array(
    'template' => 'headerpane',
    'buttons' => array(
        array(
            'name' => 'close',
            'type' => 'button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'events' => array(
                'click' => 'selection:closedrawer:fire',
            ),
            'css_class' => 'btn-invisible btn-link',
        ),
        array(
            'name' => 'link_button',
            'type' => 'button',
            'label' => 'LBL_DEPLOY_TEMPLATE_BUTTON',
            'css_class' => 'btn-primary',
            'events' => array(
                'click' => 'selection:link:fire',
            ),
        ),
        array(
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
        ),
    ),
);
