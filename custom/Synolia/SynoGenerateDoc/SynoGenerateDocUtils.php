<?php
class SynoGenerateDocUtils
{

    public function setModuleButton(&$focus, $event)
    {
        $actionInMenu = (isset($GLOBALS['sugar_config']['enable_action_menu']) ? $GLOBALS['sugar_config']['enable_action_menu'] : true);
        $controllerAction = $GLOBALS['app']->controller->action;

        if ($controllerAction == 'DetailView') {

            $controllerBean = $GLOBALS['app']->controller->bean;

            $configMods = array();
            if ( !empty($GLOBALS['sugar_config']['synogeneratedoc_installed_modules'])) {
                $configMods = $GLOBALS['sugar_config']['synogeneratedoc_installed_modules'];
            }

            if (in_array($controllerBean->module_name, $configMods)) {

                $btnCustomCodeContainer = '<div id="synogeneratedocCont" style="display:none;"></div>';
                $btnCustomCode = '<input type="button" class="button" value="' . translate('SYNO_GENERATE_DOC_BUTTON') . '" onclick="showSynoGenerateDocPanel(\\\''.$controllerBean->module_name.'\\\', \\\''.$controllerBean->id.'\\\')" />';               

                if ($actionInMenu) {
                    $buttonCode  = '<script type="text/javascript">';
                    $buttonCode .=     'SUGAR.util.doWhen("typeof($(\'#detail_header_action_menu\')) != \'undefined\'", function() {';
                    $buttonCode .=         '$.getScript("custom/Synolia/SynoGenerateDoc/js/synogeneratedoc.js").done(function(script, textStatus) {';
                    $buttonCode .=             'var button = $(\'<li>' . $btnCustomCode . $btnCustomCodeContainer . '</li>\');';
                    $buttonCode .=             '$("#detail_header_action_menu").sugarActionMenu(\'addItem\',{item:button});';
                    $buttonCode .=         '});';
                    $buttonCode .=     '});';
                    $buttonCode .= '</script>';
                } else {
                    $buttonCode  = '<script type="text/javascript">';
                    $buttonCode .=     'SUGAR.util.doWhen("typeof($(\'form#formDetailView\').next(\'.action_buttons\').find(\'.clear\')) != \'undefined\'", function() {';
                    $buttonCode .=         '$.getScript("custom/Synolia/SynoGenerateDoc/js/synogeneratedoc.js").done(function(script, textStatus) {';
                    $buttonCode .=             'var button = $(\'' . $btnCustomCode . $btnCustomCodeContainer . '\');';
                    $buttonCode .=             '$("form#formDetailView").next(".action_buttons").find(".clear").before(button);';
                    $buttonCode .=         '});';
                    $buttonCode .=     '});';
                    $buttonCode .= '</script>';
                }

//                echo $buttonCode;
            }
        }
    }

    public static function setModulesButton($modules, $banned)
    {
        global $moduleList;
        require_once 'modules/ModuleBuilder/parsers/ParserFactory.php';
                
        foreach($moduleList as $pModule)
        {
            if (in_array($pModule, $banned))
                continue;
            
            $btnCustomCodeContainer = '<div id="synogeneratedocCont" style="display:none;"></div>';
            $btnCustomCode = '<input type="button" class="button" value="{$APP.SYNO_GENERATE_DOC_BUTTON}" onclick="showSynoGenerateDocPanel(\''.$pModule.'\', \'{$fields.id.value}\')" />';
            
            
            $parser = ParserFactory::getParser("detailview", $pModule);
            
            if (in_array($pModule, $modules) && empty($parser->_viewdefs['templateMeta']['form']['buttons']['synogeneratedoc'])) {  
                $parser->_viewdefs['templateMeta']['form']['buttons']['synogeneratedoc'] = array ('customCode' => $btnCustomCode . $btnCustomCodeContainer);
                $parser->_viewdefs['templateMeta']['includes']['synogeneratedoc'] = array ('file' => 'custom/Synolia/SynoGenerateDoc/js/synogeneratedoc.js');
                $parser->handleSave(false);
            }
            elseif(!in_array($pModule, $modules) && !empty($parser->_viewdefs['templateMeta']['form']['buttons']['synogeneratedoc'])) {
                unset($parser->_viewdefs['templateMeta']['form']['buttons']['synogeneratedoccont']);
                unset($parser->_viewdefs['templateMeta']['form']['buttons']['synogeneratedoc']);
                unset($parser->_viewdefs['templateMeta']['includes']['synogeneratedoc']);
                $parser->handleSave(false);
            }
        }
    }


