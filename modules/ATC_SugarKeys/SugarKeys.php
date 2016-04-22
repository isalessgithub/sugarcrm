<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

require_once('include/JSON.php');
require_once('modules/ATC_SugarKeys/utils.php');
include_once('modules/ATC_SugarKeys/KeyStrategy.php');

/**
 * This file is for SugarKeys License Management.
 */
class SugarKeys {

    public $hostage;
    public $sugar_template = '';
    public $module = '';
    public $settings = array();
    private $sugarsmarty;
    private $strategy = null;

    function __construct($hostage, $module) {
        global $app_strings, $current_language;
        $this->hostage = $hostage;
        $this->module = $module;
        $administration = new Administration();
        $administration->retrieveSettings();
        $this->settings = $administration->settings;
        // to retain the smarty template from key_config
        $this->sugarsmarty = $hostage; // new Sugar_Smarty();

        // loading labels
        $ATC_key_mod_strings = return_module_language($current_language, 'ATC_SugarKeys');
        $this->sugarsmarty->assign('mod', $ATC_key_mod_strings);
        $this->sugarsmarty->assign('app', $app_strings);
        //$this->choose_strategy();
    }

    function render_key_template() {
        $this->sugarsmarty->assign('licKey', '');
        $this->sugarsmarty->assign('module', $_GET['module']);
        $this->sugarsmarty->assign('action', $_GET['action']);
        // for correct redirection to detail view
        $record = '';
        if (isset($_GET['record']))
            $record = $_GET['record'];
        $this->sugarsmarty->assign('record', $record);
        //$this->sugarsmarty->assign('strategies', KeyStrategy::get_available_strategies());
        $this->sugarsmarty->display('modules/ATC_SugarKeys/SugarKeys.tpl');
    }

    function render_hostage() {
        if (isset($_REQUEST['return_action']) && !empty($_REQUEST['return_action'])
                && isset($_REQUEST['return_module']) && !empty($_REQUEST['return_module'])) {
            $sRecord = '';
            // for correct redirection to detail view
            if (isset($_REQUEST['return_record']) && !empty($_REQUEST['return_record']))
                $sRecord = '&record=' . $_REQUEST['return_record'];
            SugarApplication::redirect('index.php?module=' . $_REQUEST['return_module'] . '&action=' . $_REQUEST['return_action'] . $sRecord);
        }
        else {
            if (get_class($this->hostage) === 'XTemplate') {
                $this->hostage->parse("main");
                $this->hostage->out("main");
            } else if (get_class($this->hostage) === 'Sugar_Smarty') {
                if (empty($this->sugar_template)) {
                    SugarApplication::redirect('index.php?module=Administration');
                } else {
                    $this->hostage->display($this->sugar_template);
                }
            } else {
                SugarApplication::redirect('index.php');
            }
        }
    }

    function render() {
        $this->sugarsmarty->assign('show_mode', 'editview');
        if (!empty($_POST) && $_POST['show_mode'] == 'editview') {
            if ($this->authorize(trim($_POST['lickey']))) {
                $this->sugarsmarty->assign('show_mode', 'detailview');
                $this->sugarsmarty->assign('succImage', SugarThemeRegistry::current()->getImage('green_camp', 'align="absmiddle" alt="Success" border = "0"', 16, 16));
                $this->sugarsmarty->assign('succMsg', "Your key was successfully validated.");
                $this->sugarsmarty->assign('licKey', trim($_POST['lickey']));
                $this->render_hostage();
            } else {
                $this->sugarsmarty->assign('errImage', SugarThemeRegistry::current()->getImage('red_camp', 'align="absmiddle" alt="Error" border = "0"', 16, 16));
                $this->sugarsmarty->assign('errMsg', "Unable to Authenticate. Make sure that your key is correct and that you have the curl extension installed. ");
                $this->render_key_template();
            }
        } else {
            if (!isset($this->settings[$this->module . '_licensekey'])) {
                $this->render_key_template();
            } else {
                $this->render_hostage();
            }
        }
    }

    //Used we render a Sugar Smarty template
    function set_sugar_template($template) {
        $this->sugar_template = $template;
    }

    function authorize($key) {
        $atc = new AtcoreStrat($this->module);
        $so = new SugarOutfittersStrat($this->module);

        return ($atc->authorize($key) || $so->authorize($key));
    }

    public static function is_authorized($module=null) {
        if (empty($module))
            return false;

        $administration = new Administration();
        $administration->retrieveSettings();

        return isset($administration->settings[$module . '_licensekey']);
    }

}