<?php
require_once('include/JSON.php');
require_once('modules/ATC_SugarKeys/utils.php');

class SugarOutfittersStrat extends KeyStrategy
{

    private $url ="https://www.sugaroutfitters.com/api/v1";
    private $module = '';
    private $public_key = '';
	private $public_keys = array(
		"teleseller" => "d5cc6d5153e2f636e731de5e9d2a450b",
		"dedupit" => "8e4d0b4dd523bfa5d1a5afe697da08ec",
		"contactindicators" => "bb8b22ee07e23efb8c2065947b3337bc",
		"getsocialtwitterpro" => "6903799edc390949a5e349cd8bb17e2a",
		"atcoresurveys" => "15037b8c94665ed7edc70bb63e776699",
	);

    function __construct($module)
    {
        $this->module = $module;

		if (array_key_exists($this->module,$this->public_keys))
		{
			$this->public_key = $this->public_keys[$module];
		}

        $this->admin = new Administration();
    }
    function is_authorized()
    {
        $this->admin->retrieveSettings();
        return isset($this->admin->settings[$module.'_licensekey']);
    }

    function authorize($key = NULL)
    {
        if(empty($key) || empty($this->public_key))
		{
            return false;
        }

        $fields = 'public_key='.$this->public_key.'&key='.$key;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url.'/key/validate?'.$fields);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $response = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);

        if($info['http_code'] != 200){
            return false;
        }else{
            // $this->admin->saveSetting($this->module, "strategy", "SugarOutfitters");
            $this->admin->saveSetting($this->module, "licensekey", $key);
            return true;
        }
    }

}
