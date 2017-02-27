<?php

$viewdefs['ET_DuplicateFinderProcess']['base']['view']['enable-automerge-action'] = array(
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
            'event' => 'button:enable_automerge:click',
            'name' => 'enable_automerge',
            'label' => 'LBL_ENABLE_AUTOMERGE_BTN',
            'css_class' => 'btn btn-primary',
            'acl_action' => 'edit',
        ),
    ),
);