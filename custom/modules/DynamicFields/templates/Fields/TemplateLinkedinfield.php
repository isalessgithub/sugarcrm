<?php if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); require_once('modules/DynamicFields/templates/Fields/TemplateField.php');
class Fd933a4d3 extends TemplateField { var $V599dcce2 = 'varchar'; var $V1d1ce1a0 = true; function __construct()
 { } function Fe11d913e() { $Vd5d43682 = array(); if (!empty($this->help)) { $Vd5d43682[strtoupper($this->name . '_help')] = translate($this->help, $this->bean->module_dir);
} if (isset($this->bean->$name)) { $Vd5d43682[$this->name] = $this->bean->$name; } else { if (empty($this->bean->id)) {
 $Vd5d43682[$this->name] = $this->default_value; } } return $Vd5d43682; return parent::Fe11d913e(); 
 } function Fd6286133() { if (!empty($_REQUEST[$this->name])) { return $_REQUEST[$this->name]; }
parent::Fd6286133(); } function F6a3b2ff4() { $name = $this->name; if (isset($this->bean->$name)) {
 return $this->bean->$name; } return ''; return parent::F6a3b2ff4(); } function Fee09f1fd() { $V4ed94076 = parent::Fee09f1fd();
$V4ed94076['dbType'] = 'varchar'; return $V4ed94076; return parent::Fee09f1fd(); } }