<?php

require_once 'modules/ModuleBuilder/MB/ModuleBuilder.php';
require_once 'modules/ModuleBuilder/parsers/ParserFactory.php';
require_once 'modules/ModuleBuilder/Module/StudioModuleFactory.php';
require_once 'modules/ModuleBuilder/parsers/constants.php';
require_once 'modules/ModuleBuilder/parsers/parser.dropdown.php';
require_once 'include/MetaDataManager/MetaDataManager.php';
include_once 'modules/Administration/QuickRepairAndRebuild.php';

require_once 'modules/ACLRoles/ACLRole.php';


class SYNO_DashboardHelpers
{
    /**
     * Updates the roles list for the selected languages, or if none provided all available languages
     * @param array(string) $languages 
     * @param string $listName 
     * @return void
     */
    public static function updateRolesDropdownList($languages = array(), $listName = 'syno_roles_list')
    {
        $GLOBALS['log']->info('------------  SCHEDULERS ::' . __FUNCTION__ . ' BEGIN ------------');

        global $app_list_strings, $app_strings, $mod_strings;

        //If no languages are provided, we get all curently available ones
        if (empty($languages)) {
            $languageArray = get_languages();
            $languages = array_keys($languageArray);
        }

        $role = BeanFactory::getBean("ACLRoles");
        $roles = $role->getAllRoles(false);
        $rolesData = array();
        foreach($roles as $roleInfo) {
            $rolesData[] = array(   'id' => $roleInfo->id,
                                    'name' => $roleInfo->name);
        }

        //Check if an update of the list is needed
        if (is_array($languages) && !empty($languages)) {
            $globalIsUpdateNeeded = false;
            $isUpdateNeeded = array();
            foreach ($languages as $lang) {
                $isUpdateNeeded[$lang] = false;
                $tmpAppListStrings = return_app_list_strings_language($lang, false);

                if (!empty($tmpAppListStrings) && 
                    !empty($tmpAppListStrings[$listName])) 
                {
                    foreach ($tmpAppListStrings[$listName] as $key => $value) {
                        foreach ($rolesData as $data) {
                            if (    !empty($data['id']) && 
                                    !empty($tmpAppListStrings[$listName][$data['id']]) && 
                                    $tmpAppListStrings[$listName][$data['id']] == $data['name']
                                ) {
                                continue;
                            }
                            else {
                                $globalIsUpdateNeeded = true;
                                $isUpdateNeeded[$lang] = true;
                                break;
                            }
                        }
                    }
                }
                elseif (!empty($tmpAppListStrings) && 
                        empty($tmpAppListStrings[$listName])) 
                {
                    $globalIsUpdateNeeded = true;
                    $isUpdateNeeded[$lang] = true;
                }
            }
        }

        if($globalIsUpdateNeeded === true) {
            // Prepare the list definitions
            $dropdownDef                  = array();
            $dropdownDef['skip_sync']     = true;
            $dropdownDef['use_push']      = false;
            $dropdownDef['dropdown_name'] = $listName;
            $list_value = array();
            foreach ($rolesData as $data) {
                $list_value[]  = array($data['id'], $data['name']);
            }
            $json = getJSONobj();
            $dropdownDef['list_value'] = rawurlencode(htmlentities($json->encode($list_value), ENT_QUOTES));

            //Parse all selected languages and update the list where needed
            foreach ($languages as $lang) {
                if( isset($isUpdateNeeded[$lang]) && 
                    $isUpdateNeeded[$lang] === true) {

                    $_REQUEST['dropdown_lang'] = $lang;
                    $_REQUEST['view_package'] = "studio";
                    $parser = new ParserDropDown ();
                    $parser->saveDropDown($dropdownDef);
                }
            }
            //refrech of the cache
            MetaDataManager::refreshSectionCache(MetaDataManager::MM_LABELS);
            MetaDataManager::refreshSectionCache(MetaDataManager::MM_ORDEREDLABELS);
        }

        $GLOBALS['log']->info('------------  SCHEDULERS ::' . __FUNCTION__ . ' END ------------');
    }

    /**
     * Updates the roles multi-select field of specified users, or all users if none provided
     * @param array(string) $users 
     * @return void
     */
    public static function updateUsersRolesField($users = array()) {
        $GLOBALS['log']->info('------------  SCHEDULERS ::' . __FUNCTION__ . ' BEGIN ------------');

        //if no user is specified, we update all active users
        if (empty($users)) {
            $usrData    = get_user_array(false);
            $users      = array_keys($usrData);
        }

        foreach($users as $userId) {
            $userRoles      = ACLRole::getUserRoles($userId, false);
            $userRolesTab   = array();

            foreach ($userRoles as $roleObj) {
                $userRolesTab[] = $roleObj->id;
            }

            $user = BeanFactory::getBean("Users", $userId);

            $encodedCalculatedRoles = encodeMultienumValue($userRolesTab);
            if (!empty($user->id) && 
                $user->synodt_roles_c != $encodedCalculatedRoles
                ) {

                $user->synodt_roles_c = $encodedCalculatedRoles;
                $user->update_date_modified = false;
                $user->save(false);
            }
        }

        $GLOBALS['log']->info('------------  SCHEDULERS ::' . __FUNCTION__ . ' END ------------');
    }
}