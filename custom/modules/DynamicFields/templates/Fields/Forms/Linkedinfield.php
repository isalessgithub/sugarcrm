<?php if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); require_once('custom/modules/DynamicFields/templates/Fields/TemplateLinkedinfield.php');
 function Fbb55b197(&$V3691308f, $V7e9fcc5e) { global $app_list_strings, $mod_strings; $Vb63119da = $V3691308f->get_template_vars();
$Vd05b6ed7 = $Vb63119da['module']->mbvardefs->vardefs['fields']; $V1535a66d = array(); foreach ($Vd05b6ed7 as $id => $V4ed94076) {
 $V1535a66d[$id] = $V4ed94076['name']; } $V3691308f->assign('fieldOpts', $V1535a66d); return $V3691308f->fetch('custom/modules/DynamicFields/templates/Fields/Forms/TemplateLinkedinfield.tpl');
} ?>