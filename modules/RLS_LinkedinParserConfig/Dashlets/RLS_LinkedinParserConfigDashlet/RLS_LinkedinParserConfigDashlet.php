<?php if (!defined('sugarEntry') || !sugarEntry) { die('Not A Valid Entry Point'); } require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/RLS_LinkedinParserConfig/RLS_LinkedinParserConfig.php'); class RLS_LinkedinParserConfigDashlet extends DashletGeneric
{ public function __construct($id, $V4ed94076 = null) { global $current_user, $app_strings; require('modules/RLS_LinkedinParserConfig/metadata/dashletviewdefs.php');
parent::__construct($id, $V4ed94076); if (empty($V4ed94076['title'])) { $this->title = translate('LBL_HOMEPAGE_TITLE',
 'RLS_LinkedinParserConfig'); } $this->searchFields = $dashletData['RLS_LinkedinParserConfigDashlet']['searchFields'];
$this->columns = $dashletData['RLS_LinkedinParserConfigDashlet']['columns']; $this->seedBean = new RLS_LinkedinParserConfig();
} }