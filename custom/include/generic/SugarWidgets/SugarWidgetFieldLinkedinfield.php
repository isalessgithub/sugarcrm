<?php if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); require_once ('include/generic/SugarWidgets/SugarWidgetFieldvarchar.php');
class F49fa9ce8 extends SugarWidgetFieldVarchar { function F4970583d(&$V2ea28a4f) { parent::__construct($V2ea28a4f);
} function F7c70402c(&$V912543de) { return $this->reporter->db->convert($this->_get_column_select($V912543de), "text2char") .
 " = " . $this->reporter->db->quoted($V912543de['input_name0']); } function F719a9ece(&$V912543de) {
 $V1afd3281 = $this->_get_column_select($V912543de); return "($V1afd3281 IS NULL OR " . $this->reporter->db->convert($V1afd3281, "text2char") . " != " .
 $this->reporter->db->quoted($V912543de['input_name0']) . ")"; } function F814cf02d($V912543de) { $V1afd3281 = $this->_get_column_select($V912543de);
return "($V1afd3281 IS NOT NULL AND " . $this->reporter->db->convert($V1afd3281, "length") . " > 0)";
} function Fab8567c8($V912543de) { $V1afd3281 = $this->_get_column_select($V912543de); return "($V1afd3281 IS NULL OR " . $this->reporter->db->convert($V1afd3281, "length") . " = 0)";
} function F40ecdbd1($V912543de) { return nl2br(parent::displayListPlain($V912543de)); } }