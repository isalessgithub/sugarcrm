<?php

require_once('include/JSON.php');
require_once('modules/ATC_SugarKeys/utils.php');

class AtcoreStrat extends KeyStrategy
{

    private $url ="http://www.atcoresystems.com/capi/capi_sugarkeys/test";
    private $module = '';
    function __construct($module)
    {
        $this->module = $module;
        $this->admin = new Administration();
    }
    function is_authorized()
    {
        $this->admin->retrieveSettings();
        return isset($this->settings[$this->module.'_licensekey']);
    }

    function authorize($key)
    {
        $json = getJSONobj();
        $key = trim($key);

        $postfields = array(
                             'module' => $this->module,
                             'key' => urlencode($key)
                             );
        $oReturn = open_https_url($this->url, $postfields);
        if(is_string($oReturn)){
            $oJson = $json->decode($oReturn);
        }
        else{
            $GLOBALS['log']->fatal("Curl isn't installed. Failed to authenticate with the AtCore server");
            return false;
        }

        if(empty($oJson['success']) || $oJson['success'] == false){
            return false;
        }
        else{
            // $this->admin->saveSetting($this->module, "strategy", "Atcore Systems");
            $this->admin->saveSetting($this->module, "licensekey", $key);
            return true;
        }
    }
}