    public static function getLinksForModule($module)
    {
        global $app_list_strings;

        //$bannedFieldsAndLinks = self::getBannnedFieldsAndLinks();

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
            $label = empty($def['vname']) ? $name : str_replace(":" , "", translate($def['vname'], $module));
            $relatedModule = (!empty($app_list_strings['moduleListSingular']['Product'])) ?
                                $app_list_strings['moduleListSingular']['Product'] : 'Product';
            $links[$name] = array (
                "label" => "$label ($relatedModule)",
                "module" => $relatedModule
            );

            $name = 'product_bundles';
            $def = $focus->field_defs[$name];
            $focus->load_relationship($name);
            $relatedModule = (!empty($app_list_strings['moduleListSingular'][$focus->$name->getRelatedModuleName()])) ?
                                $app_list_strings['moduleListSingular'][$focus->$name->getRelatedModuleName()] : $focus->$name->getRelatedModuleName();
            $label = empty($def['vname']) ? $name : str_replace(":" , "", translate($def['vname'], $module));
            $links[$name] = array (
                "label" => "$label ($relatedModule)",
                "module" => $relatedModule
            );

        }

        foreach ($fields as $val) {
            $name = $val[0];
            $def = $focus->field_defs[$name];
            $relationship = $focus->field_defs[$name]["relationship"];
            
            if ($val[1] == "relate" && $focus->load_relationship($name)) {
                $relatedModule = (!empty($app_list_strings['moduleListSingular'][$focus->$name->getRelatedModuleName()])) ?
                                $app_list_strings['moduleListSingular'][$focus->$name->getRelatedModuleName()] : $focus->$name->getRelatedModuleName();

                if ($focus->$name->getType() == 'many' ) {
                    $label = empty($def['vname']) ? $name : str_replace(":" , "", translate($def['vname'], $module));
                    $links[$name] = array (
                        "label" => "$name : $label ($relatedModule)",
                        "module" => $focus->$name->getRelatedModuleName() ,
                        "link_name" => $name ,
                        "relatedModule" => $relatedModule,
                        "relationship" => $relationship,

                    );
                }
            }
        }

        return $links;
    }


 

   public static function cleanFields($fieldDef, $moduleName = '', $includeLinks = true, $forRelatedField = false, $returnKeys = false)
    {

        $fieldArray = array();
        foreach ($fieldDef as $fieldName => $def) {
            if (!is_array($def) || $fieldName == 'deleted' || empty($def['type'])) {
                continue;
            }
            //Check the studio property of the field def.
            if (    isset($def['studio']) 
                && (
                    self::isFalse($def['studio']) || 
                    (is_array($def['studio']) && ((isset($def['studio']['formula']) && self::isFalse($def['studio']['formula'])) || ($forRelatedField && isset($def['studio']['related']) && self::isFalse($def['studio']['related'])) )
                    )
                )
            )  {
                continue;
            }

            if ( !empty($def['type']) && $def['type'] == "link"){
                        $fieldArray[$fieldName] = array($fieldName, 'relate');
            }
           
        }

        if ($returnKeys) {
            return $fieldArray;
        }

        return array_values($fieldArray);
    }

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


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function saveRelationshipsForDocuments($focus, $event, $arguments){
                
        if (empty($_REQUEST["syno_doc_relationships_c"] )){
            $focus->syno_doc_relationships_c = encodeMultienumValue(array()) ;
        }else{
            $focus->syno_doc_relationships_c = encodeMultienumValue($focus->syno_doc_relationships_c);
        };
        

    }

}












function synoGenerateDocGetModules($focus, $field, $value, $view) {

    global $sugar_config;

    $enabledModules = array();
    
    if (!empty($sugar_config['synogeneratedoc_installed_modules'])) {
        foreach($sugar_config['synogeneratedoc_installed_modules'] as $pModule)
        {
            $enabledModules['syno_generate_doc_'.strtolower($pModule)] = translate($pModule);
        }
    }

    if (isset($_REQUEST['syno_doc_template_c'])) {
        $focus->syno_doc_template_c = $_REQUEST['syno_doc_template_c'];
    }

    if (!isset($focus->syno_doc_template_c)) {
        $focus->syno_doc_template_c = "";
    }

    if($view == 'EditView' || $view == 'MassUpdate' || $view == "QuickCreate"
    || $view == 'wirelessedit'
    ) {
        $html = '<select id="syno_doc_template_c"';
        if($view != 'MassUpdate'
            && $view != 'wirelessedit'
        )
        $html .=  'tabindex="1" name="syno_doc_template_c">';
        $html .= '<option value=""></option>';
        $html .= get_select_options_with_id($enabledModules, $focus->syno_doc_template_c);
        $html .= '</select>';
        return $html;
    }
    
    if (!empty($enabledModules[$focus->syno_doc_template_c])) {
        return $enabledModules[$focus->syno_doc_template_c]."<input type='hidden' id='syno_doc_template_c_value' name='syno_doc_template_c_value' value='".$focus->syno_doc_template_c."'";
    }
    else {
        return $focus->syno_doc_template_c;
    }
    
}