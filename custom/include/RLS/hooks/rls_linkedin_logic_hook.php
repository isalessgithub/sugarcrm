<?php require_once 'include/utils.php'; class rls_linkedin_logic_hook { public function setLinkedinProfile(&$bean, $V41196390, $Vdbc11caa)
 { if (property_exists($bean, linkedin_profile)) { if (!empty($bean->linkedin_profile) && ($bean->linkedin_profile != 'http://')
 ) { $V52b8b7f8 = '<span class="linkedin_profile" class="sugar_field"> <a href="' . $bean->linkedin_profile
 . '" target="_blank"><img src="custom/themes/default/images/linkedin-btn-2.png"></a></span>'; $bean->linkedin_profile = $V52b8b7f8;
} else { $bean->linkedin_profile = ''; } } if (property_exists($bean, rls_linkedin_url_c)) { if (!empty($bean->rls_linkedin_url_c)
 && ($bean->rls_linkedin_url_c != 'http://') ) { $V52b8b7f8 = '<span class="rls_linkedin_url_c" class="sugar_field">
 <a href="' . $bean->rls_linkedin_url_c . '" target="_blank"><img src="custom/themes/default/images/linkedin-btn-2.png"></a></span>';
$bean->rls_linkedin_url_c = $V52b8b7f8; } else { $bean->rls_linkedin_url_c = ''; } } } public function removeInactiveUser($bean, $V41196390, $Vdbc11caa)
 { if ($bean->status == 'Inactive') { $this->removeUser($bean->id); $this->removeUser_recr($bean->id);
} } public function removeDeletedUser($bean, $V41196390, $Vdbc11caa) { $this->removeUser($bean->id);
$this->removeUser_recr($bean->id); } private function removeUser($id) { global $db; require_once('modules/RLS_LinkedinParserConfig/license/config.php');
if (!empty($id)) { $Vac5c74b6 = "DELETE FROM so_users WHERE shortname = '" . $db->quote($outfitters_config['shortname'])
 . "' AND user_id='" . $id . "'"; $Vb4a88417 = $db->query($Vac5c74b6, false); } } private function removeUser_recr($id)
 { global $db; require_once ('modules/RLS_Skills/license/config.php'); if (!empty($id)) { $Vac5c74b6 = "DELETE FROM rls_users_recr WHERE shortname = '".$db->quote($outfitters_config['shortname'])."' AND user_id='".$id."'"; 
 $Vb4a88417 = $db->query($Vac5c74b6, false); } } } 