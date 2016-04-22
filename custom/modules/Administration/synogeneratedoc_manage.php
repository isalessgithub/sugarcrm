<?php
/**********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version
 * 1.1.3 ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License
 * for the specific language governing rights and limitations under the
 * License.
 * All copies of the Covered Code must include on each user interface screen:
 *    (i) the "Powered by SugarCRM" logo and
 *    (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2010 SugarCRM, Inc.; All Rights Reserved.
 *
 * Portions created by SYNOLIA are Copyright (C) 2004-2010 SYNOLIA. You do not
 * have the right to remove SYNOLIA copyrights from the source code or user
 * interface.
 *
 * All Rights Reserved. For more information and to sublicense, resell,rent,
 * lease, redistribute, assign or otherwise transfer Your rights to the Software
 * contact SYNOLIA at contact@synolia.com
***********************************************************************************/
/**********************************************************************************
 * $Header:$
 * The Original Code is:    GoogleMap Integration by SYNOLIA
 *                          www.synolia.com - sugar@synolia.com
 * Contributor(s):          ______________________________________.
 * Description :            ______________________________________.
 **********************************************************************************/
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global 	$current_user, $beanList, $sugar_config, $current_language, 
		$mod_strings, $beanList, $timedate, $app_strings, $app_list_strings, $moduleList;

if (!is_admin($current_user)) sugar_die("Unauthorized access to administration.");

require_once('include/Sugar_Smarty.php');
$sugar_smarty   = new Sugar_Smarty();

$enabled = array();
$disabled = array();
$banned = array("Home", "Calendar", "Reports", "Emails", "Forecasts", "KBDocuments");

if(isset($_REQUEST['process']) && $_REQUEST['process'] == 'true') {
	require_once('modules/Configurator/Configurator.php');
    $cfg = new Configurator();
    $enabled_mods = json_decode(html_entity_decode  ($_REQUEST['enabled_modules'], ENT_QUOTES));
    $cfg->config['synogeneratedoc_installed_modules'] = array();
    $cfg->handleOverride();
    $cfg->config['synogeneratedoc_installed_modules'] = empty($enabled_mods) ? array() : array_diff($enabled_mods, $banned);
    $cfg->handleOverride();

}

//get the nb of templates available for each module
$db = $GLOBALS['db'];
$query = 'SELECT count(documents.id) as countDoc, documents_cstm.syno_doc_template_c 
			FROM documents INNER JOIN documents_cstm ON documents.id = documents_cstm.id_c  WHERE documents.deleted = 0 GROUP BY documents_cstm.syno_doc_template_c';
$res = $db->query($query);
	
$countDoc = array();
while ($row = $db->fetchByAssoc($res)) {
	$countDoc[ucfirst(str_replace('syno_generate_doc_', '', $row['syno_doc_template_c']))] = $row['countDoc'];
}

if (!empty($sugar_config['synogeneratedoc_installed_modules']))
{
	foreach( $sugar_config['synogeneratedoc_installed_modules'] as $module)
	{
		$enabled[] = array("module" => $module, 'label' => translate($module), 'tplCount' => (isset($countDoc[$module])?$countDoc[$module]:0) );
	}
}

if ( !empty($sugar_config['synogeneratedoc_installed_modules'])) {
	$configMods = $sugar_config['synogeneratedoc_installed_modules'];
}
else {
	$configMods = array();
}
	
foreach($moduleList as $module)
{
	if (!in_array($module, $banned) && !in_array($module, $configMods))
	{
		$disabled[] = array("module" => $module, 'label' => translate($module), 'tplCount' => (isset($countDoc[$module])?$countDoc[$module]:0) );
	}
}


$sugar_smarty->assign('enabled_mods', json_encode($enabled));
$sugar_smarty->assign('disabled_mods', json_encode($disabled));

$sugar_smarty->assign('configTitle', get_module_title('', $mod_strings['LBL_SYNOGENERATEDOC_TITLE'], false));
$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('APP_LIST', $app_list_strings);
$sugar_smarty->assign('CONFIG', $sugar_config);

$tpl = 'custom/modules/Administration/synogeneratedoc_manage.tpl';
$sugar_smarty->display($tpl);

?>