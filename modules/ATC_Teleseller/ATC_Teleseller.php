<?php

/*
dummy class
*/
class ATC_Teleseller extends Basic
{

    var $object_name = "ATC_Teleseller";
    var $module_dir = 'ATC_Teleseller';
    var $importable = true;
    var $disable_row_level_security = true;
    function ATC_Teleseller(){
        parent::__construct();
    }
}
