<?php require_once 'data/BeanFactory.php'; class Feaccdecd { public static function getSkillsbyName ($name, $V9a586f41 = false) {
 global $db; $name = $db->quote($name); $Va658279f = array(); if (!$V9a586f41) { $query = " SELECT `rls_skills`.`id` skills_id
 FROM `rls_skills` WHERE `rls_skills`.`deleted`= 0 AND(LOWER(REPLACE(`rls_skills`.`name`, ' ', '')) = 
 LOWER(REPLACE('{$name}', ' ', '')));"; $Va658279f = self::selectFromDb ($query, 'skills_id'); } else {
 $query = " SELECT `rls_skills`.`id` skills_id FROM `rls_skills` WHERE `rls_skills`.`deleted`= 0 
 AND (`rls_skills`.`name` = '{$name}');"; $Va658279f = self::selectFromDb ($query, 'skills_id'); } return $Va658279f;
} public static function getTemplateContent ($V3200a31f, $disable_row_level_security = true) { $V66f6181b = BeanFactory::getBean ('RLS_TemplateSkills', $V3200a31f, array('disable_row_level_security' => $disable_row_level_security));
$grid_tree_skill = json_decode (html_entity_decode ($V66f6181b->grid_tree_skill), true); return htmlentities (json_encode ($grid_tree_skill['data_treegrid']));
} public static function setTemplateContent ($bean) { if ($bean instanceof SugarBean) { foreach ($bean->field_defs as $V972bf3f0 => $Vcd8fc259) {
 if (($Vcd8fc259['type'] == 'skills') && !$bean->$V972bf3f0) { $bean->$V972bf3f0 = $Vcd8fc259['templateSkillsId'] ?
 self::getTemplateContent ($Vcd8fc259['templateSkillsId']) : ''; } } } return $bean; } public static function getCustomFields ($module) {
 global $db; $module = $db->quote($module); $query = " SELECT * FROM `fields_meta_data` WHERE `custom_module` = '{$module}' AND
 `deleted`='0' GROUP BY `name`"; return self::selectFromDb ($query, 'name'); } public static function selectFromDb ($query, $V06e3d36f = '') {
 global $db; $V8d777f38 = array(); $Vb4a88417 = $db->query ($query); while ($Vf1965a85 = $db->fetchByAssoc ($Vb4a88417)) {
 if (isset ($Vf1965a85['position'])) { $Vf1965a85['position'] = htmlspecialchars_decode ($Vf1965a85['position']);
} if (isset ($Vf1965a85['company'])) { $Vf1965a85['company'] = htmlspecialchars_decode ($Vf1965a85['company']);
} $V8d777f38[] = $V06e3d36f ? $Vf1965a85[$V06e3d36f] : $Vf1965a85; } return $V8d777f38; } public static function doQuery ($query) {
 global $db; return $db->query ($query); } public static function dropTempTable () { $query = 'DROP TABLE IF EXISTS `tmp_skl`';
self::doQuery ($query); } public static function createTempTable ($V6be5c837 = true) { if ($V6be5c837) {
 self::dropTempTable (); } $query = " CREATE TABLE IF NOT EXISTS `tmp_skl` ( `id` char(36) NOT NULL,
 `skills_name` varchar(250) NOT NULL, `skills_id` char(36) NOT NULL, `owner_field` varchar(250) NOT NULL,
 `owner_id` char(36) NOT NULL, `owner_module` varchar(250) NOT NULL, `template_id` char(36) NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;"; self::doQuery ($query); } public static function dropCustomTempTable () {
 $query = 'DROP TABLE IF EXISTS `tmp_skillslist_cstm`'; self::doQuery ($query); } public static function createCustomTempTable ($V6be5c837 = true) {
 if ($V6be5c837) { self::dropCustomTempTable (); } $query = " CREATE TABLE IF NOT EXISTS `tmp_skillslist_cstm` 
 AS SELECT * FROM `rls_skillslist_cstm` WHERE 1=2"; self::doQuery ($query); } public static function dropTmp () {
 self::dropTempTable (); self::dropCustomTempTable (); self::dropExistSkillsListTempTable (); } public static function createTmp ($V4e252ff7, $V6be5c837 = true) {
 self::createTempTable ($V6be5c837); if (!empty ($V4e252ff7)) { self::createCustomTempTable ($V6be5c837);
} } public static function dropExistSkillsListTempTable ($V6be5c837 = true) { $query = 'DROP TABLE IF EXISTS `tmp_skillslist_exists`';
self::doQuery ($query); } public static function createExistSkillsListTempTable ($V6be5c837 = true
 ) { if ($V6be5c837) { self::dropExistSkillsListTempTable (); } $query = " CREATE TABLE IF NOT EXISTS `tmp_skillslist_exists`
 AS SELECT `rsl`.`id` FROM `rls_skillslist` rsl JOIN `tmp_skl` ts ON `rsl`.`owner_id` = `ts`.`owner_id` 
 WHERE `rsl`.`deleted` = '0' AND `rsl`.`owner_field`=`ts`.`owner_field` GROUP BY `rsl`.`id`;"; self::doQuery ($query);
} public static function deleteFromTable ($V80071f37, $V16c229fb) { if (!$V80071f37 || !$V16c229fb) {
 return false; } $query = " DELETE FROM `{$V80071f37}` WHERE `{$V80071f37}`.`{$V16c229fb}` IN (SELECT `id` FROM `tmp_skillslist_exists` WHERE 1);";
self::doQuery ($query); } public static function insertToRelTable ($V80071f37, $V16c229fb, $V0906cfbb, $V52a43e48) {
 if (!$V80071f37 || !$V16c229fb || !$V0906cfbb || !$V52a43e48) { return false; } global $db; $V52a43e48 = $db->quote($V52a43e48); 
 $Vc048fabe = 'id'; if ($V52a43e48 == 'RLS_Skills') { $V567904ef = '1'; $V6c28ba1d = 'skills_id'; } else {
 $V567904ef = "`ts`.`owner_module` = '{$V52a43e48}'"; $V6c28ba1d = 'owner_id'; } $query = " INSERT INTO `{$V80071f37}` (
 `id`, `date_modified`, `deleted`, `{$V0906cfbb}`, `{$V16c229fb}`) SELECT UUID() id, UTC_TIMESTAMP() date_modified,
 '0' deleted, `{$V6c28ba1d}` {$V0906cfbb}, `{$Vc048fabe}` {$V16c229fb} FROM `tmp_skl` ts WHERE {$V567904ef} ;";
self::doQuery ($query); } public static function getModules () { $query = " SELECT `tmp_skl`.`owner_module` 
 FROM `tmp_skl` WHERE 1 GROUP BY `tmp_skl`.`owner_module`;"; return self::selectFromDb ($query, 'owner_module');
} public static function getRelationshipByModules ($Vae7be26c, $Vaaf2f899) { global $db, $dictionary, $beanList;
$V7ffc4d51 = new Relationship(); if ($V91fe9211 = $V7ffc4d51->retrieve_by_sides ($Vae7be26c, $Vaaf2f899, $db)) {
 return $V91fe9211; } elseif ($V91fe9211 = $V7ffc4d51->retrieve_by_sides ($Vaaf2f899, $Vae7be26c, $db)) {
 return $V91fe9211; } return false; } public static function updateReletionships () { $V0eb9b3af = self::getModules ();
$V0eb9b3af[] = 'RLS_Skills'; foreach ($V0eb9b3af as $V52a43e48) { $V7ffc4d51 = self::getRelationshipByModules ('RLS_SkillsList', $V52a43e48);
if (empty ($V7ffc4d51)) { continue; } self::deleteFromTable ($V7ffc4d51['join_table'], $V7ffc4d51['join_key_rhs']);
self::insertToRelTable ($V7ffc4d51['join_table'], $V7ffc4d51['join_key_rhs'], $V7ffc4d51['join_key_lhs'], $V52a43e48);
} } public static function updateSkillsList () { self::deleteFromTable ('rls_skillslist', 'id'); self::deleteFromTable ('rls_skillslist_cstm', 'id_c');
self::insertSkillsList (); self::insertSkillsListCustom (); } public static function getTeamSuport () {
 return class_exists ('Team'); } public static function insertSkillsList () { $Vf59d8714 = ''; $V31fd688f = '';
if (self::getTeamSuport ()) { $Vf59d8714 = '`team_id`,`team_set_id`,'; $V31fd688f = "'1','1',"; } $query = "
 INSERT INTO `rls_skillslist` ( `id` , `name` , `date_entered` , `date_modified` , `modified_user_id` ,
 `created_by` , `deleted` , {$Vf59d8714} `assigned_user_id` , `owner_id` , `owner_module` , `owner_field` ,
 `is_checked` , `node_id`, `rls_skills_id_c` ) SELECT `ts`.`id` id, `ts`.`skills_name` name, 
 UTC_TIMESTAMP() date_entered, UTC_TIMESTAMP() date_modified, '1' modified_user_id, '1' created_by, 
 '0' deleted, {$V31fd688f} '1' assigned_user_id, `ts`.`owner_id` owner_id, `ts`.`owner_module` owner_module,
 `ts`.`owner_field` owner_field, '1' is_checked, `ts`.`template_id` node_id, `ts`.`skills_id` rls_skills_id_c
 FROM `tmp_skl` ts WHERE 1 ;"; self::doQuery ($query); } public static function insertSkillsListCustom () {
 $V4e252ff7 = self::getCustomFields ('RLS_SkillsList'); if (!empty ($V4e252ff7)) { $V13adacb3 = implode ('`,`', $V4e252ff7);
$query = " INSERT INTO `rls_skillslist_cstm`( `id_c`, `{$V13adacb3}` ) SELECT `id_c`,`{$V13adacb3}`
 FROM `tmp_skillslist_cstm` tsc WHERE 1 ;"; self::doQuery ($query); } } public static function populateTempTables ($V5ad796e5, $V5e7b1936, $V307f76cf, $V9fbf7c4c, $V4e252ff7, $V3200a31f) {
 $Vdf347a37 = array(); $Vfb259ac7 = array(); foreach ($V9fbf7c4c as $V2d561880 => $V2063c160) { $V22d28568 = create_guid ();
$Vdf347a37[] = implode ("','", array( $V22d28568, $V2063c160['name'], $V2d561880, $V307f76cf, $V5e7b1936,
 $V5ad796e5, $V3200a31f, )); $Vc4459a74 = array_intersect_key ($V2063c160, array_flip ($V4e252ff7));
if (!empty ($Vc4459a74)) { $Vfb259ac7[] = implode ("','", array_merge ( array('id_c' => $V22d28568), $Vc4459a74));
} } $Vf09cc7ee = implode ("'),('", $Vdf347a37); $query = " INSERT INTO `tmp_skl` ( `id`, `skills_name`,
 `skills_id`, `owner_field`, `owner_id`, `owner_module`, `template_id`) VALUES ('{$Vf09cc7ee}');";
self::doQuery ($query); if (!empty ($Vfb259ac7)) { $Vc2b4c4e6 = implode ("'),('", $Vfb259ac7); $V13adacb3 = implode ('`,`', $V4e252ff7);
$V821448c9 = " INSERT INTO `tmp_skillslist_cstm` ( `id_c`, `{$V13adacb3}`) VALUES ('{$Vc2b4c4e6}');";
self::doQuery ($V821448c9); } } public static function getSkillsParents () { $Vc68ad910 = array();
$query = " SELECT `name` , `custom_module` FROM `fields_meta_data` WHERE `type` = 'skills' AND `deleted` = '0';";
$V33bfa40b = self::selectFromDb ($query); foreach ($V33bfa40b as $V2063c160) { $module = $V2063c160['custom_module'];
$V06e3d36f = $V2063c160['name']; $Vc68ad910[$module][] = $V06e3d36f; } return $Vc68ad910; } public static function dropSearchMap () {
 $query = 'DROP TABLE IF EXISTS `tmp_search_map`'; self::doQuery ($query); } public static function createSearchMapTable ($V6be5c837 = true) {
 if ($V6be5c837) { self::dropSearchMap (); } $query = " CREATE TABLE IF NOT EXISTS `tmp_search_map` (
 `owner_field` varchar(250) NOT NULL, `owner_module` varchar(250) NOT NULL, `owner_table` varchar(250) NOT NULL,
 `template_id` char(36) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8;"; self::doQuery ($query); }
 public static function dropTmpSyncLog () { $query = 'DROP TABLE IF EXISTS `tmp_sync_log`'; self::doQuery ($query);
} public static function createTmpSyncLogTable ($V6be5c837 = true) { if ($V6be5c837) { self::dropTmpSyncLog ();
} $query = " CREATE TABLE IF NOT EXISTS `tmp_sync_log` ( `id` char(36) NOT NULL, `action`varchar(250) NOT NULL,
 `owner_module` varchar(250) NOT NULL, `owner_id` char(36) NOT NULL, `owner_field` varchar(250) NOT NULL,
 `node_id` char(36) NOT NULL, `rls_skills_id_c` char(36) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
self::doQuery ($query); } public static function createSearchMap () { $Vc68ad910 = self::getSkillsParents ();
self::createSearchMapTable (); foreach (array_keys ($Vc68ad910) as $V52a43e48) { $bean = BeanFactory::getBean ($V52a43e48);
foreach ($Vc68ad910[$V52a43e48] as $V3c6e0b8a => $Ved2028a1) { $Vf1965a85 = array( 'owner_field' => $Ved2028a1,
 'owner_module' => $V52a43e48, 'owner_table' => $bean->table_name, 'template_id' => $bean->field_defs[$Ved2028a1]['templateSkillsId'],
 ); $Vdf347a37[] = implode ("','", $Vf1965a85); } } $Vf09cc7ee = implode ("'),('", $Vdf347a37); $query = "
 INSERT INTO `tmp_search_map` ( `owner_field`, `owner_module`, `owner_table`, `template_id`) VALUES ('{$Vf09cc7ee}');";
self::doQuery ($query); } public static function updateDb () { self::createExistSkillsListTempTable ();
self::updateSkillsList (); self::updateReletionships (); self::dropTmp (); } } 