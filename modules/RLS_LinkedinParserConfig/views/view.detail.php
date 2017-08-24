<?php if (!defined('sugarEntry') || !sugarEntry) { die('Not A Valid Entry Point'); } require_once('include/MVC/View/views/view.detail.php');
require_once('modules/RLS_LinkedinParserConfig/license/OutfittersLicense.php'); class RLS_LinkedinParserConfigViewDetail extends ViewDetail
{ public function __construct() { parent::__construct(); } function display() { global $current_user;
$Vc9e825f4 = OutfittersLicense1::isValid('RLS_LinkedinParserConfig', $current_user->id); if ($Vc9e825f4 !== true) {
 echo $Vc9e825f4; return; } require_once('modules/RLS_LinkedinParserConfig/LinkedinParserSettingsClass.php');
$LinkedinParserSettingsClass = new LinkedinParserSettingsClass($_REQUEST); if (!$LinkedinParserSettingsClass->candidates_exist) {
 echo '<script> $( document ).ready(function() { $(\'#rls_job_list\').closest(\'tr\').hide(); });
</script>'; } parent::display(); } } 