<?php

require_once "custom/Synolia/SynoGenerateDoc/Helper/ConfigManager.php";

/**
 * This file contains the class .
 * @package SynoGenerateDocUtils
 *
 * The class used to.
 * @package SynoGenerateDoc
 * @author  SYNOLIA
 * @copyright   SYNOLIA
 */
class SynoGenerateDocUtils
{
    /**
     * Add Javascript logic to enable SynoGenerateDoc on BWC module
     * @param SugarBeen $focus
     * @param string    $event
     *
     * @return output JS on stdout
     */
    public function setModuleButton($focus, $event)
    {
        $actionInMenu = (isset($GLOBALS['sugar_config']['enable_action_menu']) ? $GLOBALS['sugar_config']['enable_action_menu'] : true);
        $controllerAction = $GLOBALS['app']->controller->action;

        if ($controllerAction == 'DetailView') {
            $controllerBean = $GLOBALS['app']->controller->bean;

            $configMods = Synolia_SynoGenerateDoc_Helper_Helper_ConfigManager::getBddConfig('SynoGenerateDoc', "synogeneratedoc_installed_mods");
            if (empty($configMods)) {
                $configMods = array();
            }

            if (in_array($controllerBean->module_name, $configMods)) {
                $btnCustomCodeContainer = '<div id="synogeneratedocCont" style="display:none;"></div>';
                $btnCustomCode = '<input type="button" class="button" value="'.translate('SYNO_GENERATE_DOC_BUTTON').'" onclick="showSynoGenerateDocPanel(\\\''.$controllerBean->module_name.'\\\', \\\''.$controllerBean->id.'\\\')" />';

                if ($actionInMenu) {
                    $buttonCode  = '<script type="text/javascript">';
                    $buttonCode .=     'SUGAR.util.doWhen("typeof($(\'#detail_header_action_menu\')) != \'undefined\'", function () {';
                    $buttonCode .=         '$.getScript("custom/Synolia/SynoGenerateDoc/js/synogeneratedoc.js").done(function (script, textStatus) {';
                    $buttonCode .=             'var button = $(\'<li>'.$btnCustomCode.$btnCustomCodeContainer.'</li>\');';
                    $buttonCode .=             '$("#detail_header_action_menu").sugarActionMenu(\'addItem\',{item:button});';
                    $buttonCode .=         '});';
                    $buttonCode .=     '});';
                    $buttonCode .= '</script>';
                } else {
                    $buttonCode  = '<script type="text/javascript">';
                    $buttonCode .=     'SUGAR.util.doWhen("typeof($(\'form#formDetailView\').next(\'.action_buttons\').find(\'.clear\')) != \'undefined\'", function () {';
                    $buttonCode .=         '$.getScript("custom/Synolia/SynoGenerateDoc/js/synogeneratedoc.js").done(function (script, textStatus) {';
                    $buttonCode .=             'var button = $(\''.$btnCustomCode.$btnCustomCodeContainer.'\');';
                    $buttonCode .=             '$("form#formDetailView").next(".action_buttons").find(".clear").before(button);';
                    $buttonCode .=         '});';
                    $buttonCode .=     '});';
                    $buttonCode .= '</script>';
                }
		//temporarily disble for upgrade --
                //echo $buttonCode;
            }
        }
    }

