<?php
$admin_option_defs = array();

$admin_option_defs['Administration']['validate_license_ET_DeDupit'] = array(
    //Icon name. Available icons are located in ./themes/default/images
    'Contracts',
    //Link name label
    'LBL_VALIDATE_LICENSE_ET_DEDUPIT_LINK_NAME',
    //Link description label
    'LBL_VALIDATE_LICENSE_ET_DEDUPIT_LINK_DESCRIPTION',
    //Link URL - For Sidecar modules
    // TODO set proper module and path
    'javascript:parent.SUGAR.App.router.navigate("#bwc/index.php?module=ET_DuplicateFinderProcess&action=license", {trigger: true});',
    //Alternatively, if you are linking to BWC modules
    //'./index.php?module=<module>&action=<action>',
);
$admin_group_header[] = array(
    //Section header label
    'LBL_DEDUPIT_LICENSE_VALIDATION_SECTION_HEADER',
    //$other_text parameter for get_form_header()
    '',
    //$show_help parameter for get_form_header()
    false,
    //Section links
    $admin_option_defs,
    //Section description label
    'LBL_DEDUPIT_LICENSE_VALIDATION_SECTION_DESCRIPTION'
);