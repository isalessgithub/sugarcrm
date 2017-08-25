<?php require_once 'include/utils.php'; class LinkedinParserSettingsClass { public $V10573b87 = array();
 public $Vebb3692b = array(); public $V3460fc47 = array( 'Accounts' => array( 'name', ), 'Contacts' => array(
 'last_name', 'full_name', ), 'Leads' => array( 'last_name', 'full_name', ), 'Prospects' => array(
 'last_name', 'full_name', ), 'rls_Candidates' => array( 'last_name', 'full_name', ), ); public $V9c935b2a = array();
 public $V1ebaa824 = array( 'fields' => array( 'list_order_modules_disabled', 'list_order_modules_enable',
 'leads_status_f', 'candidate_status_f', 'notes_name_mask', 'assignt_to', 'default_module_search',
 ), 'disable_fields' => array( 'list_accounts_duplicate_disabled' => 'accounts_d_d', 'list_accounts_duplicate_enable' => 'accounts_d_e',
 'list_contacts_duplicate_disabled' => 'contacts_d_d', 'list_contacts_duplicate_enable' => 'contacts_d_e',
 'list_leads_duplicate_disabled' => 'leads_d_d', 'list_leads_duplicate_enable' => 'leads_d_e', 'list_prospects_duplicate_disabled' => 'prospects_d_d',
 'list_prospects_duplicate_enable' => 'prospects_d_e', 'list_rls_candidates_duplicate_disabled' => 'rls_candidates_d_d',
 'list_rls_candidates_duplicate_enable' => 'rls_candidates_d_e', ), 'checkbox' => array( 'skills',
 'working_experience', 'parse_accounts', 'job_list', 'target_list', 'show_technical_data', 'ignore_job_list_security',
 'ignore_target_list_security', 'ignore_dublicates_team_security', ), 'multienum' => array( 'jobs_allow_statuses_list',
 ), ); public $V63fb70e2 = array(); public $candidates_exist = '0'; public function __construct($V10573b87)
 { if (!empty($V10573b87)) { $this->V10573b87= $V10573b87; $this->checkCandidates(); } } public function checkCandidates()
 { global $app_list_strings; $V9c935b2a = array( 'Contacts' => $app_list_strings['moduleList']['Contacts'],
 'Leads' => $app_list_strings['moduleList']['Leads'], 'Accounts' => $app_list_strings['moduleList']['Accounts'],
 'Prospects' => $app_list_strings['moduleList']['Prospects'], ); $this->candidates_exist = false; $this->V63fb70e2['candidates_exist'] = '0';
if (array_key_exists('rls_Candidates', $app_list_strings['moduleList']) || array_key_exists('RLS_Candidates',
 $app_list_strings['moduleList']) ) { if (array_key_exists('rls_Candidates', $app_list_strings['moduleList'])) {
 $V9c935b2a['Candidates'] = $app_list_strings['moduleList']['rls_Candidates']; } if (array_key_exists('RLS_Candidates',
 $app_list_strings['moduleList'])) { $V9c935b2a['Candidates'] = $app_list_strings['moduleList']['RLS_Candidates'];
} $this->candidates_exist = '1'; $this->V63fb70e2['candidates_exist'] = '1'; } $this->V9c935b2a= $V9c935b2a;
$this->V63fb70e2['module_labels'] = $V9c935b2a; } public function getRLSFieldslabels($Vd5566982 = 'js')
 { $Vb4a88417 = ''; $Ve0a40931 = array(); foreach ( $this->V3460fc47 as $module_name => $V087b2647
 ) { if ($module_name == 'rls_Candidates' && !$this->candidates_exist) { continue; } $module = loadBean($module_name);
$Vb4a88417 .= "fields_labels['" . $module_name . "'] = [];"; $Ve0a40931[$module_name] = array(); foreach ($V087b2647 as $V73f329f1) {
 $Vd304ba20 = $V73f329f1; if (array_key_exists($V73f329f1, $module->field_defs) && array_key_exists('vname',
 $module->field_defs[$V73f329f1]) ) { $Vd304ba20 = $module->field_defs[$V73f329f1]['vname']; $Vd304ba20 = translate($Vd304ba20, $module_name);
} if ($V73f329f1 == 'full_name') { $Vd304ba20 = 'First Name + Last Name'; } $Vb4a88417 .= "fields_labels['" . $module_name . "']['"
 . $V73f329f1 . "'] = '" . $Vd304ba20 . "';"; $Ve0a40931[$module_name][$V73f329f1] = $Vd304ba20; } }
if ($Vd5566982 == 'php') { return $Ve0a40931; } return $Vb4a88417; } public function saveLinkedinSettings()
 { if (empty($this->V10573b87) || !array_key_exists('save', $this->V10573b87) ) { return false;
} $Ve52e7ce4 = new Administration(); foreach ( $this->V1ebaa824['disable_fields'] as $V10b20283 =>
 $Vd5d92118 ) { if (array_key_exists($V10b20283, $this->V10573b87)) { $Ve52e7ce4->saveSetting('LinkedinParserConfig',
 $Vd5d92118, $this->V10573b87[$V10b20283]); } } foreach ($this->V1ebaa824['fields'] as $V73f329f1) {
 if (array_key_exists($V73f329f1, $this->V10573b87)) { $Ve52e7ce4->saveSetting('LinkedinParserConfig',
 $V73f329f1, $this->V10573b87[$V73f329f1]); } } foreach ($this->V1ebaa824['checkbox'] as $V73f329f1) {
 if (array_key_exists($V73f329f1, $this->V10573b87)) { $Ve52e7ce4->saveSetting('LinkedinParserConfig',
 $V73f329f1, $this->V10573b87[$V73f329f1]); } else { $Ve52e7ce4->saveSetting('LinkedinParserConfig',
 $V73f329f1, 0); } } foreach ($this->V1ebaa824['multienum'] as $V73f329f1) { $Ve52e7ce4->saveSetting('LinkedinParserConfig', $V73f329f1,
 encodeMultienumValue($this->V10573b87[$V73f329f1])); } } public function getLinkedinSettings() {
 global $app_list_strings; $Ve52e7ce4 = new Administration(); $Ve52e7ce4->retrieveSettings(); $this->Vebb3692b= $Ve52e7ce4->settings;
foreach ( $this->V3460fc47 as $module_name => $V087b2647 ) { $V95a27872 = strtolower($module_name);
if (array_key_exists('LinkedinParserConfig_' . $V95a27872 . '_d_d', $Ve52e7ce4->settings) && !array_key_exists('reset_to_default', $this->V10573b87)
 ) { $this->V63fb70e2['dublicate']['disable'][$module_name] = $Ve52e7ce4->settings['LinkedinParserConfig_'
 . $V95a27872 . '_d_d']; } else { $this->V63fb70e2['dublicate']['disable'][$module_name] = ''; } if (array_key_exists('LinkedinParserConfig_' . $V95a27872
 . '_d_e', $Ve52e7ce4->settings) && !array_key_exists('reset_to_default', $this->V10573b87) ) { $this->V63fb70e2['dublicate']['enable'][$module_name]
 = $Ve52e7ce4->settings['LinkedinParserConfig_' . $V95a27872 . '_d_e']; } else { $this->V63fb70e2['dublicate']['enable'][$module_name]
 = implode(',', $this->V3460fc47[$module_name]); } } $this->V63fb70e2['status'] = $this->getStatusSettings();
return $this->V63fb70e2; } public function getStatusSettings() { global $app_list_strings; $Vcaeda515 = array(
 'Leads' => array( 'options' => '', 'value' => '', 'dropdown' => array(), ), 'rls_Candidates' => array(
 'options' => '', 'value' => '', 'dropdown' => array(), ), ); $Vcaeda515['Leads']['dropdown'] = $app_list_strings['lead_status_dom'];
foreach ( $app_list_strings['lead_status_dom'] as $Vec4cb006 => $Vfd551af0 ) { $Vef7de3f4 = '';
if ( array_key_exists('LinkedinParserConfig_leads_status_f', $this->Vebb3692b) && $this->Vebb3692b['LinkedinParserConfig_leads_status_f']
 == $Vec4cb006 ) { $Vef7de3f4 = 'selected="selected"'; $Vcaeda515['Leads']['value'] = $Vec4cb006;
} $Vcaeda515['Leads']['options'] .= '<option value="' . $Vec4cb006 . '" ' . $Vef7de3f4 . '>' . $Vfd551af0 . '</option>';
} $V2a69a18d = array(); if (array_key_exists('main_status_list', $app_list_strings)) { $V2a69a18d = $app_list_strings['main_status_list'];
} if (array_key_exists('main_status', $app_list_strings)) { $V2a69a18d = $app_list_strings['main_status'];
} $Vcaeda515['rls_Candidates']['dropdown'] = $V2a69a18d; foreach ( $V2a69a18d as $V2a01ada2 => $Vc914ef99
 ) { $Vef7de3f4 = ''; if ( array_key_exists('LinkedinParserConfig_candidate_status_f', $this->Vebb3692b)
 && $this->Vebb3692b['LinkedinParserConfig_candidate_status_f'] == $V2a01ada2 ) { $Vef7de3f4 = 'selected="selected"';
$Vcaeda515['rls_Candidates']['value'] = $V2a01ada2; } $Vcaeda515['rls_Candidates']['options'] .= '<option value="'
 . $V2a01ada2 . '" ' . $Vef7de3f4 . '>' . $Vc914ef99 . '</option>'; } return $Vcaeda515; } public function getStatusFieldsHTML($Vc5bef007)
 { global $app_list_strings; $V17a07aa5 = ''; switch ($Vc5bef007) { case 'Leads': $Vad973c25 = $app_list_strings['lead_status_dom'];
foreach ($Vad973c25 as $V57a862bd => $V35b1e939) { $V17a07aa5 .= '<option value="' . $V57a862bd . '">'
 . $V35b1e939 . '</option>'; } break; case 'rls_Candidates': $Vad973c25 = array(); if (array_key_exists('main_status_list', $app_list_strings)) {
 $Vad973c25 = $app_list_strings['main_status_list']; } if (array_key_exists('main_status', $app_list_strings)) {
 $Vad973c25 = $app_list_strings['main_status']; } foreach ($Vad973c25 as $V57a862bd => $V35b1e939) {
 $V17a07aa5 .= '<option value="' . $V57a862bd . '" >' . $V35b1e939 . '</option>'; } break; default:
 $V17a07aa5 = '<option></option>'; } return $V17a07aa5; } public function getHtmlForMultiselectEnableModules($V2063c160)
 { if (empty($V2063c160)) { $V2063c160 = array(); } $V125d1456 = $this->getDefaultLinkedinSettings();
$V273a77a3 = $V125d1456['modules']['enable']; $V2e6c34c1 = $V125d1456['modules']['disable']; if (array_key_exists('enable', $V2063c160)) {
 $V273a77a3 = $V2063c160['enable']; } if (array_key_exists('disable', $V2063c160)) { $V2e6c34c1 = $V2063c160['disable'];
} $nameList = ''; foreach ($this->V9c935b2a as $Vc9543cfe => $Vd5211ee0) { $nameList .= 'nameList[\'' . $Vc9543cfe . '\'] = \''
 . $Vd5211ee0 . '\';'; } $Vfc35fdc7 = '<style> #sortable_disabled, #sortable_enable { border: 1px solid #eee;
width: 200px; min-height: 20px; list-style-type: none; margin: 0; padding: 5px 0 0 0; margin-right: 10px;
} #sortable_disabled li, #sortable_enable li{ margin: 0 5px 5px 5px; padding-left: 1.5em; font-size: 1.2em;
 list-style-type: none; } #sortable_disabled li span, #sortable_enable li span{ position: absolute;
