<?php require_once 'modules/RLS_LinkedinParserConfig/LinkedinParserSettingsClass.php'; require_once 'custom/include/RLS/SkillsIntegration/SkillsUtillsLinkedin.php';
require_once 'include/utils.php'; class Ff2ee66e1 { const CANDIDATE_MODULE = 'RLS_CANDIDATES'; public $V4fb5a010 = array();
 public $V9b207167 = array(); public $V65390101 = array(); public $sugar_version = ''; public $V128a45e9 = '';
 public $V0c545aa9 = false; public $V1858c1a2 = false; public $V809d8549 = false; public $Vecb49c10 = false;
 public $V1c7316d1 = 0; public $V81ea165a = ''; public $current_user = '1'; public $full_name = '';
 private $Vfc45620c = true; private $default_module_search = 'Prospects'; private $V71bee43a = array("China", "India", "USA", "Indonesia", "Brazil",
 "Pakistan", "Nigeria", "Bangladesh", "Russia", "Mexico", "Japan", "Philippines", "Ethiopia", "Vietnam", "Egypt", "Germany", "Iran",
 "Democratic Republic of the Congo", "Turkey", "Thailand", "United Kingdom", "France", "Italy", "Tanzania", "South Africa", "Myanmar", "South Korea",
 "Colombia", "Kenya", "Spain", "Ukraine", "Argentina", "Sudan", "Algeria", "Uganda", "Poland", "Iraq", "Canada", "Morocco", "Afghanistan",
 "Saudi Arabia", "Peru", "Venezuela", "Malaysia", "Uzbekistan", "Nepal", "Mozambique", "Ghana", "Yemen", "Angola", "North Korea", "Madagascar",
 "Australia", "Cameroon", "Taiwan", "Côte d'Ivoire", "Sri Lanka", "Niger", "Romania", "Burkina Faso", "Syrian Arab Republic", "Mali", "Chile",
 "Kazakhstan", "Malawi", "Netherlands", "Zambia", "Guatemala", "Ecuador", "Zimbabwe", "Cambodia", "Senegal", "Chad", "Guinea", "South Sudan",
 "Rwanda", "Burundi", "Cuba", "Tunisia", "Belgium", "Benin", "Somalia", "Greece", "Bolivia", "Haiti", "Dominican Republic", "Czech Republic",
 "Portugal", "Azerbaijan", "Sweden", "Hungary", "Belarus", "United Arab Emirates", "Serbia", "Tajikistan", "Austria", "Switzerland",
 "Israel", "Honduras", "Papua New Guinea", "Jordan", "Togo", "Hong Kong", "Bulgaria", "Laos", "Paraguay", "Sierra Leone", "Libya", "Nicaragua",
 "El Salvador", "Kyrgyzstan", "Lebanon", "Singapore", "Denmark", "Finland", "Turkmenistan", "Slovakia", "Eritrea", "Norway", "Central African Republic",
 "Costa Rica", "Palestine", "Congo", "Ireland", "Oman", "Liberia", "New Zealand", "Croatia", "Mauritania", "Moldova", "Kuwait", "Panama", "Georgia",
 "Bosnia and Herzegovina", "Puerto Rico", "Uruguay", "Armenia", "Mongolia", "Albania", "Lithuania", "Jamaica", "Namibia", "Botswana", "Qatar", "Lesotho",
 "Republic of Macedonia", "Slovenia", "Gambia", "Latvia", "Guinea-Bissau", "Gabon", "Bahrain", "Trinidad and Tobago", "Estonia", "Swaziland",
 "Mauritius", "Timor-Leste", "Cyprus", "Djibouti", "Fiji", "Equatorial Guinea", "Réunion", "Comoros", "Bhutan", "Guyana", "Montenegro", "Macau",
 "Solomon Islands", "Western Sahara", "Luxembourg", "Suriname", "Cabo Verde", "Guadeloupe", "Brunei", "Malta", "Martinique", "Bahamas", "Maldives",
 "Belize", "Iceland", "French Polynesia", "Barbados", "French Guiana", "Vanuatu", "New Caledonia", "Mayotte", "Samoa", "Sao Tome and Principe",
 "Saint Lucia", "Guam", "Guernsey and Jersey", "Curaçao", "Kiribati", "Saint Vincent and the Grenadines", "Grenada", "Tonga", "United States Virgin Islands",
 "Federated States of Micronesia", "Aruba", "Seychelles", "Antigua and Barbuda", "Isle of Man", "Dominica", "Andorra", "Bermuda", "Cayman Islands", "Greenland",
 "Saint Kitts and Nevis", "American Samoa", "Northern Mariana Islands", "Marshall Islands", "Faroe Islands", "Sint Maarten", "Monaco",
 "Liechtenstein", "Turks and Caicos Islands", "Gibraltar", "San Marino", "British Virgin Islands", "Caribbean Netherlands", "Palau", "Cook Islands",
 "Anguilla", "Wallis and Futuna", "Nauru", "Tuvalu", "Saint Pierre and Miquelon", "Montserrat", "Saint Helena, Ascension and Tristan da Cunha", "Falkland Islands",
 "Niue", "Tokelau", "Vatican City"); public function __construct ($V10573b87) { global $sugar_version, $sugar_flavor, $app_list_strings, $db, $current_user;
require_once 'custom/include/RLS/linkedinConnector/config/fieldsConfig.php'; require_once 'custom/include/RLS/linkedinConnector/config/mounthConfig.php';
$this->V65390101= $V65390101; $this->V4fb5a010= $V4fb5a010; $this->V9b207167= array( 'status' => 1,
 'msg' => '', 'recruitment' => false, 'is_sugar7' => false, 'params' => array(), 'other_params' => array(),
 ); $this->sugar_version = $sugar_version; $this->V128a45e9= $sugar_flavor; if ($this->V128a45e9== 'ENT') {
 $this->V128a45e9= 'PRO'; } $V2af72f10 = explode ('.', $this->sugar_version); if ($this->V128a45e9!= 'CE' && ($V2af72f10[0] == 7 || $V2af72f10[0] > 7)
 ) { $this->V9b207167['is_sugar7'] = true; } if (array_key_exists ('rls_Candidates', $app_list_strings['moduleList']) || array_key_exists ('RLS_Candidates', $app_list_strings['moduleList'])) {
 $Vac5c74b6 = "SELECT id FROM users WHERE user_name='". $db->quote($V10573b87['user_name']) . "' AND deleted = 0";
$Vb4a88417 = $db->query($Vac5c74b6); $Ve8701ad4 = ''; while ($Vf1965a85 = $db->fetchByAssoc ($Vb4a88417)) {
 $Ve8701ad4 = $Vf1965a85['id']; } if ($this->V65390101[$this->V128a45e9]['rls_Candidates'] == 'rls_Candidates'
 ) { require_once 'modules/rls_Jobs/license/rls_OutfittersLicense.php'; $V8f70f08b = rls_OutfittersLicense::isValid ('rls_Jobs', $Ve8701ad4);
} else { require_once 'modules/RLS_Skills/license/OutfittersLicense.php'; $V8f70f08b = OutfittersLicense::isValid ('RLS_Skills', $Ve8701ad4);
} if ($V8f70f08b !== true) { $this->V0c545aa9= false; } else { $this->V0c545aa9= true; } } else {
 $this->V0c545aa9= false; } $this->V9b207167['recruitment'] = $this->V0c545aa9; $LinkedinParserSettingsClass = new LinkedinParserSettingsClass ($V10573b87);
$settings = $LinkedinParserSettingsClass->getDefaultLinkedinSettings (); $this->putToResultLikedinSettings ($settings);
$this->V9b207167['available_users'] = $this->getAvailableUsers (); $this->V9b207167['available_update'] = $this->checkAvailableUpdate ();
} public function setError ($Vea6db7e7 = '', $Vc5f3c389 = 1) { $this->V9b207167['status'] = $Vc5f3c389;
$this->V9b207167['msg'] = $Vea6db7e7; return true; } public function setWarning ($Vea6db7e7 = '') {
 $this->V9b207167['status'] = 2; $this->V9b207167['msg'] = $Vea6db7e7; return true; } public function setSuccess ($Vad994e14 = '') {
 $this->V9b207167['status'] = 0; $this->V9b207167['msg'] = $Vad994e14; return true; } public function convertFromRusToEn ($V5fc73231 = '') {
 if (empty ($V5fc73231)) return ''; $Vd98a07f8 = array_keys ($this->V4fb5a010); $V01b6e203 = array_values ($this->V4fb5a010);
$V5fc73231 = str_replace ($Vd98a07f8, $V01b6e203, strtolower ($V5fc73231)); return $V5fc73231; } public function convertFromRusToEn2 ($V5fc73231 = '') {
 if (empty ($V5fc73231)) { return ''; } $Vbb76e254 = explode (' ', $V5fc73231); if (count ($Vbb76e254) == 2) {
 foreach ($this->V4fb5a010 as $V89484b14 => $V9cfefed8) { if (stristr ($Vbb76e254[0], $V9cfefed8)) { 
 } if (stristr ($Vbb76e254[1], $V89484b14)) { $Vbb76e254[1] = str_replace ($V89484b14, $V9cfefed8, $Vbb76e254[1]);
$V5fc73231 = $Vbb76e254[1] . ' ' . $Vbb76e254[0]; break; } } } if (count ($Vbb76e254) == 1) { foreach ($this->V4fb5a010 as $V89484b14 => $V9cfefed8) {
 $V5fc73231 = str_replace ($V89484b14, $V9cfefed8, $Vbb76e254[1]); } } return $V5fc73231; } public function generateNotesName ($V33329337) {
 $name = ''; if (empty ($V33329337) || empty ($this->V81ea165a)) { return $name; } $name = $this->V81ea165a;
$name = str_replace ('[Date]', $V33329337['time_str'], $name); $name = str_replace ('[From-To]', $V33329337['title'], $name);
return $name; } public function getResult ($V10573b87) { $this->checkEntryPointEnabled (); if ($this->Vecb49c10) {
 $this->checkUser ($V10573b87); if ($this->V809d8549) { $this->checkLicence ($V10573b87); if ($this->V1858c1a2) {
 $this->getLinkedinSettings ($V10573b87); $this->query ($V10573b87); } } } return $this->V9b207167;
} public function query ($V10573b87) { if (!array_key_exists ('rls_linkedin_q', $V10573b87) || empty ($V10573b87['rls_linkedin_q'])
 ) { $this->setError ('Undefined query function'); return false; } switch ($V10573b87['rls_linkedin_q']) {
 case 'getCandidateById': $this->getCandidateById ($V10573b87); break; case 'getCandidateById2': $this->getCandidateById2 ($V10573b87);
break; case 'saveMsgs': $this->saveMsgs ($V10573b87); break; case 'getTargetListDropdown': $this->getTargetListDropdown ($V10573b87);
break; case 'getJobListDropdown': $this->getJobListDropdown ($V10573b87); break; case 'getAccountListDropdown':
 $this->getAccountListDropdown ($V10573b87); break; case 'setCandidate': $this->setCandidate ($V10573b87);
break; case 'checkUserSettings': $this->checkUserSettings (); break; case 'getModulesLabels': $this->getModulesLabels ();
break; case 'getDuplicates': $this->getDuplicates ($V10573b87); break; case 'getDuplicatesManual':
 $this->getDuplicatesManual ($V10573b87); break; default: $this->setError ('Function ' . $V10573b87['rls_linkedin_q']
 . ' not registered'); } } public function checkUser ($V10573b87) { global $db; require_once 'modules/Users/authentication/SugarAuthenticate/SugarAuthenticate.php';
if (array_key_exists ('user_name', $V10573b87) && array_key_exists ('password', $V10573b87) ) { if (empty ($V10573b87['user_name'])) {
 $this->V809d8549= false; $this->setError ('username field is empty'); return false; } if (empty ($V10573b87['password'])) {
 $this->V809d8549= false; $this->setError ('password field is empty'); return false; } $Vac5c74b6 = "SELECT id FROM users WHERE users.user_name='". $db->quote($V10573b87['user_name']). 
 "' AND users.status !='Inactive' AND users.deleted=0"; $Vb4a88417 = $db->query ($Vac5c74b6); $Vdd3858fa = $db->fetchByAssoc ($Vb4a88417);
if (!$Vdd3858fa) { $this->V809d8549= false; $this->setError ('Username incorrect'); return false; }
$V10573b87['password'] = SugarAuthenticate::encodePassword ($V10573b87['password']); $Vf1965a85 = User::findUserPassword ($V10573b87['user_name'], $V10573b87['password'], "(portal_only IS NULL OR portal_only !='1') AND (is_group IS NULL OR is_group !='1') AND status !='Inactive'");
if ($Vf1965a85) { $this->V809d8549= true; } else { $this->V809d8549= false; $this->setError ('Password incorrect');
} } else { $this->setError ('User settings not set'); } } public function checkEntryPointEnabled () {
 if (loadBean ('RLS_LinkedinParserConfig')) { $this->Vecb49c10= true; } else { $this->Vecb49c10= false;
$this->setError ('Service disabled'); } } public function checkLicence ($V10573b87) { global $db, $current_user;
$Vac5c74b6 = "SELECT id FROM users WHERE user_name='".$db->quote($V10573b87['user_name'])."' AND deleted = 0 "; $Vb4a88417 = $db->query ($Vac5c74b6);
$Ve8701ad4 = ''; while ($Vf1965a85 = $db->fetchByAssoc ($Vb4a88417)) { $Ve8701ad4 = $Vf1965a85['id'];
$Vee11cbb1 = loadBean ('Users')->retrieve ($Vf1965a85['id']); $current_user = $Vee11cbb1; $this->current_user = $Ve8701ad4;
$this->current_user_full_name = $Vee11cbb1->full_name; $this->V9b207167['current_user_full_name'] = $Vee11cbb1->full_name;
$this->V9b207167['current_user_id'] = $Ve8701ad4; } require_once 'modules/RLS_LinkedinParserConfig/license/OutfittersLicense.php';
$V8f70f08b = OutfittersLicense1::isValid ('RLS_LinkedinParserConfig', $Ve8701ad4); if ($V8f70f08b !== true) {
 $this->V1858c1a2= false; $this->setError ($V10573b87['user_name'] . ' is not assigned Social2Sugar license. Please contact your SugarCRM administrator.', 3); 
 } else { $this->V1858c1a2= true; } } public function getLinkedinSettings ($V10573b87) { $LinkedinParserSettingsClass = new LinkedinParserSettingsClass ($V10573b87);
$settings = $LinkedinParserSettingsClass->getCurrentLinkedinSettings ($this->current_user); $this->putToResultLikedinSettings ($settings);
} public function putToResultLikedinSettings ($settings) { if (array_key_exists ('modules', $settings) && array_key_exists ('enable', $settings['modules'])
 ) { $V202ecab0 = explode (',', $settings['modules']['enable']); $Vb21b13d0 = array(); foreach ( $V202ecab0 as $V2070e4aa
 ) { if ($V2070e4aa == 'Candidates') { $V2070e4aa = 'rls_Candidates'; } $Vb21b13d0[$V2070e4aa] = $this->V65390101[$this->V128a45e9]['mapping_for_standart_modules'][$V2070e4aa];
} if (!empty ($Vb21b13d0)) { $this->V65390101[$this->V128a45e9]['mapping_for_standart_modules'] = $Vb21b13d0;
} $this->V9b207167['enable_modules'] = $V202ecab0; } if (array_key_exists ('skills', $settings)) { $this->V9b207167['show_skills'] = $settings['skills'];
} else { $this->V9b207167['show_skills'] = 1; } if (array_key_exists ('working_experience', $settings)) {
 $this->V9b207167['show_working_experience'] = $settings['working_experience']; } else { $this->V9b207167['show_working_experience'] = 1;
} if (array_key_exists ('parse_accounts', $settings)) { $this->V9b207167['show_parse_accounts'] = $settings['parse_accounts'];
} else { $this->V9b207167['show_parse_accounts'] = 1; } if (array_key_exists ('job_list', $settings)) {
 $this->V9b207167['show_job_list'] = $settings['job_list']; } else { $this->V9b207167['show_job_list'] = 1;
} if (array_key_exists ('target_list', $settings)) { $this->V9b207167['show_target_list'] = $settings['target_list'];
} else { $this->V9b207167['show_target_list'] = 1; } if (array_key_exists ('assignt_to', $settings)) {
 $this->V9b207167['show_assignt_to'] = $settings['assignt_to']; } else { $this->V9b207167['show_assignt_to'] = 'current_user';
} if (array_key_exists ('show_technical_data', $settings)) { $this->V1c7316d1= $settings['show_technical_data'];
} else { $this->V1c7316d1= 0; } if (array_key_exists ('notes_name_mask', $settings)) { $this->V81ea165a= $settings['notes_name_mask'];
} else { $this->V81ea165a= ''; } if (array_key_exists ('leads_status_f', $settings)) { $this->V9b207167['leads_status_f'] = $settings['leads_status_f'];
} if (array_key_exists ('jobs_allow_statuses_list', $settings)) { $this->V9b207167['jobs_allow_statuses_list'] = empty($settings['jobs_allow_statuses_list']) ? 
 array() : unencodeMultienum ($settings['jobs_allow_statuses_list']); } if (array_key_exists ('ignore_job_list_security', $settings)) {
 $this->V9b207167['ignore_job_list_security'] = $settings['ignore_job_list_security']; } else { $this->V9b207167['ignore_job_list_security'] = 0;
} if (array_key_exists ('ignore_target_list_security', $settings)) { $this->V9b207167['ignore_target_list_security'] = $settings['ignore_target_list_security'];
} else { $this->V9b207167['ignore_target_list_security'] = 0; } if (array_key_exists ('ignore_dublicates_team_security', $settings)) {
 $this->V9b207167['ignore_dublicates_team_security'] = $settings['ignore_dublicates_team_security'];
} else { $this->V9b207167['ignore_dublicates_team_security'] = 0; } if (array_key_exists ('default_module_search', $settings)) {
 $this->V9b207167['default_module_search'] = $settings['default_module_search']; $this->default_module_search = $settings['default_module_search'];
} else { $this->V9b207167['default_module_search'] = 'Prospects'; $this->default_module_search = 'Prospects';
} } public function getAvailableUsers () { global $db; require_once 'modules/RLS_LinkedinParserConfig/license/OutfittersLicense.php';
$Vac5c74b6 = "SELECT id FROM users WHERE deleted=0 AND status='Active'"; $Vb4a88417 = $db->query ($Vac5c74b6);
$V74d5b0b0 = array(); while ($Vf1965a85 = $db->fetchByAssoc ($Vb4a88417)) { $V8f70f08b = OutfittersLicense1::isValid ('RLS_LinkedinParserConfig', $Vf1965a85['id']);
if ($V8f70f08b !== true) { } else { $Vee11cbb1 = loadBean ('Users')->retrieve ($Vf1965a85['id']);
$V74d5b0b0[] = array( 'id' => $Vee11cbb1->id, 'full_name' => $Vee11cbb1->full_name, ); } } return $V74d5b0b0;
} public function getModulesLabels () { global $db, $app_list_strings; $V2f1be040 = $this->V65390101[$this->V128a45e9]['rls_Candidates'];
$V0eb9b3af = array( 'accounts_module_label' => translate('LBL_MODULE_NAME', 'Accounts'), 'leads_module_label' => translate('LBL_MODULE_NAME', 'Leads'),
 'contacts_module_label' => translate('LBL_MODULE_NAME', 'Contacts'), 'candidate_module_label' => '',
 'prospects_module_label' => translate('LBL_MODULE_NAME', 'Prospects'), ); if ($this->V0c545aa9) {
 $V0eb9b3af['candidate_module_label'] = translate('LBL_MODULE_NAME', $V2f1be040); } $this->V9b207167['params']['modules_labels'] = $V0eb9b3af;
$LinkedinParserSettingsClass = new LinkedinParserSettingsClass (array()); $this->V9b207167['params']['general_settings'] = $LinkedinParserSettingsClass->getLinkedinSettings ();
$this->V9b207167['params']['general_settings']['versions_rules'] = $this->getS2SVersion (); $this->setSuccess ('Modules Find');
} public function getS2SVersion () { global $db; $Vbba24ca6 = array( 'version' => '', 'rules' => array('enable_searching_by_str' => false),
 ); $Vac5c74b6 = "SELECT id, version FROM upgrade_history WHERE id_name='RLS_Linkedin_EntryPoint'";
$Vb4a88417 = $db->query ($Vac5c74b6); while ($Vf1965a85 = $db->fetchByAssoc ($Vb4a88417)) { $Vbba24ca6['version'] = $Vf1965a85['version'];
$V2af72f10 = explode ('.', $Vf1965a85['version']); if ($V2af72f10[0] > 3 || ($V2af72f10[0] == 3 && $V2af72f10[1] > 6) || ($V2af72f10[0] == 3 && $V2af72f10[1] == 6 && $V2af72f10[2] >= 12) || $V2af72f10[4] == 'T') { 
 $Vbba24ca6['rules']['enable_searching_by_str'] = true; } } return $Vbba24ca6; } public function getCandidateById ($V10573b87) {
 global $db, $app_list_strings, $sugar_config; if (!array_key_exists ('memberId', $V10573b87) || empty ($V10573b87['memberId'])) {
 $this->setError ('Empty memberId'); return false; } $id = $db->quote($V10573b87['memberId']); $V0f253bcf = $this->V1c7316d1? " (Linkedin id = {$id})" : ''; 
 $V0c83f57c = ''; if (array_key_exists ('email', $V10573b87) && !empty ($V10573b87['email'])) { $V0c83f57c = $db->quote($V10573b87['email']);
} $V22450232 = $this->V65390101[$this->V128a45e9]; foreach ($V22450232['mapping_for_standart_modules'] as $module_name => $Ve350ea9f) {
 $V63d2929c = ''; $Vbd32268d = ''; if ($sugar_config['dbconfig']['db_type'] == 'mssql') $Vaa9f73ee = array ('mysql' => '', 'mssql' => 'TOP 1');
else $Vaa9f73ee = array ('mysql' => 'LIMIT 0,1', 'mssql' => ''); $V658d8a4e = $module_name; if ($module_name == 'rls_Candidates') 
 $V658d8a4e = $this->V65390101[$this->V128a45e9]['rls_Candidates']; $V658d8a4e = $db->quote($V658d8a4e);
 if ($module_name == 'rls_Candidates') { if (!$this->V0c545aa9) continue; if (!empty ($V0c83f57c)) { 
 $V63d2929c = "SELECT {$Vaa9f73ee['mssql']} rls_candidates.id FROM rls_candidates LEFT JOIN email_addr_bean_rel ON (
 rls_candidates.id=email_addr_bean_rel.bean_id AND email_addr_bean_rel.bean_module='{$V658d8a4e}' AND
 email_addr_bean_rel.deleted=0) LEFT JOIN email_addresses ON ( email_addr_bean_rel.email_address_id = email_addresses.id AND 
 email_addresses.deleted=0) WHERE email_addresses.email_address = '{$V0c83f57c}' AND rls_candidates.deleted=0
 ORDER BY rls_candidates.date_entered DESC {$Vaa9f73ee['mysql']}"; } $Vbd32268d = "SELECT {$Vaa9f73ee['mssql']} rls_candidates.id FROM rls_candidates
 WHERE rls_candidates.linkedin_account='{$id}' AND rls_candidates.deleted=0 ORDER BY rls_candidates.date_entered DESC {$Vaa9f73ee['mysql']}";
$Vef336b48 = loadBean ($V658d8a4e); } else { $Vef336b48 = loadBean ($V658d8a4e); $Vaab9e1de = $Vef336b48->table_name;
if (!empty ($V0c83f57c)) { $V63d2929c = "SELECT {$Vaa9f73ee['mssql']} {$Vaab9e1de}.id FROM {$Vaab9e1de}
LEFT JOIN email_addr_bean_rel ON ( {$Vaab9e1de}.id=email_addr_bean_rel.bean_id AND email_addr_bean_rel.bean_module='{$V658d8a4e}' AND
 email_addr_bean_rel.deleted=0) LEFT JOIN email_addresses ON ( email_addr_bean_rel.email_address_id = email_addresses.id AND 
 email_addresses.deleted=0) WHERE email_addresses.email_address='{$V0c83f57c}' AND {$Vaab9e1de}.deleted=0
 ORDER BY {$Vaab9e1de}.date_entered DESC {$Vaa9f73ee['mysql']}"; } $Vbd32268d = "SELECT {$Vaa9f73ee['mssql']} {$Vaab9e1de}.id FROM {$Vaab9e1de} 
 LEFT JOIN {$Vaab9e1de}_cstm ON {$Vaab9e1de}.id = {$Vaab9e1de}_cstm.id_c WHERE {$Vaab9e1de}_cstm.rls_linkedin_account_c='{$id}' AND {$Vaab9e1de}.deleted=0
 ORDER BY {$Vaab9e1de}.date_entered DESC {$Vaa9f73ee['mysql']}"; } if (empty ($V63d2929c)) { $V63d2929c = $Vbd32268d;
} $Vb4a88417 = $db->query ($V63d2929c); $Vb4a88417 = $db->fetchByAssoc ($Vb4a88417); if (empty ($Vb4a88417)) {
 $Vb4a88417 = $db->query ($Vbd32268d); if (empty ($Vb4a88417)) { continue; } } else { $Vb4a88417 = $db->query ($V63d2929c);
} while ($Vf1965a85 = $db->fetchByAssoc ($Vb4a88417)) { $Vef336b48->disable_row_level_security = true;
$Vef336b48->retrieve ($Vf1965a85['id']); $V21ffce5b = array(); $V21ffce5b['current_position'] = '';
$V21ffce5b['current_employer'] = ''; if ($module_name == 'rls_Candidates') { $module_name = $this->V65390101[$this->V128a45e9]['rls_Candidates'];
} $V21ffce5b['module'] = $module_name; $V21ffce5b['id'] = $Vf1965a85['id']; foreach ($Ve350ea9f as $V73f329f1 => $Vd3436d4b) {
 if ($V73f329f1 == 'full_name' && $module_name != 'Accounts' ) { $V21ffce5b[$V73f329f1] = $Vef336b48->first_name . ' '
 . $Vef336b48->last_name; } else { $V21ffce5b[$V73f329f1] = $Vef336b48->$Vd3436d4b; } } if (array_key_exists ('headline', $V21ffce5b)) {
 $V21ffce5b['current_position'] = $V21ffce5b['headline']; } if (array_key_exists ('current_workplace', $V21ffce5b)) {
 $V21ffce5b['current_employer'] = $V21ffce5b['current_workplace']; } if ($this->V0c545aa9&& $module_name == $this->V65390101[$this->V128a45e9]['rls_Candidates']
 ) { if ($this->V128a45e9== 'CE') { $Vb1985b5b = $this->getCurrentPositionCE ($Vef336b48); $V21ffce5b['current_position'] = $Vb1985b5b['current_position'];
$V21ffce5b['current_employer'] = $Vb1985b5b['current_employer']; } } $Vf4440451 = ''; if (array_key_exists ('search_in_module', $V10573b87) && !empty ($V10573b87['search_in_module'])
 ) { $Vf4440451 = $V10573b87['search_in_module']; } if ( (empty ($this->V9b207167['params']) && empty ($Vf4440451)) || (
 empty ($this->V9b207167['params']) && !empty ($Vf4440451) && ( $Vf4440451 == $V21ffce5b['module'] || ($Vf4440451 == 'rls_Candidates' && $V21ffce5b['module'] == 'RLS_Candidates')
 ) ) ) { $this->V9b207167['params'] = $V21ffce5b; $this->V9b207167['params']['update_info'] = $this->getDataForUpdate ($Vef336b48);
$V13b5bfe9 = ''; if (!empty ($V21ffce5b['module'])) { $V13b5bfe9 = ' in '. translate('LBL_MODULE_NAME', $V21ffce5b['module']);
} if (array_key_exists ('rls_status', $V10573b87)) { switch ($V10573b87['rls_status']) { case 1: $this->setSuccess ($V10573b87['full_name']
 . $V0f253bcf . ' was updated' . $V13b5bfe9); break; case 2: $this->setSuccess ($V10573b87['full_name']
 . $V0f253bcf . ' was created' . $V13b5bfe9); break; default: $this->setSuccess ($V10573b87['full_name']
 . $V0f253bcf . ' was found' . $V13b5bfe9); } } else { $this->setSuccess ($V10573b87['full_name'] . $V0f253bcf
 . ' was found' . $V13b5bfe9); } } else { $this->V9b207167['other_params'][$V21ffce5b['id']] = $V21ffce5b;
} } } if (empty ($this->V9b207167['params'])) { $V13b5bfe9 = ''; if (!empty ($V10573b87['search_in_module'])) {
 if ($V10573b87['search_in_module'] == 'rls_Candidates') { $V13b5bfe9 = ' in rls_Candidates'; if (array_key_exists ('rls_Candidates', $app_list_strings['moduleList'])) {
 $V13b5bfe9 = ' in '. translate('LBL_MODULE_NAME', 'rls_Candidates'); } if (array_key_exists ('RLS_Candidates', $app_list_strings['moduleList'])) {
 $V13b5bfe9 = ' in '. translate('LBL_MODULE_NAME', 'RLS_Candidates'); } } else { $V13b5bfe9 = ' in '. translate('LBL_MODULE_NAME', $V10573b87['search_in_module']);
} $this->V9b207167['params'] = array(); $this->V9b207167['params']['module'] = $V10573b87['search_in_module'];
} else { if (!empty ($V658d8a4e)) { $this->V9b207167['params'] = array(); $this->V9b207167['params']['module'] = $V658d8a4e;
$this->V9b207167['params']['module'] = $this->default_module_search; } } $this->setWarning ($V10573b87['full_name'] . $V0f253bcf . ' was not found' . $V13b5bfe9);
return false; } return true; } private function getDataForUpdate ($bean) { global $timedate; if ($bean->module_name == 'Accounts') {
 $name = explode (' ', $bean->name); $first_name = array_shift ($name); $last_name = implode (' ', $name);
$Vf7a42fe7 = $bean->phone_office; } else { $first_name = $bean->first_name; $last_name = $bean->last_name;
$Vf7a42fe7 = $bean->phone_mobile; } $Vb4a88417 = array(); $Vb4a88417['general'] = array( 'fname' => $first_name,
 'lname' => $last_name, 'email' => $bean->email1, 'phone' => $Vf7a42fe7, 'date_modified' => $bean->date_modified,
 'now' => $timedate->now (), ); $Vb4a88417['skills'] = $this->getBeanSkills ($bean); $Vb4a88417['experience'] = $this->getExperience ($bean);
return $Vb4a88417; } private function checkAvailableUpdate () { global $db; $Vac5c74b6 = "SELECT id, version FROM upgrade_history WHERE name='CRM-Recruitment.com'";
$Vb4a88417 = $db->query ($Vac5c74b6); while ($Vf1965a85 = $db->fetchByAssoc ($Vb4a88417)) { $V2af72f10 = explode ('.', $Vf1965a85['version']);
if ($V2af72f10[0] >= 3 && $V2af72f10[1] >= 8) { return true; } } return false; } private function getExperience ($bean) {
 if (self::CANDIDATE_MODULE == strtoupper ($bean->module_name)) { return $this->getBeanExperience ($bean);
} else { return $this->getExperienceList ($bean); } } private function getBeanSkills ($bean) { if (class_exists ('RLS_SkillsList') && self::CANDIDATE_MODULE == strtoupper ($bean->module_name)
 ) { return $this->getBeanSkillsList ($bean); } elseif (self::CANDIDATE_MODULE == strtoupper ($bean->module_name)) {
 return array(); } else { return $this->getSkillsList ($bean); } } private function getBeanExperience ($bean) {
 $query = " SELECT `re`.`name` `position`, `a`.`name` `company`, `re`.`start_date` `from`, `re`.`end_date` `to`
 FROM `rls_employment_rls_candidates_c` rerc JOIN `rls_employment` re ON `rerc`.`rls_employment_rls_candidatesrls_employment_idb` = `re`.`id`
 JOIN `rls_employment_accounts_c` rea ON `re`.`id` = `rea`.`rls_employment_accountsrls_employment_idb`
 JOIN `accounts` a ON `a`.`id` = `rea`.`rls_employment_accountsaccounts_ida` WHERE `re`.`deleted` = '0'
 AND `rerc`.`deleted` = '0' AND `rea`.`deleted` = '0' AND `a`.`deleted` = '0' AND `rerc`.`rls_employment_rls_candidatesrls_candidates_ida` = '{$bean->id}';";
return Feaccdecd::selectFromDb ($query); } private function getBeanSkillsList ($bean) { $query = "
 SELECT `rs`.`name` FROM `rls_skillslist` rsl JOIN `rls_skills` rs ON `rsl`.`rls_skills_id_c` = `rs`.`id`
 WHERE `rsl`.`is_checked` = '1' AND `rsl`.`deleted` = '0' AND `rs`.`deleted` = '0' AND `rsl`.`owner_module` = '{$bean->module_name}'
 AND `rsl`.`owner_id` = '{$bean->id}' GROUP BY `rs`.`name`;"; return Feaccdecd::selectFromDb ($query, 'name');
} private function getSkillsList ($bean) { $Ve0a40931 = array(); $Vfe00088d = explode (',', $bean->rls_description3_c);
foreach ($Vfe00088d as $V713dd4d0) { $Ve0a40931[] = trim ($V713dd4d0); } return $Ve0a40931; } private function getExperienceList ($bean) {
 $Ve0a40931 = array(); $V9af2570e = nl2br ($bean->rls_description2_c); $V9af2570e = explode ('<br />', $V9af2570e);
foreach ($V9af2570e as $Vd6e04792) { preg_match ('|Company:(.*)/ Position|is', $Vd6e04792, $Vc1007e8a);
preg_match ("|Position:(.*)\||is", $Vd6e04792, $V4757fe07); preg_match ('|From(.*)To|is', $Vd6e04792, $Vd98a07f8);
preg_match ('| To (.*)|is', $Vd6e04792, $V01b6e203); $Ve0a40931[] = array( 'position' => htmlspecialchars_decode (trim ($V4757fe07[1])),
 'company' => htmlspecialchars_decode (trim ($Vc1007e8a[1])), 'from' => htmlspecialchars_decode (trim ($Vd98a07f8[1])),
 'to' => htmlspecialchars_decode (trim ($V01b6e203[1])), ); } return $Ve0a40931; } public function getDuplicates ($V10573b87) {
 global $db, $app_list_strings, $sugar_config; if ($this->V128a45e9== 'PRO') { $V36cd38f4 = array(
 'module' => 'Users', 'id' => $this->V9b207167['current_user_id'], ); $V3483d705 = $this->fetchTeamsIds ($V36cd38f4);
$V90aa8f58 = $this->V9b207167['ignore_dublicates_team_security']; } require_once 'modules/RLS_LinkedinParserConfig/LinkedinParserSettingsClass.php';
$LinkedinParserSettingsClass = new LinkedinParserSettingsClass ($V10573b87); $V63fb70e2 = $LinkedinParserSettingsClass->getLinkedinSettings ();
 if ($sugar_config['dbconfig']['db_type'] == 'mssql') $Vaa9f73ee = array ('mysql' => '', 'mssql' => 'TOP 1');
else $Vaa9f73ee = array ('mysql' => 'LIMIT 0,1', 'mssql' => ''); $V22450232 = $this->V65390101[$this->V128a45e9];
foreach ($V22450232['mapping_for_standart_modules'] as $module_name => $Ve350ea9f) { if (($this->V128a45e9== 'PRO') && ($module_name == 'rls_Candidates')) {
 $Vef336b48 = loadBean ('RLS_Candidates'); } else { $Vef336b48 = loadBean ($module_name); } $V09065bdb = $Vef336b48->table_name;
$Vaab9e1de = $Vef336b48->table_name; if ($module_name == 'rls_Candidates' && !$this->V0c545aa9) { continue;
} $V84fee2c1 = $V63fb70e2['dublicate']['enable'][$module_name]; $V84fee2c1 = explode (',', $V84fee2c1);
if ($module_name == 'rls_Candidates') { $V84fee2c1[] = 'email1'; $V84fee2c1[] = 'linkedin_account';
} else { $V84fee2c1[] = 'email1'; $V84fee2c1[] = 'rls_linkedin_account_c'; } foreach ($V84fee2c1 as $Vbd7d7f47) {
 $Vf72cb965 = array(); if (array_key_exists ($Vbd7d7f47, $Vef336b48->field_defs)) { if ($Vbd7d7f47 == 'email1') {
 if (empty ($V10573b87['candidate_form']['email'])) continue; $V0c83f57c = $db->quote($V10573b87['candidate_form']['email']);
 $Vac5c74b6 = "SELECT {$Vaa9f73ee['mssql']} {$Vaab9e1de}.id FROM {$Vaab9e1de} LEFT JOIN email_addr_bean_rel ON (
 {$Vaab9e1de}.id=email_addr_bean_rel.bean_id AND email_addr_bean_rel.bean_module='{$Vef336b48->module_name}' AND
 email_addr_bean_rel.deleted=0) LEFT JOIN email_addresses ON ( email_addr_bean_rel.email_address_id = email_addresses.id AND 
 email_addresses.deleted=0) WHERE email_addresses.email_address='{$V0c83f57c}' AND {$Vaab9e1de}.deleted=0 {$Vaa9f73ee['mysql']}";
} else { $Vd74728a6 = ''; if (array_key_exists ('source', $Vef336b48->field_defs[$Vbd7d7f47]) && $Vef336b48->field_defs[$Vbd7d7f47]['source'] == 'custom_fields') {
 $V09065bdb = $Vef336b48->table_name . '_cstm'; $Vd74728a6 = ' LEFT JOIN ' . $Vef336b48->table_name . '_cstm ON ('
 . $Vef336b48->table_name . '.id=' . $Vef336b48->table_name . '_cstm.id_c) '; } $V628bc15e = array_search ($Vbd7d7f47, $Ve350ea9f);
if ($Vbd7d7f47 == 'full_name') { $V628bc15e = 'full_name'; } if (!$V628bc15e) { continue; } if ($V628bc15e == 'full_name' && $Vbd7d7f47 != 'name'
 ) { $Vfca2d57b = explode (' ', $V10573b87['candidate_form']['full_name']); $first_name = array_shift ($Vfca2d57b);
$last_name = implode (' ', $Vfca2d57b); if ($Vbd7d7f47 == 'first_name') { $Vf72cb965[] = $V09065bdb
 . '.first_name = ' . $Vef336b48->db->quoted ($first_name, false); } if ($Vbd7d7f47 == 'last_name') {
 $Vf72cb965[] = $V09065bdb . '.last_name = ' . $Vef336b48->db->quoted ($last_name, false); } if ($Vbd7d7f47 == 'full_name') {
 $Vf72cb965[] = $V09065bdb . '.first_name = ' . $Vef336b48->db->quoted ($first_name, false); $Vf72cb965[] = $V09065bdb
 . '.last_name = ' . $Vef336b48->db->quoted ($last_name, false); } if ($Vbd7d7f47 == 'full_name') {
 $V567904ef = ' WHERE (' . implode (' AND ', $Vf72cb965) . ')'; } else { $V567904ef = ' WHERE (' . implode (' OR ', $Vf72cb965) . ')';
} } else { $Vf72cb965[] = $V09065bdb . '.' . $Vbd7d7f47 . ' = ' . $Vef336b48->db->quoted ($V10573b87['candidate_form'][$V628bc15e], false);
$V567904ef = ' WHERE (' . implode (' OR ', $Vf72cb965) . ')'; } $Vac5c74b6 = 'SELECT ' . $Vef336b48->table_name . '.id
 FROM ' . $Vef336b48->table_name . ' ' . $Vd74728a6 . $V567904ef . ' AND ' . $Vef336b48->table_name . '.deleted=0';
} $Vb4a88417 = $db->query ($Vac5c74b6); $Vb4a88417 = $db->fetchByAssoc ($Vb4a88417); if (empty ($Vb4a88417)) {
 continue; } else { $Vb4a88417 = $db->query ($Vac5c74b6); } while ($Vf1965a85 = $db->fetchByAssoc ($Vb4a88417)) {
 if (($this->V128a45e9== 'PRO') && !$V90aa8f58) { if ($module_name == 'rls_Candidates') { $module_name = 'RLS_Candidates';
} $V36cd38f4 = array( 'module' => $module_name, 'id' => $Vf1965a85['id'], ); $V5d075b8f = array_intersect_key ($this->fetchTeamsIds ($V36cd38f4), $V3483d705);
if (empty ($V5d075b8f)) { continue; } } $Vef336b48->disable_row_level_security = true; $Vef336b48->retrieve ($Vf1965a85['id']);
$V21ffce5b = array(); if ($module_name == 'rls_Candidates') { $module_name = $this->V65390101[$this->V128a45e9]['rls_Candidates'];
} $V21ffce5b['module'] = $module_name; $V21ffce5b['module_label'] = translate('LBL_MODULE_NAME', $module_name);
$V21ffce5b['id'] = $Vf1965a85['id']; $V21ffce5b['match_on_the_field'] = $Vbd7d7f47; $V21ffce5b['date_entered'] = $Vef336b48->date_entered;
foreach ( $Ve350ea9f as $V73f329f1 => $Vd3436d4b ) { if ($V73f329f1 == 'full_name' && $module_name != 'Accounts'
 ) { $V21ffce5b[$V73f329f1] = $Vef336b48->first_name . ' ' . $Vef336b48->last_name; } else { $V21ffce5b[$V73f329f1] = $Vef336b48->$Vd3436d4b;
} } if ($module_name == 'Contacts') { $V21ffce5b['current_workplace'] = $Vef336b48->V9af10771; } $V8ead3ecd = array(
 array( 'label' => 'Module', 'name' => 'module_label', ), array( 'label' => 'Date Created', 'name' => 'date_entered',
 ), ); $this->V9b207167['params'][$Vf1965a85['id']] = $V21ffce5b; $this->V9b207167['additional_fields_for_duplicates'] = $V8ead3ecd;
} } } } if (empty ($this->V9b207167['params'])) { $this->setWarning ('No duplicates were found'); return false;
} else { $this->setSuccess (count ($this->V9b207167['params']) . ' reccords was found'); } return true;
} public function getDuplicatesManual ($V10573b87) { global $db, $app_list_strings; if ($this->V128a45e9== 'PRO') {
 $V36cd38f4 = array( 'module' => 'Users', 'id' => $this->V9b207167['current_user_id'], ); $V3483d705 = $this->fetchTeamsIds ($V36cd38f4);
$V90aa8f58 = $this->V9b207167['ignore_dublicates_team_security']; } $V70472ca7 = array( 'CE' => array(
 'rls_Candidates' => array( 'fields' => array( 'last_name' => 'last_name', 'first_name' => 'first_name',
 'locality' => 'primary_address_street', ), 'rel' => array( 'headline' => ' LEFT JOIN rls_employment_rls_candidates_c ON (rls_candidates.id=rls_employment_rls_candidates_c.rls_employment_rls_candidatesrls_candidates_ida)
 LEFT JOIN rls_employment ON (rls_employment.id=rls_employment_rls_candidates_c.rls_employment_rls_candidatesrls_employment_idb) ',
 ), ), 'Contacts' => array( 'fields' => array( 'last_name' => 'last_name', 'first_name' => 'first_name',
 'locality' => 'primary_address_street', 'headline' => 'rls_last_position_c', ), 'rel' => array(
 'headline' => '', ), ), 'Accounts' => array( 'fields' => array( 'last_name' => 'name', 'first_name' => 'name',
 'locality' => 'billing_address_street', 'headline' => 'rls_last_position_c', ), 'rel' => array(
 'headline' => '', ), ), 'Leads' => array( 'fields' => array( 'last_name' => 'last_name', 'first_name' => 'first_name',
 'locality' => 'primary_address_street', 'headline' => 'rls_last_position_c', ), 'rel' => array(
 'headline' => '', ), ), 'Prospects' => array( 'fields' => array( 'last_name' => 'last_name', 'first_name' => 'first_name',
 'locality' => 'primary_address_street', 'headline' => 'rls_last_position_c', ), 'rel' => array(
 'headline' => '', ), ), ), 'PRO' => array( 'rls_Candidates' => array( 'fields' => array( 'last_name' => 'last_name',
 'first_name' => 'first_name', 'locality' => 'primary_address_street', 'headline' => 'current_position',
 ), 'rel' => array( 'headline' => '', ), ), 'Contacts' => array( 'fields' => array( 'last_name' => 'last_name',
 'first_name' => 'first_name', 'locality' => 'primary_address_street', 'headline' => 'rls_last_position_c',
 ), 'rel' => array( 'headline' => '', ), ), 'Accounts' => array( 'fields' => array( 'last_name' => 'name',
 'first_name' => 'name', 'locality' => 'billing_address_street', 'headline' => 'rls_last_position_c',
 ), 'rel' => array( 'headline' => '', ), ), 'Leads' => array( 'fields' => array( 'last_name' => 'last_name',
 'first_name' => 'first_name', 'locality' => 'primary_address_street', 'headline' => 'rls_last_position_c',
 ), 'rel' => array( 'headline' => '', ), ), 'Prospects' => array( 'fields' => array( 'last_name' => 'last_name',
 'first_name' => 'first_name', 'locality' => 'primary_address_street', 'headline' => 'rls_last_position_c',
 ), 'rel' => array( 'headline' => '', ), ), ), ); $V22450232 = $this->V65390101[$this->V128a45e9];
foreach ( $V22450232['mapping_for_standart_modules'] as $module_name => $Ve350ea9f ) { $Vef983058 = '';
$V18f214ce = array(); if (array_key_exists ('search_fields', $V10573b87) && !empty ($V10573b87['search_fields'])
 ) { foreach ($V10573b87['search_fields'] as $V51549dd5) { if ($module_name == 'rls_Candidates' && $V51549dd5 == 'headline' && $this->V128a45e9== 'CE'
 ) { $Vef983058 = 'headline'; } else { $V18f214ce[] = $V70472ca7[$this->V128a45e9][$module_name]['fields'][$V51549dd5];
} } } $V18f214ce = array_unique ($V18f214ce); $Vef336b48 = loadBean ($module_name); $V09065bdb = $Vef336b48->table_name;
if ($module_name == 'rls_Candidates' && !$this->V0c545aa9 ) { continue; } $Vf72cb965 = array(); foreach ($V18f214ce as $Vbd7d7f47) {
 if (array_key_exists ($Vbd7d7f47, $Vef336b48->field_defs)) { $Vd74728a6 = ''; if (array_key_exists ('source', $Vef336b48->field_defs[$Vbd7d7f47]) && $Vef336b48->field_defs[$Vbd7d7f47]['source'] == 'custom_fields'
 ) { $V09065bdb = $Vef336b48->table_name . '_cstm'; $Vd74728a6 .= ' LEFT JOIN ' . $Vef336b48->table_name . '_cstm ON ('
 . $Vef336b48->table_name . '.id=' . $Vef336b48->table_name . '_cstm.id_c) '; } $V628bc15e = array_search ($Vbd7d7f47, $V70472ca7[$this->V128a45e9][$module_name]['fields']);
switch ($Vbd7d7f47) { case 'first_name': $Vfca2d57b = explode (' ', $V10573b87['candidate_form']['full_name']);
$Vf72cb965[] = $V09065bdb . '.first_name = ' . $Vef336b48->db->quoted ($Vfca2d57b[0], false); $Vf72cb965[] = $Vef336b48->table_name
 . '.deleted = 0'; break; case 'last_name': $Vfca2d57b = explode (' ', $V10573b87['candidate_form']['full_name']);
$Vf72cb965[] = $V09065bdb . '.last_name = ' . $Vef336b48->db->quoted ($Vfca2d57b[1], false); $Vf72cb965[] = $Vef336b48->table_name
 . '.deleted = 0'; break; default: if ($Vbd7d7f47 == 'name') { $V628bc15e = 'full_name'; } $Vf72cb965[] = $V09065bdb . '.'
 . $Vbd7d7f47 . ' = ' . $Vef336b48->db->quoted ($V10573b87['candidate_form'][$V628bc15e], false); $Vf72cb965[] = $Vef336b48->table_name
 . '.deleted = 0'; } } } if (!empty ($Vef983058)) { $Vd74728a6 .= $V70472ca7[$this->V128a45e9]['rls_Candidates']['rel']['headline'];
$Vf72cb965[] = 'rls_employment.name = ' . $Vef336b48->db->quoted ($V10573b87['candidate_form']['headline'], false);
$Vf72cb965[] = 'rls_employment.rls_current = 1'; $Vf72cb965[] = 'rls_employment.deleted = 0'; $Vf72cb965[] = 'rls_employment_rls_candidates_c.deleted = 0';
} if (empty ($Vf72cb965)) { continue; } $V567904ef = ' WHERE ' . implode (' AND ', $Vf72cb965); $Vac5c74b6 = 'SELECT ' . $Vef336b48->table_name . '.id
 FROM ' . $Vef336b48->table_name . ' ' . $Vd74728a6 . $V567904ef . ' AND ' . $Vef336b48->table_name . '.deleted=0';
$Vb4a88417 = $db->query ($Vac5c74b6); if ($Vb4a88417->num_rows == 0) { continue; } while ($Vf1965a85 = $db->fetchByAssoc ($Vb4a88417)) {
 if (($this->V128a45e9== 'PRO') && !$V90aa8f58) { $V36cd38f4 = array( 'module' => $module_name, 'id' => $Vf1965a85['id'],
 ); $V5d075b8f = array_intersect_key ($this->fetchTeamsIds ($V36cd38f4), $V3483d705); if (empty ($V5d075b8f)) {
 continue; } } $Vef336b48->disable_row_level_security = true; $Vef336b48->retrieve ($Vf1965a85['id']);
$V21ffce5b = array(); if ($module_name == 'rls_Candidates') { $module_name = $this->V65390101[$this->V128a45e9]['rls_Candidates'];
} $V21ffce5b['module'] = $module_name; $V21ffce5b['module_label'] = translate('LBL_MODULE_NAME', $module_name);
$V21ffce5b['id'] = $Vf1965a85['id']; $V21ffce5b['match_on_the_field'] = $V18f214ce; $V21ffce5b['date_entered'] = $Vef336b48->date_entered;
foreach ($Ve350ea9f as $V73f329f1 => $Vd3436d4b) { if ($V73f329f1 == 'full_name' && $module_name != 'Accounts'
 ) { $V21ffce5b[$V73f329f1] = $Vef336b48->first_name . ' ' . $Vef336b48->last_name; } else { $V21ffce5b[$V73f329f1] = $Vef336b48->$Vd3436d4b;
} } if ($module_name == 'Contacts') { $V21ffce5b['current_workplace'] = $Vef336b48->V9af10771; } $V8ead3ecd = array(
 array( 'label' => 'Module', 'name' => 'module_label', ), array( 'label' => 'Date Created', 'name' => 'date_entered',
 ), ); $this->V9b207167['params'][$Vf1965a85['id']] = $V21ffce5b; $this->V9b207167['additional_fields_for_duplicates'] = $V8ead3ecd;
} } if (empty ($this->V9b207167['params'])) { $this->setWarning ('No duplicates found'); return false;
} else { $this->setSuccess (count ($this->V9b207167['params']) . ' reccords was found'); } return true;
} public function getCandidateById2 ($V10573b87) { global $db, $sugar_config; if (!array_key_exists ('memberId2', $V10573b87) || empty ($V10573b87['memberId2'])
 ) { $this->setError ('Empty memberId2'); return false; } $id = $V10573b87['memberId2']; $V22450232 = $this->V65390101[$this->V128a45e9];
foreach ( $V22450232['mapping_for_standart_modules'] as $module_name => $Ve350ea9f ) { if ($module_name == 'rls_Candidates') {
 if ($this->V0c545aa9) { if ($sugar_config['dbconfig']['db_type'] == 'mssql') { $Vac5c74b6 = 'SELECT TOP 1
 rls_candidates.id FROM rls_candidates WHERE rls_candidates.linkedin_account2=\'' . $id . '\' AND rls_candidates.deleted=0
 ORDER BY rls_candidates.date_entered DESC'; } else { $Vac5c74b6 = 'SELECT rls_candidates.id FROM rls_candidates
 WHERE rls_candidates.linkedin_account2=\'' . $id . '\' AND rls_candidates.deleted=0 ORDER BY rls_candidates.date_entered DESC
 LIMIT 0,1'; } $Vef336b48 = loadBean ($this->V65390101[$this->V128a45e9]['rls_Candidates']); } else {
 continue; } } else { $Vef336b48 = loadBean ($module_name); if ($sugar_config['dbconfig']['db_type'] == 'mssql') {
 $Vac5c74b6 = 'SELECT TOP 1 ' . $Vef336b48->table_name . '.id FROM ' . $Vef336b48->table_name . '
 LEFT JOIN ' . $Vef336b48->table_name . '_cstm ON (' . $Vef336b48->table_name . '.id = ' . $Vef336b48->table_name . '_cstm.id_c )
 WHERE ' . $Vef336b48->table_name . '_cstm.rls_linkedin_account2_c=\'' . $id . '\' AND ' . $Vef336b48->table_name . '.deleted=0
 ORDER BY ' . $Vef336b48->table_name . '.date_entered DESC'; } else { $Vac5c74b6 = 'SELECT ' . $Vef336b48->table_name . '.id
 FROM ' . $Vef336b48->table_name . ' LEFT JOIN ' . $Vef336b48->table_name . '_cstm ON (' . $Vef336b48->table_name . '.id = '
 . $Vef336b48->table_name . '_cstm.id_c ) WHERE ' . $Vef336b48->table_name . '_cstm.rls_linkedin_account2_c=\'' . $id . '\'
 AND ' . $Vef336b48->table_name . '.deleted=0 ORDER BY ' . $Vef336b48->table_name . '.date_entered DESC
 LIMIT 0,1'; } } $Vb4a88417 = $db->query ($Vac5c74b6); $Vb4a88417 = $db->fetchByAssoc ($Vb4a88417);
if (empty ($Vb4a88417)) { continue; } else { $Vb4a88417 = $db->query ($Vac5c74b6); } while ($Vf1965a85 = $db->fetchByAssoc ($Vb4a88417)) {
 $Vef336b48->disable_row_level_security = true; $Vef336b48->retrieve ($Vf1965a85['id']); $this->V9b207167['params'] = array();
if ($module_name == 'rls_Candidates') { $module_name = $this->V65390101[$this->V128a45e9]['rls_Candidates'];
} $this->V9b207167['params']['module'] = $module_name; $this->V9b207167['params']['id'] = $Vf1965a85['id'];
$this->setSuccess ('The candidate with linkedin_id2 = ' . $id . ' was found'); } break; } if (empty ($this->V9b207167['params'])) {
 $this->setWarning ('The candidate with linkedin_id2 = ' . $id . ' was not found'); return false; }
return true; } public function saveMsgs ($V10573b87) { global $log; $log->fatal ('saveMsgs'); if (!array_key_exists ($this->V128a45e9, $this->V65390101)) {
 $this->setError ('Undefined SugarCRM type = ' . $this->V128a45e9); return false; } $V5b1d1173 = $this->V65390101[$this->V128a45e9];
$log->fatal (print_r ($V5b1d1173['notes_relationship'], true)); if (!array_key_exists ('module', $V10573b87) || empty ($V10573b87['module'])
 ) { if ($this->V0c545aa9) { $V10573b87['module'] = $this->V65390101[$this->V128a45e9]['rls_Candidates'];
} else { $V10573b87['module'] = 'Leads'; } } $Vef336b48 = loadBean ($V10573b87['module']); $Vef336b48->disable_row_level_security = true;
$Vef336b48->retrieve ($V10573b87['memberId']); if ($V10573b87['module'] == 'rls_Candidates' || $V10573b87['module'] == 'RLS_Candidates'
 ) { $Ve404927e = $V5b1d1173['notes_relationship']['rls_Candidates']; } else { $Ve404927e = $V5b1d1173['notes_relationship'][$V10573b87['module']];
} $Vef336b48->load_relationships ($Ve404927e); foreach ($V10573b87['msgs'] as $Vf1965a85) { $V5fc73231 = $this->convertFromRusToEn2 ($Vf1965a85['date']);
$Vd611c46f = $V5fc73231 . ' ' . $Vf1965a85['time']; $V7478fe57 = strtotime ($Vd611c46f); $V63521cea = date ('Y-m-d H:i:s', $V7478fe57);
$Vf1965a85['time_str'] = $V63521cea; $name = $Vf1965a85['title'] . '-' . $V63521cea; $V41f71e0f = $this->getNotesIdByName ($name, $V10573b87['module'], $V10573b87['memberId']);
if (empty ($V41f71e0f)) { $V4358b500 = loadBean ('Notes'); $V4358b500->name = $this->generateNotesName ($Vf1965a85);
if (empty ($V4358b500->name)) { $V4358b500->name = $name; } $V4358b500->rls_name_c = $name; $V4358b500->linkedine_url_c = $Vf1965a85['win_url'];
$V4358b500->description = $Vf1965a85['msg_body']; $V4358b500->team_id = '1'; $V4358b500->save (); $Vef336b48->$Ve404927e->add (array($V4358b500->id));
} } $this->setSuccess ('Success'); return true; } public function getNotesIdByName ($name, $module_name, $Vc9799665) {
 global $db; $V48e255ae = ''; if ($sugar_config['dbconfig']['db_type'] == 'mssql') { $Vac5c74b6 = 'SELECT TOP 1 id
 FROM notes LEFT JOIN notes_cstm ON (notes.id=notes_cstm.id_c) WHERE notes.parent_type = \'' . $module_name . '\' AND
 notes.parent_id = \'' . $Vc9799665 . '\' AND notes_cstm.rls_name_c = \'' . $name . '\' AND notes.deleted=0';
} else { $Vac5c74b6 = 'SELECT id FROM notes LEFT JOIN notes_cstm ON (notes.id=notes_cstm.id_c) WHERE
 notes.parent_type = \'' . $module_name . '\' AND notes.parent_id = \'' . $Vc9799665 . '\' AND notes_cstm.rls_name_c = \'' . $name . '\' AND
 notes.deleted=0 LIMIT 0,1'; } $Vb4a88417 = $db->query ($Vac5c74b6); while ($Vf1965a85 = $db->fetchByAssoc ($Vb4a88417)) {
 $V48e255ae = $Vf1965a85['id']; } return $V48e255ae; } public function getCurrentPositionCE ($V49c62feb) {
 $Vb4a88417 = array( 'current_employer' => '', 'current_position' => '', ); if (!$V49c62feb->load_relationship ('rls_employment_rls_candidates')) {
 return $Vb4a88417; } $Vb4d58fc4 = $V49c62feb->rls_employment_rls_candidates->getBeans (); foreach ($Vb4d58fc4 as $Ve1671797) {
 if ($Ve1671797->rls_current != 1) { continue; } if ($Ve1671797->load_relationship ('rls_employment_accounts')) {
 $V7a90e38a = $Ve1671797->rls_employment_accounts->getBeans (); $V0cc175b9 = current ($V7a90e38a); if (!empty ($V0cc175b9)) {
 $Vb4a88417['current_employer'] = $V0cc175b9->name; } } $Vb4a88417['current_position'] = $Ve1671797->name;
} return $Vb4a88417; } public function fetchTeamsIds ($V36cd38f4) { $Vb4a88417 = array(); if ($this->V128a45e9!= 'PRO') {
 return $Vb4a88417; } require_once 'modules/Teams/TeamSet.php'; require_once 'modules/Teams/Team.php';
if ($V36cd38f4 instanceof SugarBean) { $V9403382c = $V36cd38f4; } elseif (is_array ($V36cd38f4) && isset ($V36cd38f4['module']) && isset ($V36cd38f4['id'])
 ) { $V9403382c = BeanFactory::getBean ($V36cd38f4['module'], $V36cd38f4['id'], array('disable_row_level_security' => '1'));
} else { return; } if ($V9403382c instanceof User) { $Vf894427c = new Team(); $teams = $Vf894427c->get_teams_for_user ($V9403382c->id);
} else { $V91048868 = new TeamSet(); $teams = $V91048868->getTeams ($V9403382c->team_set_id); } foreach ($teams as $V2063c160) {
 if ($V2063c160 instanceof Team) { $Vb4a88417[$V2063c160->id] = $V2063c160->name; } } return $Vb4a88417;
} public function copyTeams ($V36cd38f4, $V6990a543) { if ($this->V128a45e9!= 'PRO') { return false;
} require_once 'modules/Teams/TeamSet.php'; if ($V36cd38f4 instanceof SugarBean) { $V9403382c = $V36cd38f4;
} elseif (is_array ($V36cd38f4) && isset ($V36cd38f4['module']) && isset ($V36cd38f4['id']) ) { $V9403382c = BeanFactory::getBean ($V36cd38f4['module'], $V36cd38f4['id'], array('disable_row_level_security' => '1'));
} else { return false; } if ($V6990a543 instanceof SugarBean) { $V167d475b = $V6990a543; } elseif (is_array ($V6990a543) && isset ($V6990a543['module']) && isset ($V6990a543['id'])
 ) { $V167d475b = BeanFactory::getBean ($V6990a543['module'], $V6990a543['id'], array('disable_row_level_security' => '1'));
} else { return false; } $V43415370 = $this->fetchTeamsIds ($V9403382c); $Vfe1d7622 = $this->fetchTeamsIds ($V9403382c);
$Ve9e29477 = $V9403382c->team_id; $V167d475b->team_id = $Ve9e29477; $V167d475b->load_relationship ('teams');
if (($V167d475b->team_set_id = 1) && ($V167d475b->team_id = 1) ) { $V167d475b->teams->replace (array_keys ($V43415370));
} else { $Va3321944 = $V43415370 + $Vfe1d7622; $V167d475b->teams->replace (array_keys ($Va3321944));
} return $V167d475b->save (); } public function getTargetListDropdown ($V10573b87) { global $db; if ($this->V128a45e9== 'PRO') {
 $V36cd38f4 = array( 'module' => 'Users', 'id' => $this->V9b207167['current_user_id'], ); $V3483d705 = $this->fetchTeamsIds ($V36cd38f4);
$V90aa8f58 = $this->V9b207167['ignore_target_list_security']; } $V9d9b1958 = array(); $V6c7826bd = $db->quote (html_entity_decode ($V10573b87['targetname']));
 $Vd181e4d8 = "SELECT id, name FROM prospect_lists WHERE deleted=0 AND name LIKE '{$V6c7826bd}%'"; $V109176dd = $db->query ($Vd181e4d8);
while ($Vc63be482 = $db->fetchByAssoc ($V109176dd)) { if (($this->V128a45e9== 'PRO') && !$V90aa8f58) {
 $V36cd38f4 = array( 'module' => 'ProspectLists', 'id' => $Vc63be482['id'], ); $V5d075b8f = array_intersect_key ($this->fetchTeamsIds ($V36cd38f4), $V3483d705);
if (empty ($V5d075b8f)) { continue; } } $V9d9b1958[] = array( 'value' => $Vc63be482['id'], 'label' => $Vc63be482['name'],
 ); } if (!empty ($V9d9b1958)) { $this->V9b207167['params']['target_list_dropdawn'] = $V9d9b1958; $this->setSuccess ('Success');
return true; } else { $this->setError ('No Target List was found'); return false; } } public function checkUserSettings () {
 global $db; $this->setSuccess ('Successfully connected'); return true; } public function getJobListDropdown ($V10573b87) {
 global $db; if ($this->V128a45e9== 'PRO') { $V38ddec87 = 'vacancy_id'; $V36cd38f4 = array ('module' => 'Users', 'id' => $this->V9b207167['current_user_id']);
$V3483d705 = $this->fetchTeamsIds ($V36cd38f4); $V90aa8f58 = $this->V9b207167['ignore_job_list_security'];
} else { $V38ddec87 = 'unique_id'; $V90aa8f58 = true; } $V779877d7 = array(); $V59f66362 = array();
foreach ($this->V9b207167['jobs_allow_statuses_list'] as $V6a9904f3) { $V59f66362[] = "rls_jobs.job_status='{$V6a9904f3}'";
} $V2d34fed9 = empty ($V59f66362) ? '' : 'AND ('.implode(' OR ', $V59f66362).') '; $V209d8085 = $db->quote (html_entity_decode ($V10573b87['jobname'])); 
 if ($V2d34fed9 == 'AND (rls_jobs.job_status=\'\') ') { $V2d34fed9 = 'AND (rls_jobs.job_status=\'active\' 
 OR rls_jobs.job_status=\'onhold\' OR rls_jobs.job_status=\'cancelled\' OR rls_jobs.job_status=\'closed\' 
 OR rls_jobs.job_status=\'upcoming\' OR rls_jobs.job_status=\'filled\') '; } $Vac5c74b6 = "SELECT id,name, {$V38ddec87} FROM rls_jobs WHERE deleted=0 {$V2d34fed9} AND name LIKE '{$V209d8085}%'";
$Va7fea731 = $db->query ($Vac5c74b6); while ($Vd34063e8 = $db->fetchByAssoc ($Va7fea731)) { if (!$V90aa8f58) {
 $V36cd38f4 = array ('module' => 'RLS_Jobs', 'id' => $Vd34063e8['id']); $V5d075b8f = array_intersect_key ($this->fetchTeamsIds ($V36cd38f4), $V3483d705);
if (empty ($V5d075b8f)) continue; } $V779877d7[] = array( 'value' => $Vd34063e8['id'], 'label' => $Vd34063e8['name'] . ' ' . $Vd34063e8[$V38ddec87],
 ); } if (!empty ($V779877d7)) { $this->V9b207167['params']['job_list'] = $V779877d7; $this->setSuccess ('Success');
return true; } else { $this->setError ('No Jobs was found'); return false; } } public function getAccountListDropdown ($V10573b87) {
 global $db; if ($this->V128a45e9== 'PRO') { $V36cd38f4 = array('module' => 'Users', 'id' => $this->V9b207167['current_user_id']);
$V3483d705 = $this->fetchTeamsIds ($V36cd38f4); $V90aa8f58 = $this->V9b207167['ignore_target_list_security'];
} else $V90aa8f58 = true; $V98380910 = array(); $V9af10771 = $db->quote (html_entity_decode ($V10573b87['account_name']));
$V4c693060 = "SELECT id, name FROM accounts WHERE deleted=0 AND name LIKE '{$V9af10771}%'"; $V87b9fb2e = $db->query ($V4c693060);
while ($V09149889 = $db->fetchByAssoc ($V87b9fb2e)) { if (!$V90aa8f58) { $V36cd38f4 = array ('module' => 'Accounts', 'id' => $V09149889['id']);
$V5d075b8f = array_intersect_key ($this->fetchTeamsIds ($V36cd38f4), $V3483d705); if (empty ($V5d075b8f)) continue;
} $V98380910[] = array( 'value' => $V09149889['id'], 'label' => $V09149889['name'], ); } if (!empty ($V98380910)) {
 $this->V9b207167['params']['account_list_dropdown'] = $V98380910; $this->setSuccess ('Success'); return true;
} else { $this->setError ('No Accounts was found'); return false; } } public function setCandidate ($V10573b87) {
 if (!array_key_exists ('candidate_form', $V10573b87)) { $this->setError ('No exists candidate data to save');
return false; } if (!array_key_exists ($this->V128a45e9, $this->V65390101)) { $this->setError ('Undefined SugarCRM type = ' . $this->V128a45e9);
return false; } $V5b1d1173 = $this->V65390101[$this->V128a45e9]; $V4f169128 = $V10573b87['candidate_form'];
if (!array_key_exists ('module', $V4f169128) || empty ($V4f169128['module'])) { foreach ($this->V65390101[$this->V128a45e9]['mapping_for_standart_modules'] as $Vbbbdef4f => $Vd159ca37) {
 if ($Vbbbdef4f == 'rls_Candidates') { $Vbbbdef4f = $this->V65390101[$this->V128a45e9]['rls_Candidates'];
} $V4f169128['module'] = $Vbbbdef4f; } } if (array_key_exists ('search_in_module', $V4f169128) && !empty ($V4f169128['search_in_module'])
 ) { if ($V4f169128['search_in_module'] != $V4f169128['module'] && !( $V4f169128['search_in_module'] == 'rls_Candidates' && $V4f169128['module'] == 'RLS_Candidates'
 ) ) { if ($V4f169128['search_in_module'] == 'rls_Candidates') { $V4f169128['search_in_module'] = $this->V65390101[$this->V128a45e9]['rls_Candidates'];
} $V4f169128['module'] = $V4f169128['search_in_module']; $V4f169128['candidate_id'] = ''; } } if (strtolower ($V4f169128['module']) != 'rls_candidates' && !empty ($V4f169128['job'])
 ) { $this->setError ('Only candidates can be assigned to Job'); return false; } $V65afdfb4 = $this->saveCandidate ($V5b1d1173, $V4f169128);
if ( array_key_exists ('target_list_dropdown', $V4f169128) && !empty ($V4f169128['target_list_dropdown'])
 ) { $V65afdfb4->load_relationship ('prospect_lists'); $V65afdfb4->prospect_lists->add (array($V4f169128['target_list_dropdown']));
if ($this->V128a45e9== 'PRO') { $V36cd38f4 = array( 'module' => 'ProspectLists', 'id' => $V4f169128['target_list_dropdown'],
 ); $this->copyTeams ($V36cd38f4, $V65afdfb4); $this->saveApplicationPRO ($V5b1d1173, $V4f169128, $V65afdfb4);
} } $this->saveSkills ($V65afdfb4, $V4f169128); if ($this->V0c545aa9&& (self::CANDIDATE_MODULE == strtoupper ($V4f169128['module']))
 ) { $Vfbbf5329 = BeanFactory::getBean ('rls_Employment'); $V9ab4bea4 = BeanFactory::getBean ('RLS_Employment'); 
 if (!empty ($Vfbbf5329) || !empty ($V9ab4bea4) ) { $V6c4c3438 = $this->setCurrentWorkplace ($V5b1d1173, $V4f169128, $V65afdfb4);
$this->saveCandidatesExperience ($V5b1d1173, $V4f169128, $V65afdfb4, $V6c4c3438); } if ($this->V128a45e9== 'CE') {
 $this->saveApplicationCE ($V5b1d1173, $V4f169128, $V65afdfb4); } if ($this->V128a45e9== 'PRO') { global $db;
$Ve9b15522 = json_decode (html_entity_decode ($_REQUEST['rest_data'])); $Ve9b15522 = $db->quote ($Ve9b15522->profile->profile_url);
$Vac5c74b6 = "UPDATE rls_candidates SET linkedin_url='{$Ve9b15522}' WHERE id='{$V65afdfb4->id}'"; $db->query ($Vac5c74b6);
$this->saveApplicationPRO ($V5b1d1173, $V4f169128, $V65afdfb4); } } if ($this->V128a45e9== 'CE') { $Vef336b48 = $this->saveImgCE ($V5b1d1173, $V4f169128, $V65afdfb4);
} $this->setSuccess ('Success'); return true; } public function saveApplicationCE ($V5b1d1173, $V4f169128, $V65afdfb4) {
 global $db; if (array_key_exists ('job', $V4f169128) && !empty ($V4f169128['job'])) { $Vd697ea38 = $db->quote ($V4f169128['job']);
$Vac5c74b6 = "SELECT id FROM rls_applications WHERE rls_candidates_id_c='{$V65afdfb4->id}' AND rls_jobs_id_c='{$Vd697ea38}' AND deleted=0";
$Vb4a88417 = $db->query ($Vac5c74b6); if ($Vb4a88417->num_rows == 0) { require_once('modules/'.$this->V65390101[$this->V128a45e9]['rls_Candidates'].'/helper/RlsHelper.php');
if (method_exists ('RlsHelper', 'createApplication')) { RlsHelper::createApplication ($V65afdfb4->id, $Vd697ea38);
} else { $V63469c3c = loadBean ($V5b1d1173['rls_Applications']); $V63469c3c->name = $V65afdfb4->full_name;
$V63469c3c->$V5b1d1173['applications_field']['job_id'] = $Vd697ea38; $V63469c3c->$V5b1d1173['applications_field']['candidate_id'] = $V65afdfb4->id;
$V63469c3c->assigned_user_id = $V4f169128['assignt_to_id']; $V63469c3c->team_id = '1'; $V63469c3c->save ();
} } } } public function saveApplicationPRO ($V5b1d1173, $V4f169128, $V65afdfb4) { global $db; if (array_key_exists ('job', $V4f169128) && !empty ($V4f169128['job'])) {
 $Vd697ea38 = $db->quote ($V4f169128['job']); $Vac5c74b6 = "SELECT rls_applications.id FROM rls_applications
 LEFT JOIN rls_applications_rls_candidates_c ON rls_applications.id = rls_applications_rls_candidates_c.rls_applications_rls_candidatesrls_applications_idb
 LEFT JOIN rls_applications_rls_jobs_c ON rls_applications.id = rls_applications_rls_jobs_c.rls_applications_rls_jobsrls_applications_idb
 WHERE rls_applications_rls_jobs_c.deleted=0 AND rls_applications_rls_candidates_c.deleted=0 AND rls_applications_rls_candidates_c.rls_applications_rls_candidatesrls_candidates_ida='{$V65afdfb4->id}'
 AND rls_applications_rls_jobs_c.rls_applications_rls_jobsrls_jobs_ida='{$Vd697ea38}'"; $Vb4a88417 = $db->query ($Vac5c74b6);
 if ($Vb4a88417->num_rows == 0) { $V63469c3c = loadBean ('RLS_Applications'); $V63469c3c->rls_applications_rls_jobsrls_jobs_ida = $Vd697ea38;
$V63469c3c->rls_applications_rls_candidatesrls_candidates_ida = $V65afdfb4->id; $V63469c3c->assigned_user_id = $V4f169128['assignt_to_id'];
$V63469c3c->team_id = '1'; $V63469c3c->save (); $V36cd38f4 = array ('module' => 'RLS_Jobs', 'id' => $Vd697ea38);
$this->copyTeams ($V36cd38f4, $V63469c3c); } } } public function saveImg ($V5b1d1173, $V4f169128, $V65afdfb4) {
 if (empty ($V65afdfb4->picture) && array_key_exists ('img_url', $V4f169128) && !empty ($V4f169128['img_url'])
 ) { $V6e933716 = create_guid (); $file = new UploadFile(); $file->temp_file_location = $V4f169128['img_url'];
if ($file->get_file_contents ()) { $file->file = $file->get_file_contents (); $file->use_soap = true;
$file->final_move ($V6e933716); $V65afdfb4->picture = $V6e933716; } } return $V65afdfb4; } public function saveImgCE ($V5b1d1173, $V4f169128, $V65afdfb4) {
 if (property_exists ($V65afdfb4, 'photo') && array_key_exists ('img_url', $V4f169128) && !empty ($V4f169128['img_url'])
 ) { if (!empty ($V65afdfb4->id)) { $V6e933716 = $V65afdfb4->id . '_photo'; $file = new UploadFile();
$file->temp_file_location = $V4f169128['img_url']; if ($file->get_file_contents ()) { $file->file = $file->get_file_contents ();
$file->use_soap = true; $file->final_move ($V6e933716); $V65afdfb4->photo = 'Photo.jpg'; $V65afdfb4->save ();
} } } return $V65afdfb4; } public function setCurrentWorkplace ($V5b1d1173, $V4f169128, $V65afdfb4) {
 if (array_key_exists ('headline', $V4f169128) && !empty ($V4f169128['headline'])) { $V447d3092 = '';
$Vc1007e8a = ''; if ( array_key_exists ('current_workplace', $V4f169128) && !empty ($V4f169128['current_workplace'])
 ) { $V447d3092 = $this->getAccountByName ($V4f169128['current_workplace']); if (!empty ($V447d3092)) {
 $Vc1007e8a = $V4f169128['current_workplace']; } else { $V93c731f1 = loadBean ('Accounts'); $V93c731f1->name = $V4f169128['current_workplace'];
$V93c731f1->assigned_user_id = $V4f169128['assignt_to_id']; $V93c731f1->team_id = '1'; $V93c731f1->save ();
$V447d3092 = $V93c731f1->id; $Vc1007e8a = $V4f169128['current_workplace']; } } $Vfff70c78 = loadBean ($V5b1d1173['rls_Employment']);
$Vfff70c78->disable_row_level_security = true; $Vbce5bd07 = $this->getPositionByName ($V4f169128['headline'], $V65afdfb4->id, $V447d3092); 
 if ($this->V128a45e9== 'CE') { $this->resetAllPosition ($V65afdfb4); } if (empty ($Vbce5bd07)) { $Vfff70c78->name = $V4f169128['headline'];
$Vfff70c78->rls_employment_accounts_name = $Vc1007e8a; $Vfff70c78->rls_employment_accountsaccounts_ida = $V447d3092;
$Vfff70c78->rls_employment_rls_candidatesrls_candidates_ida = $V65afdfb4->id; } else { $Vfff70c78->retrieve ($Vbce5bd07);
$Vfff70c78->rls_employment_accounts_name = $Vc1007e8a; $Vfff70c78->rls_employment_accountsaccounts_ida = $V447d3092;
$Vfff70c78->rls_employment_rls_candidatesrls_candidates_ida = $V65afdfb4->id; } $Vfff70c78->$V5b1d1173['employment_field']['current'] = 1;
$Vfff70c78->assigned_user_id = $V4f169128['assignt_to_id']; $Vfff70c78->team_id = '1'; $Vfff70c78->team_set_id = '1'; 
 } return $Vfff70c78->id; } public function resetAllPosition ($V65afdfb4) { $V65afdfb4->load_relationship ('rls_employment_rls_candidates');
$V4cc4f818 = $V65afdfb4->rls_employment_rls_candidates->getBeans (); foreach ($V4cc4f818 as $V20e59536) {
 $V20e59536->rls_current = 0; $V20e59536->team_id = '1'; $V20e59536->save (); } } public function saveCandidate ($V5b1d1173 = array(), $V4f169128) {
 $Ve9b15522 = json_decode (html_entity_decode ($_REQUEST['rest_data'])); if (empty ($V4f169128['module']))
 $module = ($this->V0c545aa9) ? 'rls_Candidates' : 'Leads'; else $module = $V4f169128['module']; if ($module == 'RLS_Candidates') $module = 'rls_Candidates';
if ($module == 'rls_Candidates' && $this->V128a45e9== 'PRO') $Va2f2ed4f = 'RLS_Candidates'; else $Va2f2ed4f = $module;
 $bean = loadBean($Va2f2ed4f); $bean->disable_row_level_security = true; if (array_key_exists ('candidate_id', $V4f169128) && !empty ($V4f169128['candidate_id'])) {
 $bean->retrieve ($V4f169128['candidate_id']); } $Ve350ea9f = $V5b1d1173['mapping_for_standart_modules'][$module];
 foreach ($Ve350ea9f as $V10b20283 => $V78db24b6) {
 if (array_key_exists ($V10b20283, $V4f169128) && !empty ($V4f169128[$V10b20283])) { if ($V10b20283 == 'full_name' && $module != 'Accounts') {
 $Vc5ecfa91 = explode (' ', strip_tags ($V4f169128[$V10b20283])); $bean->first_name = array_shift ($Vc5ecfa91);
$bean->last_name = implode (' ', $Vc5ecfa91); } else { $bean->$V78db24b6 = html_entity_decode (strip_tags ($V4f169128[$V10b20283]));
} } } $Vf48a795d = empty ($V4f169128['current_workplace']) ? '' : $V4f169128['current_workplace']; $Vb1985b5b = empty ($V4f169128['headline']) ? '' : $V4f169128['headline'];
if (empty ($Vf48a795d) || empty ($Vb1985b5b)) { foreach ($V4f169128['experience'] as $Vd6e04792) {
 if ($Vd6e04792['to'] == 'Present' || $Vd6e04792['to'] == 'настоящее время') { $Vf48a795d = $Vd6e04792['company'];
$Vb1985b5b = $Vd6e04792['position']; break; } } } $Vf48a795d = html_entity_decode ($Vf48a795d); $Vb1985b5b = html_entity_decode ($Vb1985b5b);
if ($module == 'rls_Candidates') { $V21232f29 = new Administration(); $V21232f29->retrieveSettings();
if (!empty ($V21232f29->settings['LinkedinParserConfig_candidate_status_f']) && empty ($V4f169128['reccord_status_val'])) {
 $bean->main_status = $V21232f29->settings['LinkedinParserConfig_candidate_status_f']; } if ($this->V128a45e9== 'PRO') {
 $bean->candidate_source = 'linkedin_search'; } else { $bean->source_search = 'Linkedin'; $bean->linkedin_profile = $Ve9b15522->profile->profile_url; 
 } } else { $bean->rls_linkedin_url_c = $Ve9b15522->profile->profile_url; $bean = $this->generateDescription ($V5b1d1173, $V4f169128, $bean);
 if ($module != 'Accounts') { if ($this->V128a45e9== 'PRO') { $bean = $this->saveImg ($V5b1d1173, $V4f169128, $bean);
} $bean->title = $Vb1985b5b; $bean->lead_source = 'Linkedin'; if ($module != 'Contacts') $bean->account_name = $Vf48a795d; else { 
if ($this->V9b207167['show_parse_accounts'] == 1) { $Ve268443e = loadBean ('Accounts'); $Ve268443e->retrieve_by_string_fields (array ('name' => $Vf48a795d, 'deleted' => 0));
if (empty ($Ve268443e->id)) { $Ve268443e->name = $Vf48a795d; $Ve268443e->assigned_user_id = $V4f169128['assignt_to_id'];
$Ve268443e->save(); } $bean->account_id = $Ve268443e->id; } } } } if (empty ($bean->assigned_user_id)) {
 $bean->assigned_user_id = $V4f169128['assignt_to_id']; } if (empty ($bean->team_id)) { $V4da97c90 = loadBean ('Users');
$V4da97c90->retrieve ($V4f169128['assignt_to_id']); $bean->team_id = $V4da97c90->default_team; } $bean->save ();
$Vac5c74b6 = "UPDATE {$bean->table_name} SET created_by = '{$this->current_user}', modified_user_id = '{$this->current_user}'
 WHERE id = '{$bean->id}'"; $GLOBALS['db']->query ($Vac5c74b6); return $bean; } public function generateDescription ($V5b1d1173, $V4f169128 = array(), $V65afdfb4) {
 $Va658279f = ''; if (array_key_exists ('skills_list', $V4f169128) && !empty ($V4f169128['skills_list'])) {
 $Vc25501a4[] = strip_tags (html_entity_decode ($V4f169128['skills_list'])); $Va658279f = implode (', ', $Vc25501a4);
} if (array_key_exists ('other_skills_list', $V4f169128) && !empty ($V4f169128['other_skills_list'])) {
 $Vc25501a4[] = strip_tags (html_entity_decode ($V4f169128['other_skills_list'])); $Va658279f = implode (', ', $Vc25501a4);
} $V14651675 = ''; if (array_key_exists ('experience', $V4f169128) && !empty ($V4f169128['experience']) && is_array ($V4f169128['experience'])) {
 foreach ($V4f169128['experience'] as $Vb0ab0254) { $V93c731f1 = ''; if (array_key_exists ('company', $Vb0ab0254) && !empty ($Vb0ab0254['company'])) {
 $V93c731f1 = html_entity_decode (strip_tags ($Vb0ab0254['company'])); } $V4757fe07 = ''; if (array_key_exists ('position', $Vb0ab0254) && !empty ($Vb0ab0254['position'])) {
 $V4757fe07 = html_entity_decode (strip_tags ($Vb0ab0254['position'])); } $Vd98a07f8 = ''; if (array_key_exists ('from', $Vb0ab0254) && !empty ($Vb0ab0254['from'])) {
 $Vd98a07f8 = 'From ' . strip_tags ($Vb0ab0254['from']); } $V01b6e203 = 'To present'; if (array_key_exists ('to', $Vb0ab0254) && !empty ($Vb0ab0254['to'])) {
 $V01b6e203 = ' To ' . strip_tags ($Vb0ab0254['to']); } $V14651675 .= 'Company:' . $V93c731f1 . ' / Position: '. $V4757fe07 . ' | ' . $Vd98a07f8 . $V01b6e203 . '
 '; } } $V65afdfb4->rls_description2_c = $V14651675; $V65afdfb4->rls_description3_c = $Va658279f; return $V65afdfb4;
} public function saveSkills ($bean, $V84e5ac78 = array()) { if (class_exists ('RLS_SkillsList')) {
 require_once 'custom/include/RLS/SkillsIntegration/SkillsProcessLinkedin.php'; $Vd939e0a9 = ''; if (array_key_exists ('skills_list', $V84e5ac78) && !empty ($V84e5ac78['skills_list'])) {
 $Vd939e0a9 .= strip_tags (html_entity_decode ($V84e5ac78['skills_list'])); } if (array_key_exists ('other_skills_list', $V84e5ac78) && !empty ($V84e5ac78['other_skills_list'])) {
 $Vd939e0a9 .= $Vd939e0a9 ? ','. strip_tags (html_entity_decode ($V84e5ac78['other_skills_list'])) :
 strip_tags (html_entity_decode ($V84e5ac78['other_skills_list'])); } $Va658279f = new F54b09795($bean, $Vd939e0a9);
$Va658279f->setSkills (false); } elseif (self::CANDIDATE_MODULE == strtoupper ($V84e5ac78['module'])) {
 switch ($this->V128a45e9) { case 'PRO': $this->saveSkillsPRO ($bean, $V84e5ac78); break; case 'CE':
 $this->saveSkillsCE ($bean, $V84e5ac78); break; } } } public function recognizeSkills ($Va658279f = '') {
 global $db; $Vc25501a4 = explode (',', $Va658279f); $Ve0a40931 = array(); if (!empty ($Vc25501a4)) {
 $V06983158 = array(); foreach ($Vc25501a4 as $Vd6808bdd) { $V06983158[] = trim ($Vd6808bdd); } $Vac5c74b6 = "SELECT id, name FROM srls_skillsitems WHERE srls_skillsitems.deleted=0";
$Vb4a88417 = $db->query ($Vac5c74b6); while ($Vf1965a85 = $db->fetchByAssoc ($Vb4a88417)) { if (in_array ($Vf1965a85['name'], $V06983158)) {
 $Ve0a40931[] = '^' . $Vf1965a85['id'] . '^'; } } } return $Ve0a40931; } public function saveSkillsCE ($V65afdfb4, $V4f169128 = array()) {
 global $db; $Vc25501a4 = array(); if (array_key_exists ('skills_list', $V4f169128) && !empty ($V4f169128['skills_list'])
 ) { $Vc25501a4[] = strip_tags (html_entity_decode ($V4f169128['skills_list'])); } if (array_key_exists ('other_skills_list', $V4f169128) && !empty ($V4f169128['other_skills_list'])
 ) { $Vc25501a4[] = strip_tags (html_entity_decode ($V4f169128['other_skills_list'])); } $Va658279f = implode (',', $Vc25501a4);
$V23d65c2e = $this->recognizeSkills ($Va658279f); $Vd6702b68 = array(); if (!empty ($V65afdfb4->skill_filter)) {
 $Vd6702b68 = explode (',', $V65afdfb4->skill_filter); } $V5f0fa7c8 = array(); foreach ($V23d65c2e as $V03c7c0ac) {
 if (!in_array ($V03c7c0ac, $Vd6702b68)) { $V5f0fa7c8[] = $V03c7c0ac; } } if (!empty ($V5f0fa7c8)) {
 foreach ($V5f0fa7c8 as $V22af645d) { $V28412579 = loadBean ('srls_skillsuser'); $V22af645d = str_replace ('^', '', $V22af645d);
$V6cbbaaec = loadBean ('srls_skillsitems')->retrieve ($V22af645d); $V28412579->name = $V6cbbaaec->name;
$V28412579->parent_type = 'rls_Candidates'; $V28412579->parent_id = $V65afdfb4->id; $V28412579->skill_item_id = $V22af645d;
$V28412579->modified_user_id = 1; $V28412579->created_by = 1; $V28412579->skills_level = ''; $V28412579->year_sk = '';
$V28412579->last_used = ''; $V28412579->team_id = '1'; $V28412579->save (); } } $Vd6702b68 = array_merge ($V23d65c2e, $Vd6702b68);
$Vd6702b68 = array_unique ($Vd6702b68); $Vd6702b68 = implode (',', $Vd6702b68); $Vac5c74b6 = "UPDATE rls_candidates SET skill_filter = '{$Vd6702b68}' WHERE id='{$V65afdfb4->id}' AND deleted=0";
$db->query ($Vac5c74b6); $V65afdfb4->team_id = '1'; $V65afdfb4->save (); } public function saveSkillsPRO ($V65afdfb4, $V4f169128 = array()) {
 global $db; $Vc25501a4 = array(); if (array_key_exists ('skills_list', $V4f169128) && !empty ($V4f169128['skills_list'])) {
 $Vc25501a4[] = strip_tags (html_entity_decode ($V4f169128['skills_list'])); } if (array_key_exists ('other_skills_list', $V4f169128) && !empty ($V4f169128['other_skills_list'])) {
 $Vc25501a4[] = strip_tags (html_entity_decode ($V4f169128['other_skills_list'])); } $Va658279f = implode (',', $Vc25501a4);
$V65afdfb4->tmp_resume_id['skills'] = $Va658279f; $V38b3180f = BeanFactory::newBean ('RLS_Skills_Templates');
$V38b3180f->retrieve_by_string_fields (array('template_default' => 1)); $Vd2e0af4c = json_decode (html_entity_decode ($V38b3180f->Va658279f), true);
$V65afdfb4->processSkillNode ($Vd2e0af4c, $Va658279f); $V65afdfb4->Va658279f= json_encode ($Vd2e0af4c);
$V65afdfb4->save (); } public function saveCandidatesExperience ($V5b1d1173 = array(), $V4f169128, $V65afdfb4, $V6c4c3438) {
 global $db; if (!empty ($V4f169128['candidate_id'])) { $Vac5c74b6 = "UPDATE rls_employment_rls_candidates_c SET deleted = '1' 
 WHERE rls_employment_rls_candidatesrls_candidates_ida = '{$V65afdfb4->id}' AND rls_employment_rls_candidatesrls_employment_idb<>'{$V6c4c3438}
AND deleted=0"; $db->query ($Vac5c74b6); } if (array_key_exists ('experience', $V4f169128) && !empty ($V4f169128['experience']) && is_array ($V4f169128['experience'])) {
 foreach ($V4f169128['experience'] as $Vb0ab0254) { $V447d3092 = ''; if ($this->V9b207167['show_parse_accounts'] == 1) {
 if (array_key_exists ('company', $Vb0ab0254) && !empty ($Vb0ab0254['company'])) { $V447d3092 = $this->getAccountByName (html_entity_decode (strip_tags ($Vb0ab0254['company'])));
} if (empty ($V447d3092)) { $V93c731f1 = loadBean ('Accounts'); $V93c731f1->name = html_entity_decode (strip_tags ($Vb0ab0254['company']));
$V93c731f1->assigned_user_id = $V4f169128['assignt_to_id']; $V93c731f1->team_id = '1'; $V93c731f1->save ();
$V447d3092 = $V93c731f1->id; } } if (array_key_exists ('position', $Vb0ab0254) && !empty ($Vb0ab0254['position'])) {
 $Vbce5bd07 = $this->getPositionByName (html_entity_decode (strip_tags ($Vb0ab0254['position'])), $V65afdfb4->id, $V447d3092);
} $Vfff70c78 = loadBean ($V5b1d1173['rls_Employment']); $Vfff70c78->disable_row_level_security = true;
if (empty ($Vbce5bd07)) { $Vfff70c78->name = html_entity_decode (strip_tags ($Vb0ab0254['position']));
} else { $Vfff70c78->retrieve ($Vbce5bd07); } $start_date = ''; if (array_key_exists ('from', $Vb0ab0254) && !empty ($Vb0ab0254['from'])) {
 $Vb0ab0254['from'] = $this->convertFromRusToEn (strip_tags ($Vb0ab0254['from'])); if (iconv_strlen ($Vb0ab0254['from']) == 4) {
 $start_date = strtotime ('1 January '.strip_tags ($Vb0ab0254['from'])); } else { $start_date = strtotime ('1 '.strip_tags ($Vb0ab0254['from']));
} $start_date = date ('Y-m-d', $start_date); $Vfff70c78->start_date = $start_date; } $end_date = '';
if (array_key_exists ('to', $Vb0ab0254) && !empty ($Vb0ab0254['to']) && $Vb0ab0254['to'] != 'Present' && $Vb0ab0254['to'] != 'настоящее время') {
 $Vb0ab0254['to'] = $this->convertFromRusToEn (strip_tags ($Vb0ab0254['to'])); if (iconv_strlen ($Vb0ab0254['to']) == 4) {
 $end_date = strtotime ('1 January '.strip_tags ($Vb0ab0254['to'])); } else { $end_date = strtotime ('1 '.strip_tags ($Vb0ab0254['to']));
} $end_date = date ('Y-m-d', $end_date); $Vfff70c78->end_date = $end_date; } else { $Vfff70c78->$V5b1d1173['employment_field']['current'] = 1;
} $V70fc5ad1 = ''; if (array_key_exists ('city', $Vb0ab0254) && !empty ($Vb0ab0254['city'])) { $V70fc5ad1 = html_entity_decode (strip_tags ($Vb0ab0254['city']));
} $V5de97494 = ''; if (array_key_exists ('country', $Vb0ab0254) && !empty ($Vb0ab0254['country'])) {
 $V5de97494 = html_entity_decode (strip_tags ($Vb0ab0254['country'])); } if (array_key_exists ('company', $Vb0ab0254) && $this->V9b207167['show_parse_accounts'] == 0) {
 $Vfff70c78->description_company_c = html_entity_decode (strip_tags ($Vb0ab0254['company'])); } $Vfff70c78->description = $V5de97494 . ' ' . $V70fc5ad1;
$Vfff70c78->rls_employment_accountsaccounts_ida = $V447d3092; $Vfff70c78->rls_employment_rls_candidatesrls_candidates_ida = $V65afdfb4->id;
$Vfff70c78->assigned_user_id = $V4f169128['assignt_to_id']; $Vfff70c78->team_id = '1'; $Vfff70c78->save ();
} } } public function getAccountByName ($Vc1007e8a = '') { global $db; if (empty ($Vc1007e8a)) return '';
 $Vc1007e8a = $db->quote (html_entity_decode ($Vc1007e8a)); $Vac5c74b6 = "SELECT id FROM accounts WHERE name='{$Vc1007e8a}' AND deleted=0";
$Vb4a88417 = $db->query ($Vac5c74b6); while ($Vf1965a85 = $db->fetchByAssoc ($Vb4a88417)) { return $Vf1965a85['id'];
} return ''; } public function getPositionByName ($Vc9f40c37, $Vda445ead, $V447d3092) { global $db;
if (empty ($Vc9f40c37) || empty ($Vda445ead)) return ''; $V169f1ece = ''; $V49746766 = ''; $Vc9f40c37 = $db->quote (html_entity_decode (strip_tags ($Vc9f40c37)));
if (!empty ($V447d3092)) { $V169f1ece = " LEFT JOIN rls_employment_accounts_c ON (rls_employment.id = rls_employment_accounts_c.rls_employment_accountsrls_employment_idb)";
$V49746766 = " AND rls_employment_accounts_c.rls_employment_accountsaccounts_ida = '{$V447d3092}' AND rls_employment_accounts_c.deleted=0";
} $Vac5c74b6 = "SELECT rls_employment.id FROM rls_employment LEFT JOIN rls_employment_rls_candidates_c 
 ON (rls_employment.id = rls_employment_rls_candidates_c.rls_employment_rls_candidatesrls_employment_idb)
 {$V169f1ece} WHERE rls_employment_rls_candidates_c.rls_employment_rls_candidatesrls_candidates_ida = '{$Vda445ead}'
 AND rls_employment_rls_candidates_c.deleted=0 AND rls_employment.deleted=0 AND rls_employment.name='{$Vc9f40c37}' 
 {$V49746766}"; $Vb4a88417 = $db->query ($Vac5c74b6); while ($Vf1965a85 = $db->fetchByAssoc ($Vb4a88417)) {
 return $Vf1965a85['id']; } return ''; } } 
