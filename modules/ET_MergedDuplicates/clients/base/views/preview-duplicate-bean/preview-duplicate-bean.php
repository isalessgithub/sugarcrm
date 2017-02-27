<?php

$viewdefs['ET_MergedDuplicates']['base']['view']['preview-duplicate-bean'] = array(
    'buttons' => array(
        array(
            'type' => 'button',
            'name' => 'close_button',
            'label' => 'LBL_CLOSE_BUTTON_LABEL',
            'css_class' => 'btn',
            'events' => array(
                'click' => 'button:close_button:click',
            )
        )
    ),
);