    /**
     * Add/remove buttons definition in metadata for sidecar modules
     * @param array $modules list of modules where SynoGenerateDoc must be available
     * @param array $banned  list of modules where SynoGenerateDoc can not be available
     */
    public static function setModulesButton($modules, $banned)
    {
        global $moduleList;

        // Rebuild file map cache
        SugarAutoLoader::buildCache();

        require_once 'modules/ModuleBuilder/parsers/ParserFactory.php';
        require_once 'include/MetaDataManager/MetaDataManager.php';

        foreach ($moduleList as $pModule) {
            if (in_array($pModule, $banned) || isModuleBWC($pModule)) {
                continue;
            }

            $parser = ParserFactory::getParser("recordview", $pModule);

            $buttonsDefs = null;
            $buttonsAlreadyDeployed = false;
            $actiondropdownExists = false;

            // Check if the ModuleRecordView has buttons
            if (isset($parser->_viewdefs['buttons'])) {
                $buttonsDefs = $parser->_viewdefs['buttons'];
            } else {
                // Else check if BaseRecordView has buttons
                $metaDataManager = new MetaDataManager(null, array('base'), false);
                $baseViews = $metaDataManager->getSugarViews();

                if (isset($baseViews['record']) && isset($baseViews['record']['meta']) && isset($baseViews['record']['meta']['buttons'])) {
                    $buttonsDefs = $baseViews['record']['meta']['buttons'];
                }
            }

            if ($buttonsDefs !== null) {
                foreach ($buttonsDefs as $mainButtonKey => $mainButton) {
                    if (isset($mainButton['type']) && $mainButton['type'] == 'actiondropdown' && isset($mainButton['buttons'])) {
                        $actiondropdownExists = $mainButtonKey;
                        foreach ($mainButton['buttons'] as $subButtonKey => $subButton) {
                            if (isset($subButton['type']) && $subButton['type'] == 'synogeneratedocaction') {
                                $buttonsAlreadyDeployed = $subButtonKey;
                                break 2;
                            }
                        }
                    }
                }
            }

            if (in_array($pModule, $modules) && $actiondropdownExists !== false && $buttonsAlreadyDeployed === false) {
                // Enable SynoGenerateDoc on module
                $dividerDef = array(
                    'type' => 'divider',
                );
                $downloadDef = array(
                    'type' => 'synogeneratedocaction',
                    'name' => 'synogeneratedocaction-download',
                    'label' => 'SYNO_GENERATE_DOC_BUTTON',
                    'action' => 'download',
                    'acl_action' => 'view',
                );
                $emailDef = array(
                    'type' => 'synogeneratedocaction',
                    'name' => 'synogeneratedocaction-email',
                    'label' => 'SYNO_GENERATE_DOC_BUTTON_EMAIL',
                    'action' => 'email',
                    'acl_action' => 'view',
                );
                $parser->_viewdefs['buttons'] = $buttonsDefs;
                $parser->_viewdefs['buttons'][$actiondropdownExists]['buttons'][] = $dividerDef;
                $parser->_viewdefs['buttons'][$actiondropdownExists]['buttons'][] = $downloadDef;
                $parser->_viewdefs['buttons'][$actiondropdownExists]['buttons'][] = $emailDef;
                $parser->handleSave(false);
            } elseif (!in_array($pModule, $modules) && $buttonsAlreadyDeployed !== false) {
                // Disable SynoGenerateDoc on module
                unset($parser->_viewdefs['buttons'][$actiondropdownExists]['buttons'][$buttonsAlreadyDeployed-1]);
                unset($parser->_viewdefs['buttons'][$actiondropdownExists]['buttons'][$buttonsAlreadyDeployed]);
                unset($parser->_viewdefs['buttons'][$actiondropdownExists]['buttons'][$buttonsAlreadyDeployed+1]);
                $parser->handleSave(false);
            }
        }
    }

    /**
     * Get links for a module
     * @param  string $module
     * @return array  list of links
     */
    public static function getLinksForModule($module)
    {
        global $app_list_strings;

        $focus = BeanFactory::newBean($module);
        $focus->id = create_guid();

        $fields = self::cleanFields($focus->field_defs, $module);

        $links = array();

        if ($module == 'Quotes') {
            $focusBundle = BeanFactory::newBean('ProductBundles');
            $focusBundle->id = create_guid();
            $name = 'products';
            $def = $focusBundle->field_defs[$name];
            $focusBundle->load_relationship($name);
            $fieldsBundle = self::cleanFields($focusBundle->field_defs, 'Products');
            $label = empty($def['vname']) ? $name : str_replace(":", "", translate($def['vname'], $module));
            $relatedModule = (!empty($app_list_strings['moduleListSingular']['Product'])) ?
                                $app_list_strings['moduleListSingular']['Product'] : 'Product';
            $links[$name] = array(
                "label" => "$label ($relatedModule)",
                "module" => $relatedModule,
            );

            $name = 'product_bundles';
            $def = $focus->field_defs[$name];
            $focus->load_relationship($name);
            $relatedModule = (!empty($app_list_strings['moduleListSingular'][$focus->$name->getRelatedModuleName()])) ?
                                $app_list_strings['moduleListSingular'][$focus->$name->getRelatedModuleName()] : $focus->$name->getRelatedModuleName();
            $label = empty($def['vname']) ? $name : str_replace(":", "", translate($def['vname'], $module));
            $links[$name] = array(
                "label" => "$label ($relatedModule)",
                "module" => $relatedModule,
            );
        }

        foreach ($fields as $val) {
            $name = $val[0];
            $def = $focus->field_defs[$name];
            $relationship = $focus->field_defs[$name]["relationship"];

            if ($val[1] == "relate" && $focus->load_relationship($name)) {
                $relatedModule = (!empty($app_list_strings['moduleListSingular'][$focus->$name->getRelatedModuleName()])) ?
                                $app_list_strings['moduleListSingular'][$focus->$name->getRelatedModuleName()] : $focus->$name->getRelatedModuleName();

                if ( $focus->$name->getType() == 'many' || 
                    ($focus->$name->relationship_type == "many-to-many" && $focus->$name->getType() == 'one')
                    ) {
                    $label = empty($def['vname']) ? $name : str_replace(":", "", translate($def['vname'], $module));
                    $links[$name] = array(
                        "label" => "$name : $label ($relatedModule)",
                        "module" => $focus->$name->getRelatedModuleName(),
                        "link_name" => $name,
                        "relatedModule" => $relatedModule,
                        "relationship" => $relationship,

                    );
                }
            }
        }

        return $links;
    }

