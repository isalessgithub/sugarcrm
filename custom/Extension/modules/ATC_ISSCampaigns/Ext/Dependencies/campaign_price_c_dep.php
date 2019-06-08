<?php
$dependencies['ATC_ISSCampaigns']['campaign_price_c_dep'] = array(
    'hooks' => array('edit','create'),
    'trigger' => 'true',
    'triggerFields' => array('campaign_start_date_c'),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'SetVisibility',
            'params' => array(
                'target' => 'campaign_price_c',
                'value' => 'not(equal($campaign_start_date_c,""))',
            ),
        ),
        array(
            'name' => 'SetRequired',
            'params' => array(
                'target' => 'campaign_price_c',
                'value' => 'not(equal($campaign_start_date_c,""))',
            ),
        ),
    ),
);
