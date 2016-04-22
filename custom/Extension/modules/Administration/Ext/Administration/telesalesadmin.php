<?php
    $admin_option_defs=array();
    $admin_option_defs['Administration']['teleseller']= array(
        $image_path . 'teleseller',
        'LBL_TELESELLER_CONFIG1_TITLE',
        'LBL_TELESELLER_CONFIG1_DESC',
        './index.php?module=ATC_Teleseller&action=config',
      );
    $admin_option_defs['teleseller']['sugarkeys'] = array(
        $image_path . 'teleseller',
        //TODO: change this to a language def
        'License Key',
        'Changes your license key for this product',
        './index.php?module=ATC_Teleseller&action=license_config',
    );
    $admin_group_header[]= array('LBL_TELESELLER_CONFIG_HEADER','',false,$admin_option_defs, '');
    $config_categories[] = 'teleseller';