    /**
     * Clean a list of fileds to exclude relate fields or fields with formula
     * @param  array   $fieldDef
     * @param  string  $moduleName
     * @param  boolean $includeLinks
     * @param  boolean $forRelatedField
     * @param  boolean $returnKeys
     * @return array
     */
    public static function cleanFields($fieldDef, $moduleName = '', $includeLinks = true, $forRelatedField = false, $returnKeys = false)
    {
        $fieldArray = array();
        foreach ($fieldDef as $fieldName => $def) {
            if (!is_array($def) || $fieldName == 'deleted' || empty($def['type'])) {
                continue;
            }
            //Check the studio property of the field def.
            if (isset($def['studio'])
                && (
                    self::isFalse($def['studio']) ||
                    (is_array($def['studio']) && ((isset($def['studio']['formula']) && self::isFalse($def['studio']['formula'])) || ($forRelatedField && isset($def['studio']['related']) && self::isFalse($def['studio']['related'])))
                    )
                )
            ) {
                continue;
            }

            if (!empty($def['type']) && $def['type'] == "link") {
                $fieldArray[$fieldName] = array($fieldName, 'relate');
            }
        }

        if ($returnKeys) {
            return $fieldArray;
        }

        return array_values($fieldArray);
    }

    /**
     * Check if a value is a bool or contain the string "false"
     * @param  multi-type $v
     * @return boolean
     */
    protected static function isFalse($v)
    {
        if (is_string($v)) {
            return strToLower($v) == "false";
        }
        if (is_array($v)) {
            return false;
        }

        return $v == false;
    }

    /**
     * LogicHook which clen the value of field syno_doc_relationships_c
     * @param  Documents $focus
     * @param  string    $event
     * @param  array     $arguments
     * @return nothing
     */
    public function saveRelationshipsForDocuments($focus, $event, $arguments)
    {
        if (empty($_REQUEST["syno_doc_relationships_c"])) {
            $focus->syno_doc_relationships_c = encodeMultienumValue(array());
        } else {
            $focus->syno_doc_relationships_c = encodeMultienumValue($focus->syno_doc_relationships_c);
        }
    }
}

/**
 * Function used in field to get value
 * @param  Document $focus
 * @param  string $field
 * @param  string $value
 * @param  string $view
 * @return string HTML code
 */
function synoGenerateDocGetModules($focus, $field, $value, $view)
{
    $enabledModules = array();
    $configMods = Synolia_SynoGenerateDoc_Helper_Helper_ConfigManager::getBddConfig('SynoGenerateDoc', "synogeneratedoc_installed_mods");
    if (!empty($configMods)) {
        foreach ($configMods as $pModule) {
            $enabledModules['syno_generate_doc_'.strtolower($pModule)] = translate($pModule);
        }
    }

    if (isset($_REQUEST['syno_doc_template_c'])) {
        $focus->syno_doc_template_c = $_REQUEST['syno_doc_template_c'];
    }

    if (!isset($focus->syno_doc_template_c)) {
        $focus->syno_doc_template_c = "";
    }

    if ($view == 'EditView' || $view == 'MassUpdate' || $view == "QuickCreate"
    || $view == 'wirelessedit'
    ) {
        $html = '<select id="syno_doc_template_c"';
        if ($view != 'MassUpdate' && $view != 'wirelessedit') {
            $html .=  'tabindex="1" name="syno_doc_template_c">';
        }
        $html .= '<option value=""></option>';
        $html .= get_select_options_with_id($enabledModules, $focus->syno_doc_template_c);
        $html .= '</select>';

        return $html;
    }

    if (!empty($enabledModules[$focus->syno_doc_template_c])) {
        return $enabledModules[$focus->syno_doc_template_c]."<input type='hidden' id='syno_doc_template_c_value' name='syno_doc_template_c_value' value='".$focus->syno_doc_template_c."'";
    } else {
        return $focus->syno_doc_template_c;
    }
}
