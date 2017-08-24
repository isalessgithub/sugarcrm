<?php require_once 'custom/include/RLS/SkillsIntegration/JsonTreeLinkedin.php'; require_once 'custom/include/RLS/SkillsIntegration/SkillsUtillsLinkedin.php';
require_once 'data/BeanFactory.php'; class F54b09795 { private $Vd939e0a9 = array(); private $V84e5ac78 = array();
 private $bean; public function __construct($bean, $Vd939e0a9 = '') { try { if (!$bean) { throw new Exception('Not enough parameters');
} if ($bean instanceof SugarBean) { $this->bean = $bean; } else { throw new Exception('$bean must be instance of SugarBean class');
} $this->setParsedSkills($Vd939e0a9); } catch (Exception $Vd517b272) { echo $Vd517b272->getTraceAsString();
} } public function setParsedSkills($Vd939e0a9 = '') { if (is_string($Vd939e0a9)) { $this->Vd939e0a9= explode(',', $Vd939e0a9);
} elseif (is_array($Vd939e0a9)) { $this->Vd939e0a9= array_values($Va658279f); } else { throw new Exception('Invalid $Vd939e0a9 data format');
} } public function setParsedData($V84e5ac78 = '') { try { if (is_string($V84e5ac78)) { $this->V84e5ac78
 = html_entity_decode(json_decode($V84e5ac78)); } elseif (is_array($Vd939e0a9)) { $this->V84e5ac78= $V84e5ac78;
} else { throw new Exception('Invalid $V84e5ac78 data format'); } } catch (Exception $Vd517b272) {
 echo $Vd517b272->getTraceAsString(); } } public function getIncomingSkills($Ve637d54b = true) { $V2d800c01 = array();
foreach ($this->Vd939e0a9 as $V4ea47e6d) { $V00c1aa7e = Feaccdecd::getSkillsbyName($V4ea47e6d); if (empty($V00c1aa7e) && $Ve637d54b) {
 $V00c1aa7e[] = $this->createNewSkill($V4ea47e6d); } $V2d800c01 = array_merge($V2d800c01, $V00c1aa7e);
} return $V2d800c01; } public function createNewSkill($name) { $V713dd4d0 = new RLS_Skills(); $V713dd4d0->name = trim($name);
$id = $V713dd4d0->save(); return $V713dd4d0->id; } private function getSkillsFields() { $V33bfa40b = array();
$Vfed36e93 = array(); foreach ($this->bean->field_defs as $V972bf3f0 => $Vcd8fc259) { if (isset($Vcd8fc259['templateSkillsId'])
 && ($V3200a31f = $Vcd8fc259['templateSkillsId']) ) { $Vfed36e93[$V972bf3f0] = $V3200a31f; } if (($Vcd8fc259['type'] == 'skills') && !$this->bean->$V972bf3f0) {
 $V33bfa40b[$V972bf3f0] = $Vfed36e93[$V972bf3f0] ? Feaccdecd::getTemplateContent($Vfed36e93[$V972bf3f0])
 : ''; } elseif (($Vcd8fc259['type'] == 'skills') && $this->bean->$V972bf3f0) { $V33bfa40b[$V972bf3f0] = $this->bean->$V972bf3f0;
} } return array('fields' => $V33bfa40b, 'templates' => $Vfed36e93); } private function getDataForSet($Ve637d54b = true)
 { if (!empty($this->V84e5ac78)) { $V181746b2 = $this->V84e5ac78; } elseif (!empty($this->Vd939e0a9)) {
 $V181746b2 = array_flip($this->getIncomingSkills($Ve637d54b)); } else { return array(); } foreach ($V181746b2 as $V3c6e0b8a => $V2063c160) {
 $V181746b2[$V3c6e0b8a] = (is_array($V2063c160)) ? $V2063c160 + array('checked' => true) : array('checked' => true);
} return $V181746b2; } public function setSkills($Ve637d54b = true) { $V4e252ff7 = Feaccdecd::getCustomFields('RLS_SkillsList');
Feaccdecd::createTmp($V4e252ff7); $V8d777f38 = $this->getDataForSet($Ve637d54b); $V33bfa40b = $this->getSkillsFields();
$V2d5563ed = array(); foreach ($V33bfa40b['fields'] as $V972bf3f0 => $Vbf2a3955) { $Vc0af77cf = new F6912bbfa($Vbf2a3955);
$Vc0af77cf->setRows($V8d777f38); $V3793ea52 = $Vc0af77cf->getChecked(); $V466deec7 = $Vc0af77cf->getJson();
$this->bean->$V972bf3f0 = $V466deec7; $V3200a31f = (isset($V33bfa40b['templates'][$V972bf3f0]) && $V33bfa40b['templates'][$V972bf3f0]) ?
 $V33bfa40b['templates'][$V972bf3f0] : ''; Feaccdecd::populateTempTables($this->bean->module_name, $this->bean->id, $V972bf3f0, $V3793ea52, $V4e252ff7,
 $V3200a31f); } $this->bean->save(); Feaccdecd::updateDb(); } public function replaceTemplate($V972bf3f0, $V3200a31f, $V61eae7fd)
 { $V4e252ff7 = Feaccdecd::getCustomFields('RLS_SkillsList'); Feaccdecd::createTmp($V4e252ff7); $V466deec7 = $this->bean->$V972bf3f0;
$Vc0af77cf = new F6912bbfa($V466deec7); $V71a01ed2 = $Vc0af77cf->changeJsonTemplate($V61eae7fd); $V3793ea52 = $Vc0af77cf->getChecked();
$this->bean->$V972bf3f0 = $V71a01ed2; $this->bean->save(); Feaccdecd::populateTempTables($this->bean->module_name,
 $this->bean->id, $V972bf3f0, $V3793ea52, $V4e252ff7, $V3200a31f); Feaccdecd::updateDb(); return array('prev' => $V466deec7, 'next' => $V71a01ed2);
} } 