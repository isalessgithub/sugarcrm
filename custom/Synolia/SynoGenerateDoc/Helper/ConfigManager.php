<?php

class Synolia_SynoGenerateDoc_Helper_Helper_ConfigManager
{
    /**
     * Add or update entry in $sugar_config
     *
     * @param array $parameters
     *
     * @return void
     */
    public static function addToSugarConfig($parameters)
    {
        require_once 'modules/Configurator/Configurator.php';
        $cfg                    = new Configurator();

        $sugarConfig = SugarConfig::getInstance();
        foreach ($parameters as $key => $value) {
            $cfg->allow_undefined[] = $key;

            if (isset($cfg->config[$key]) || in_array($key, $cfg->allow_undefined)) {
                if (strcmp("$value", 'true') == 0) {
                    $value = true;
                }
                if (strcmp("$value", 'false') == 0) {
                    $value = false;
                }
                $cfg->config[$key] = $value;
            } else {
                $v = $sugarConfig->get(str_replace('_', '.', $key));
                if ($v  !== null) {
                    setDeepArrayValue($cfg->config, $key, $value);
                }
            }
        }

        $cfg->handleOverride();
    }

    /**
     * Retrieve configuration in database
     *
     * @param string $category Category for the config value
     * @param string $key      Key for the config value
     * @param string $value    Value of the config param
     * @param string $platform Which platform this belongs to (API use only, If platform is empty it will not be returned in the API calls)
     *
     * @return mixed Configuration value or null
     */
    public static function getBddConfig($category, $key, $platform = 'base')
    {
        $config = null;

        // Load scripts alread deployed
        $admin = BeanFactory::getBean('Administration');
        $configForCategory = $admin->getConfigForModule($category, $platform);

        if (array_key_exists($key, $configForCategory)) {
            $config = $configForCategory[$key];
        }

        return $config;
    }

    /**
     * Add/Update a config in database
     *
     * @param string $category Category for the config value
     * @param string $key      Key for the config value
     * @param string $value    Value of the config param
     * @param string $platform Which platform this belongs to (API use only, If platform is empty it will not be returned in the API calls)
     *
     * @return int Number of records Returned
     */
    public static function setBddConfig($category, $key, $value, $platform = 'base')
    {
        $admin = BeanFactory::getBean('Administration');

        return $admin->saveSetting($category, $key, json_encode($value), $platform);
    }
}
