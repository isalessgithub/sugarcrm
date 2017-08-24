<?php if (!defined('sugarEntry') || !sugarEntry) { die('Not A Valid Entry Point'); } require_once 'include/MVC/View/views/view.edit.php';
require_once 'modules/RLS_LinkedinParserConfig/license/OutfittersLicense.php'; class RLS_LinkedinParserConfigViewList extends ViewList
{ public function __construct() { parent::__construct(); } public function display() { global $current_user;
$Vc9e825f4 = OutfittersLicense1::isValid('RLS_LinkedinParserConfig', $current_user->id); if ($Vc9e825f4 !== true) {
 echo $Vc9e825f4; return; } parent::display(); } } 