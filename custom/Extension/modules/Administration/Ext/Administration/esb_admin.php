<?php
 
$admin_option_defs = array();
$admin_option_defs['Administration']['esb_management']= array('Administration','LBL_ESB_MANAGEMENT_TITLE','LBL_ESB_MANAGEMENT','./index.php?entryPoint=esb_management');
 
$admin_group_header[]=array(
    'LBL_ADMINPANELESB_TITLE',
    '',
    false,
    $admin_option_defs,
);