margin-left: -1.3em; margin-top: -1.2em; } </style> <table width="100%" border="0" cellspasing="1" cellpadding="0" class="edit view">
 <tbody> <tr> <td width="10%"> <label>Disabled</label> <ul id="sortable_disabled" class="connectedSortable">
 </ul> <!--type="hidden"--> <input id="list_order_modules_disabled" type="hidden" name="list_order_modules_disabled" value="'
 . $V2e6c34c1 . '"> </td> <td width="2%"> <span style=" margin-top: 25px;" class="ui-icon ui-icon-arrowthick-2-e-w"></span>
 </td> <td width="10%"> <label>Enabled</label> <ul id="sortable_enable" class="connectedSortable">
 </ul> <!--type="hidden"--> <input id="list_order_modules_enable" type="hidden" name="list_order_modules_enable" value="'
 . $V273a77a3 . '"> </td> <td width="80%"></td> </tr> </tbody> </table> <script type="text/javascript"> $("#bootstrap-container").css("float","none"); </script>
 <script type="text/javascript" > var nameList = []; ' . $nameList . ' $(document).ready(function () {
 try { $("#sortable_disabled").sortable({ placeholder: "ui-state-highlight", connectWith: ".connectedSortable",
 update: function (event, ui) { $(\'#list_order_modules_disabled\').val($(this).sortable(\'toArray\').join());
} }).disableSelection(); var Vfab67cb2 = $(\'#list_order_modules_disabled\').val().split(","); var V42c5f18e = $(\'#sortable_disabled\');
$.each(Vfab67cb2, function (i, v) { if (v != \'\') { var li = $(\'<li/>\') .addClass(\'ui-state-default\')
 .attr(\'id\', v) .text(nameList[v]) .appendTo(V42c5f18e); var span = $(\'<span/>\') .addClass(\'ui-icon ui-icon-arrowthick-2-n-s\')
 .appendTo(li); } }); $("#sortable_disabled").sortable(\'refresh\'); } catch (ex) { console.log(ex);
} try { $("#sortable_enable").sortable({ placeholder: "ui-state-highlight", connectWith: ".connectedSortable",
 update: function (event, ui) { $(\'#list_order_modules_enable\').val($(this).sortable(\'toArray\').join());
F484be4e1(\'\'); } }).disableSelection(); var Vfab67cb2 = $(\'#list_order_modules_enable\').val().split(","); 
 var V42c5f18e = $(\'#sortable_enable\'); $.each(Vfab67cb2, function (i, v) { if (v != \'\') { var li = $(\'<li/>\')
 .addClass(\'ui-state-default\') .attr(\'id\', v) .text(nameList[v]) .appendTo(V42c5f18e); var span = $(\'<span/>\')
 .addClass(\'ui-icon ui-icon-arrowthick-2-n-s\') .appendTo(li); } }); $("#sortable_enable").sortable(\'refresh\');
} catch (ex) { console.log(ex); } }); </script>'; return $Vfc35fdc7; } public function getHtmlForMultiselectEnableModulesDetail($V2063c160)
 { if (empty($V2063c160)) { $V2063c160 = array(); } $V273a77a3 = 'Candidates,Leads,Contacts,Accounts,Prospects';
$V2e6c34c1 = ''; if (array_key_exists('enable', $V2063c160)) { $V273a77a3 = $V2063c160['enable']; }
if (array_key_exists('disable', $V2063c160)) { $V2e6c34c1 = $V2063c160['disable']; } $V273a77a3 = explode(',', $V273a77a3);
$Vcb4b1bbf = array(); foreach ($V273a77a3 as $module) { if (!empty($module)) { $Vcb4b1bbf[] = $this->V9c935b2a[$module];
} } $Vcb4b1bbf = implode(',', $Vcb4b1bbf); $V2e6c34c1 = explode(',', $V2e6c34c1); $Vfbe47690 = array();
foreach ($V2e6c34c1 as $module) { if (!empty($module)) { $Vfbe47690[] = $this->V9c935b2a[$module];
} } $Vfbe47690 = implode(',', $Vfbe47690); $Vfc35fdc7 = '<table width="100%" border="0" cellspasing="1" cellpadding="0" class="edit view">
 <tbody> <tr> <td width="10%"> <label>Disabled</label> </td> <td width="40%"> ' . $Vfbe47690 . '
 </td> <td width="50%"> &nbsp; </td> </tr> <tr> <td width="10%"> <label>Enabled</label> </td>
 <td width="40%"> ' . $Vcb4b1bbf . ' </td> <td width="50%"> &nbsp; </td> </tr> </tbody> </table>';
return $Vfc35fdc7; } public function getDefaultModuleSearchHTML($V2063c160) { $Vfc35fdc7 = '<select id="default_module_search" name="default_module_search"></select>';
$Vfc35fdc7 .= '<script> $(document).ready(function () { F484be4e1(\'' . $V2063c160 . '\') }); function F484be4e1(saved_value){
 var Vfab67cb2 = $(\'#list_order_modules_enable\').val().split(","); var Vb9e6a4aa = $(\'#default_module_search\').val();
if(saved_value!=\'\'){ Vb9e6a4aa = saved_value; } $(\'#default_module_search\').html(\'\'); var Vadd50940 = $(\'#default_module_search\');
var V81264fd3 = \'\'; var V02f9a05b = false; $.each(Vfab67cb2, function (i, v) { if (v != \'\') {
 var V99938282 = $(\'<option></option>\') .attr(\'value\', v) .html(nameList[v]) .appendTo(Vadd50940);
V81264fd3 = v; if(V81264fd3 == Vb9e6a4aa){ V02f9a05b = true; } } }); if(V02f9a05b){ $(\'#default_module_search\').val(Vb9e6a4aa);
} else { $(\'#default_module_search\').val(V81264fd3); } } </script>'; return $Vfc35fdc7; } public function getDefaultModuleSearchHTMLDetail($V2063c160)
 { $Vfc35fdc7 = $this->V9c935b2a[$V2063c160]; return $Vfc35fdc7; } public function getListDuplicateHTML($V2063c160, $V73f329f1, $module_name)
 { $V63fb70e2 = $this->getDefaultLinkedinSettings(); $fields_labels = $this->getRLSFieldslabels();
if (empty($V2063c160)) { $V2063c160 = array(); } if (array_key_exists('enable', $V2063c160)) { $V63fb70e2['dublicate'][$module_name]['enable']
 = $V2063c160['enable']; } if (array_key_exists('disable', $V2063c160)) { $V63fb70e2['dublicate'][$module_name]['disable']
 = $V2063c160['disable']; } $Vc9799665 = strtolower($module_name); $Vfc35fdc7 = ' <style> #sortable_disabled, #sortable_enable, #accounts_duplicate_disabled, #accounts_duplicate_enable, #contacts_duplicate_disabled, #contacts_duplicate_enable, #leads_duplicate_disabled, #leads_duplicate_enable, #prospects_duplicate_disabled, #prospects_duplicate_enable, #rls_candidates_duplicate_disabled, #rls_candidates_duplicate_enable {
 border: 1px solid #eee; width: 200px; min-height: 20px; list-style-type: none; margin: 0; padding: 5px 0 0 0;
margin-right: 10px; } #sortable_disabled li, #sortable_enable li, #accounts_duplicate_disabled li, #accounts_duplicate_enable li, #contacts_duplicate_disabled li, #contacts_duplicate_enable li, #leads_duplicate_disabled li, #leads_duplicate_enable li, #prospects_duplicate_disabled li, #prospects_duplicate_enable li, #rls_candidates_duplicate_disabled li, #rls_candidates_duplicate_enable li{
 margin: 0 5px 5px 5px; padding-left: 1.5em; font-size: 1.2em; list-style-type: none; } #sortable_disabled li span, #sortable_enable li span, #accounts_duplicate_disabled li span, #accounts_duplicate_enable li span, #contacts_duplicate_disabled li span, #contacts_duplicate_enable li span, #leads_duplicate_disabled li span, #leads_duplicate_enable li span, #prospects_duplicate_disabled li span, #prospects_duplicate_enable li span, #rls_candidates_duplicate_disabled li span, #rls_candidates_duplicate_enable li span{
 position: absolute; margin-left: -1.3em; margin-top: -1.2em;} </style> <table width="100%" border="0" cellspasing="1" cellpadding="0" class="edit view">
 <tbody> <tr> <td width="15%"></td> <td width="10%"> <label>Disabled</label> <ul id="' . $V73f329f1
 . '_disabled" class="connectedSortable_' . $Vc9799665 . '"> </ul> <!--type="hidden"--> <input id="list_' . $V73f329f1
 . '_disabled" type="hidden" name="list_' . $V73f329f1 . '_disabled" value="' . $V63fb70e2['dublicate'][$module_name]['disable'] . '">
 </td> <td width="2%"> <span style=" margin-top: 25px;" class="ui-icon ui-icon-arrowthick-2-e-w"></span>
 </td> <td width="10%"> <label>Enabled</label> <ul id="' . $V73f329f1 . '_enable" class="connectedSortable_' . $Vc9799665 . '">
 </ul> <!--type="hidden"--> <input id="list_' . $V73f329f1 . '_enable" type="hidden" name="list_' . $V73f329f1
 . '_enable" value="' . $V63fb70e2['dublicate'][$module_name]['enable'] . '"> </td> <td width="80%"></td>
 </tr> </tbody> </table> <script type="text/javascript" > $(document).ready(function () { var fields_labels = [];
' . $fields_labels . '; var module = \'' . $module_name . '\'; if(module!=undefined && module.length){
 var Vc9799665 = module.toLowerCase(); try { $(\'#\'+Vc9799665+\'_duplicate_disabled\').sortable({
 placeholder: "ui-state-highlight", connectWith: ".connectedSortable_"+Vc9799665, update: function (event, ui) {
 $(\'#list_\'+Vc9799665+\'_duplicate_disabled\').val($(this).sortable(\'toArray\').join()); } }).disableSelection();
var Vfab67cb2 = $(\'#list_\'+Vc9799665+\'_duplicate_disabled\').val().split(","); var V42c5f18e = $(\'#\'+Vc9799665+\'_duplicate_disabled\');
$.each(Vfab67cb2, function (i, v) { if (v != \'\') { var li = $(\'<li/>\') .addClass(\'ui-state-default\')
 .attr(\'id\', v) .text(fields_labels[module][v]) .appendTo(V42c5f18e); var span = $(\'<span/>\')
 .addClass(\'ui-icon ui-icon-arrowthick-2-n-s\') .appendTo(li); } }); $(\'#\'+Vc9799665+\'_duplicate_disabled\').sortable(\'refresh\');
} catch (ex) { console.log(ex); } try { $(\'#\'+Vc9799665+\'_duplicate_enable\').sortable({ placeholder: "ui-state-highlight",
 connectWith: ".connectedSortable_"+Vc9799665, update: function (event, ui) { $(\'#list_\'+Vc9799665+\'_duplicate_enable\').val($(this).sortable(\'toArray\').join());
} }).disableSelection(); var Vfab67cb2 = $(\'#list_\'+Vc9799665+\'_duplicate_enable\').val().split(",");
var V42c5f18e = $(\'#\'+Vc9799665+\'_duplicate_enable\'); console.info(Vfab67cb2); console.info(V42c5f18e);
$.each(Vfab67cb2, function (i, v) { if (v != \'\') { var li = $(\'<li/>\') .addClass(\'ui-state-default\')
 .attr(\'id\', v) .text(fields_labels[module][v]) .appendTo(V42c5f18e); var span = $(\'<span/>\')
 .addClass(\'ui-icon ui-icon-arrowthick-2-n-s\') .appendTo(li); } }); $(\'#\'+Vc9799665+\'_duplicate_enable\').sortable(\'refresh\');
} catch (ex) { console.log(ex); } } }); </script>'; return $Vfc35fdc7; } public function getListDuplicateHTMLDetail(
 $V2063c160, $V73f329f1, $module_name ) { $V63fb70e2 = $this->getDefaultLinkedinSettings(); $fields_labels = $this->getRLSFieldslabels('php');
if (empty($V2063c160)) { $V2063c160 = array(); } $V273a77a3 = $V63fb70e2['dublicate']['enable'][$module_name];
$V2e6c34c1 = $V63fb70e2['dublicate']['disable'][$module_name]; if (array_key_exists('enable', $V2063c160)) {
 $V273a77a3 = $V2063c160['enable']; } if (array_key_exists('disable', $V2063c160)) { $V2e6c34c1 = $V2063c160['disable'];
} $V273a77a3 = explode(',', $V273a77a3); $V5d0afb55 = array(); foreach ($V273a77a3 as $V06e3d36f) {
 if (!empty($V06e3d36f)) { $V5d0afb55[] = $fields_labels[$module_name][$V06e3d36f]; } } $V5d0afb55 = implode(',', $V5d0afb55);
$V2e6c34c1 = explode(',', $V2e6c34c1); $V1446cad1 = array(); foreach ($V2e6c34c1 as $V06e3d36f) { if (!empty($V06e3d36f)) {
 $V1446cad1[] = $fields_labels[$module_name][$V06e3d36f]; } } $V1446cad1 = implode(',', $V1446cad1);
$Vfc35fdc7 = '<table width="100%" border="0" cellspasing="1" cellpadding="0" class="edit view"> <tbody>
 <tr> <td width="10%"> <label>Disabled</label> </td> <td width="40%"> ' . $V1446cad1 . ' </td>
 <td width="50%"> &nbsp; </td> </tr> <tr> <td width="10%"> <label>Enabled</label> </td> <td width="40%">
 ' . $V5d0afb55 . ' </td> <td width="50%"> &nbsp; </td> </tr> </tbody> </table>'; return $Vfc35fdc7;
} public function setCehckbox($V2063c160) { $V3793ea52 = ''; if ($V2063c160) { $V3793ea52 = 'checked="checked"';
} return $V3793ea52; } public function getDefaultLinkedinSettings() { if ($this->candidates_exist) {
 $this->V63fb70e2['modules']['disable'] = ''; $this->V63fb70e2['modules']['enable'] = 'Candidates,Leads,Contacts,Accounts,Prospects';
} else { $this->V63fb70e2['modules']['disable'] = ''; $this->V63fb70e2['modules']['enable'] = 'Leads,Contacts,Accounts,Prospects';
} foreach ( $this->V3460fc47 as $module_name => $V087b2647 ) { $this->V63fb70e2['dublicate'][$module_name]['disable'] = '';
$this->V63fb70e2['dublicate'][$module_name]['enable'] = implode(',', $V087b2647); } $this->V63fb70e2['skills'] = '1';
$this->V63fb70e2['working_experience'] = '1'; $this->V63fb70e2['parse_accounts'] = '1'; $this->V63fb70e2['assignt_to'] = 'current_user';
$this->V63fb70e2['leads_status_f'] = ''; $this->V63fb70e2['candidate_status_f'] = ''; $this->V63fb70e2['job_list'] = '1';
$this->V63fb70e2['target_list'] = '1'; $this->V63fb70e2['show_technical_data'] = '0'; $this->V63fb70e2['notes_name_mask'] = '[From-To][Date]';
$this->V63fb70e2['ignore_job_list_security'] = '0'; $this->V63fb70e2['ignore_target_list_security'] = '0';
$this->V63fb70e2['ignore_dublicates_team_security'] = '0'; $this->V63fb70e2['default_module_search'] = 'Prospects';
$this->V63fb70e2['jobs_allow_statuses_list'] = 'Open'; return $this->V63fb70e2; } public function getDefaultDuplicateFields()
 { $Vb4a88417 = array(); foreach ( $this->V3460fc47 as $module_name => $V087b2647 ) { $V63fb70e2[$module_name] = implode(',',
 $this->V3460fc47[$module_name]); } return $Vb4a88417; } public function getCurrentLinkedinSettings($Ve8701ad4 = '')
 { global $current_user; if (empty($Ve8701ad4)) { $Vee11cbb1 = $current_user; } else { $Vee11cbb1 = loadBean('Users');
$Vee11cbb1->disable_row_level_security = true; $Vee11cbb1->retrieve($Ve8701ad4); } $Vee11cbb1->load_relationship('rls_linkedinparserconfig_users');
$Vd045b624 = $Vee11cbb1->rls_linkedinparserconfig_users->getBeans(); if (!empty($Vd045b624)) { $V5e175a8c = array_shift($Vd045b624);
$this->V63fb70e2 = $this->getUserLinkedinSettings($V5e175a8c); } else { $this->V63fb70e2= $this->getAdminLinkedinSettings();
} return $this->V63fb70e2; } public function getUserLinkedinSettings($V5e175a8c) { $this->V63fb70e2= $this->getDefaultLinkedinSettings();
$Ve350ea9f = array( 'rls_skills' => 'skills', 'rls_working_experience' => 'working_experience', 'rls_parse_accounts' => 'parse_accounts',
 'rls_assign_to' => 'assignt_to', 'rls_leads_status_f' => 'leads_status_f', 'rls_candidate_status_f' => 'candidate_status_f',
 'rls_job_list' => 'job_list', 'rls_target_list' => 'target_list', 'rls_show_technical_data' => 'show_technical_data',
 'rls_notes_name_mask' => 'notes_name_mask', 'jobs_allow_statuses_list' => 'jobs_allow_statuses_list',
 'ignore_job_list_security' => 'ignore_job_list_security', 'ignore_target_list_security' => 'ignore_target_list_security',
 'ignore_dublicates_team_security' => 'ignore_dublicates_team_security', 'default_module_search' => 'default_module_search',
 ); foreach ($Ve350ea9f as $V78db24b6 => $V9509d574) { $this->V63fb70e2[$V9509d574] = $V5e175a8c->$V78db24b6;
} $list_order_modules_disabled_id = unserialize(htmlspecialchars_decode($V5e175a8c->list_order_modules_disabled_id));
if ($list_order_modules_disabled_id) { $this->V63fb70e2['modules'] = $list_order_modules_disabled_id;
} $V33a7baea = false; foreach ($this->V63fb70e2['modules'] as $V599dcce2 => $V678643db) { if (!empty($V678643db)) {
 $V678643db = explode(',', $V678643db); } else { $V678643db = array(); } foreach ($V678643db as $Vbbbdef4f => $module_name) {
 if ($module_name == 'Candidates') { $V33a7baea = true; if (!$this->V63fb70e2['candidates_exist']) {
 unset($V678643db[$Vbbbdef4f]); } } } $V678643db = implode(',', $V678643db); $this->V63fb70e2['modules'][$V599dcce2] = $V678643db;
} if ($this->V63fb70e2['candidates_exist'] && !$V33a7baea) { if (!empty($this->V63fb70e2['modules']['disable'])) {
 $V678643db = explode(',', $this->V63fb70e2['modules']['disable']); } else { $V678643db = array();
} $V678643db[] = 'Candidates'; $V678643db = implode(',', $V678643db); $this->V63fb70e2['modules']['disable'] = $V678643db;
} $Vaf4f2086 = array( 'accounts_duplicate' => 'Accounts', 'contacts_duplicate' => 'Contacts', 'leads_duplicate' => 'Leads',
 'prospects_duplicate' => 'Prospects', 'rls_candidates_duplicate' => 'rls_Candidates', ); foreach ($Vaf4f2086 as $V73f329f1 => $module) {
 $settings = unserialize(htmlspecialchars_decode($V5e175a8c->$V73f329f1)); if ($settings) { $this->V63fb70e2['dublicate'][$module]['disable']
 = $settings['disable']; $this->V63fb70e2['dublicate'][$module]['enable'] = $settings['enable']; }
} return $this->V63fb70e2; } public function getAdminLinkedinSettings() { $this->V63fb70e2= $this->getDefaultLinkedinSettings();
if (array_key_exists('reset_to_default', $this->V10573b87)) { return $this->V63fb70e2; } $Ve350ea9f = array(
 'LinkedinParserConfig_skills' => 'skills', 'LinkedinParserConfig_working_experience' => 'working_experience',
 'LinkedinParserConfig_parse_accounts' => 'parse_accounts', 'LinkedinParserConfig_assignt_to' => 'assignt_to',
 'LinkedinParserConfig_leads_status_f' => 'leads_status_f', 'LinkedinParserConfig_candidate_status_f' => 'candidate_status_f',
 'LinkedinParserConfig_job_list' => 'job_list', 'LinkedinParserConfig_target_list' => 'target_list',
 'LinkedinParserConfig_show_technical_data' => 'show_technical_data', 'LinkedinParserConfig_notes_name_mask' => 'notes_name_mask',
 'LinkedinParserConfig_jobs_allow_statuses_list' => 'jobs_allow_statuses_list', 'LinkedinParserConfig_ignore_job_list_security' => 'ignore_job_list_security',
 'LinkedinParserConfig_ignore_target_list_security' => 'ignore_target_list_security', 'LinkedinParserConfig_ignore_dublicates_team_security' => 'ignore_dublicates_team_security',
 'LinkedinParserConfig_default_module_search' => 'default_module_search', ); $Ve52e7ce4 = new Administration();
$Ve52e7ce4->retrieveSettings(); foreach ($Ve350ea9f as $V1f828256 => $V9509d574) { if (array_key_exists($V1f828256,
 $Ve52e7ce4->settings)) { $this->V63fb70e2[$V9509d574] = $Ve52e7ce4->settings[$V1f828256]; } } if (array_key_exists('LinkedinParserConfig_list_order_modules_disabled',
 $Ve52e7ce4->settings)) { $this->V63fb70e2['modules']['disable'] = $Ve52e7ce4->settings['LinkedinParserConfig_list_order_modules_disabled'];
} if (array_key_exists('LinkedinParserConfig_list_order_modules_enable', $Ve52e7ce4->settings)) { $this->V63fb70e2['modules']['enable']
 = $Ve52e7ce4->settings['LinkedinParserConfig_list_order_modules_enable']; } $V33a7baea = false; foreach ($this->V63fb70e2['modules'] as $V599dcce2 => $V678643db) {
 if (!empty($V678643db)) { $V678643db = explode(',', $V678643db); } else { $V678643db = array(); }
foreach ($V678643db as $Vbbbdef4f => $module_name) { if ($module_name == 'Candidates') { $V33a7baea = true;
if (!$this->V63fb70e2['candidates_exist']) { unset($V678643db[$Vbbbdef4f]); } } } $V678643db = implode(',', $V678643db);
$this->V63fb70e2['modules'][$V599dcce2] = $V678643db; } if ($this->V63fb70e2['candidates_exist'] && !$V33a7baea) {
 if (!empty($this->V63fb70e2['modules']['disable'])) { $V678643db = explode(',', $this->V63fb70e2['modules']['disable']);
} else { $V678643db = array(); } $V678643db[] = 'Candidates'; $V678643db = implode(',', $V678643db);
$this->V63fb70e2['modules']['disable'] = $V678643db; } $Vaf4f2086 = array( 'LinkedinParserConfig_accounts' => 'Accounts',
 'LinkedinParserConfig_contacts' => 'Contacts', 'LinkedinParserConfig_leads' => 'Leads', 'LinkedinParserConfig_prospects' => 'Prospects',
 'LinkedinParserConfig_rls_candidates' => 'rls_Candidates', ); foreach ($Vaf4f2086 as $V73f329f1 => $module) {
 if (array_key_exists($V73f329f1 . '_d_d', $Ve52e7ce4->settings)) { $this->V63fb70e2['dublicate'][$module]['disable']
 = $Ve52e7ce4->settings[$V73f329f1 . '_d_d']; } if (array_key_exists($V73f329f1 . '_d_e', $Ve52e7ce4->settings)) {
 $this->V63fb70e2['dublicate'][$module]['enable'] = $Ve52e7ce4->settings[$V73f329f1 . '_d_e']; } }
return $this->V63fb70e2; } public function getJobsAllowStatusesList($Vb66f3142) { require_once 'modules/RLS_LinkedinParserConfig/rlsMultiselectWidget.php';
$V93da65a9 = ''; $V7d64b3c9 = '<span>No data</span>'; $V4b25f815 = Fbe2abffc(); if (!empty($V4b25f815)) {
 $Vf7bd60b7 = 'size="' . count($V4b25f815) . '"'; $V1ec120dc = empty ($Vb66f3142) ? array() : unencodeMultienum($Vb66f3142);
foreach ($V4b25f815 as $V3c6e0b8a => $V2063c160) { $V99938282 = (in_array($V3c6e0b8a, $V1ec120dc))
 ? 'selected="selected"' : ''; $V93da65a9 .= '<option ' . $V99938282 . ' label="' . $V2063c160 . '" value="' . $V3c6e0b8a . '">' . $V2063c160 . '</option>';
} $V7d64b3c9 = '<select name="jobs_allow_statuses_list[]" id="jobs_allow_statuses_list" ' . $Vf7bd60b7 . ' multiple="true"> ' . $V93da65a9 . '</select>';
} return $V7d64b3c9; } } 