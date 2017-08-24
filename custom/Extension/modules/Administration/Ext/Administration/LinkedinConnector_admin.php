<?php

global $sugar_version;

$admin_option_defs=array();

if(preg_match( "/^6.*/", $sugar_version) ) {
    $admin_option_defs['Administration']['samplelicenseaddon_info']= array('helpInline','LBL_SAMPLELICENSEADDON_LICENSE_TITLE_CONNECTOR','LBL_SAMPLELICENSEADDON_CONNECTOR','./index.php?module=RLS_LinkedinParserConfig&action=license');
} else {
    $admin_option_defs['Administration']['samplelicenseaddon_info']= array('helpInline','LBL_SAMPLELICENSEADDON_LICENSE_TITLE_CONNECTOR','LBL_SAMPLELICENSEADDON_CONNECTOR','javascript:parent.SUGAR.App.router.navigate("#bwc/index.php?module=RLS_LinkedinParserConfig&action=license", {trigger: true});');
}

if(preg_match( "/^6.*/", $sugar_version) ) {
    $admin_option_defs['Administration']['linkedin_config']= array('helpInline','LBL_LINKEDIN_CONFIG','LBL_LINKEDIN_CONFIG_CONNECTOR','./index.php?module=RLS_LinkedinParserConfig&action=Social2SugarSettings');
} else {
    $admin_option_defs['Administration']['linkedin_config']= array('helpInline','LBL_LINKEDIN_CONFIG','LBL_LINKEDIN_CONFIG_CONNECTOR','javascript:parent.SUGAR.App.router.navigate("#bwc/index.php?module=RLS_LinkedinParserConfig&action=Social2SugarSettings", {trigger: true});');
}

$admin_group_header[]= array('LBL_SAMPLELICENSEADDON_CONNECTOR','',false,$admin_option_defs, '');



