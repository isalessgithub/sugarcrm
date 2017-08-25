<?php require_once 'include/utils.php'; class F6912bbfa { private $V8d777f38; private $Vdf347a37;
 private $Ve50a23f1; private $V39a3edea = array(); public $V91bb2483 = false; public function __construct($V8d777f38)
 { try { if (is_string($V8d777f38)) { $this->V8d777f38= $this->convertJson($V8d777f38); } else {
 throw new Exception('Data must be json string'); } } catch (Exception $Vd517b272) { echo $Vd517b272->getTraceAsString();
} } private function convertJson($V466deec7) { return json_decode(html_entity_decode($V466deec7), true);
} private function walkTree($Vc0af77cf) { if (is_array($Vc0af77cf)) { if (isset($Vc0af77cf['ids']) && ($id = $this->extractId($Vc0af77cf))) {
 if (isset($this->Ve50a23f1[$id]) || isset($this->V39a3edea[$id]) ) { $Vc0af77cf = $this->setRowData($Vc0af77cf, $this->Ve50a23f1[$id]);
} $this->Vdf347a37[$id] = $Vc0af77cf; } foreach ($Vc0af77cf as $V3c6e0b8a => $V36c45369) { if (is_array($V36c45369)) {
 $Vc0af77cf[$V3c6e0b8a] = $this->walkTree($V36c45369); } } } return $Vc0af77cf; } public function setReplaceParams($V5ad897cc, $V972bf3f0, $V2063c160)
 { $this->V39a3edea[$V5ad897cc] = array( 'key' => $V972bf3f0, 'value' => $V2063c160 ); } public function unsetReplaceParams()
 { $this->V39a3edea= array(); } private function encodeMultienumValue($Vf1f713c9) { return encodeMultienumValue($Vf1f713c9);
} private function unencodeMultienum($Vb45cffe0) { return unencodeMultienum($Vb45cffe0); } private function extractId($Vf1965a85)
 { if (isset($Vf1965a85['ids']) && isset($Vf1965a85['ids']['name'])) { return $Vf1965a85['ids']['name'];
} else { return false; } } private function replaceData($Vf1965a85) { if (!empty($this->V39a3edea) && isset($Vf1965a85['ids'])
 && array_key_exists($Vf1965a85['ids']['name'], $this->V39a3edea) ) { $this->V91bb2483= true; $V5ad897cc = $Vf1965a85['ids']['name'];
$V9dde3601 = $this->V39a3edea[$V5ad897cc]; $Vf1965a85[$V9dde3601['key']] = $V9dde3601['value']; } return $Vf1965a85;
} private function setRowData($Vf1965a85, $Va43c1b0a) { if (isset($Va43c1b0a['checked'])) { $Vf1965a85 = $this->setRowChecked($Vf1965a85, $Va43c1b0a['checked']);
} foreach ($Vf1965a85 as $V3c6e0b8a => $V2063c160) { if (isset($Va43c1b0a[$V3c6e0b8a]) && $V3c6e0b8a != 'checked') {
 $Vf1965a85[$V3c6e0b8a] = $Va43c1b0a[$V3c6e0b8a]; } } $Vf1965a85 = $this->replaceData($Vf1965a85); return $Vf1965a85;
} private function setRowChecked($Vf1965a85, $V3793ea52) { if (!$V3793ea52 && isset($Vf1965a85['checked'])) {
 unset($Vf1965a85['checked']); } elseif ($V3793ea52) { $Vf1965a85['checked'] = true; } return $Vf1965a85;
} public function setRows($Ve50a23f1 = array()) { $this->Ve50a23f1= $Ve50a23f1; if (isset($this->V8d777f38['data_treegrid'])) {
 $this->V8d777f38['data_treegrid']['0']['records'] = $this->walkTree($this->V8d777f38['data_treegrid']['0']['records']);
} elseif (!empty($this->V8d777f38)) { $this->V8d777f38= $this->walkTree($this->V8d777f38); } } public function getRows()
 { if (empty($this->Vdf347a37) && isset($this->V8d777f38['data_treegrid'])) { $this->V8d777f38['data_treegrid']['0']['records']
 = $this->walkTree($this->V8d777f38['data_treegrid']['0']['records']); } elseif (empty($this->Vdf347a37) && isset($this->V8d777f38['0'])) {
 $this->V8d777f38['0']['records'] = $this->walkTree($this->V8d777f38['0']['records']); } return $this->Vdf347a37;
} public function getChecked() { $V8655e2d9 = array(); $Vdf347a37 = $this->getRows(); foreach ($Vdf347a37 as $V3c6e0b8a => $V2063c160) {
 if (isset($V2063c160['checked']) && $V2063c160['checked']) { $V8655e2d9[$V3c6e0b8a] = $V2063c160;
} } return $V8655e2d9; } public function changeJsonTemplate($V8d777f38) { $V3793ea52 = $this->getChecked();
try { if (is_string($V8d777f38)) { $Vcc187cbc = $this->convertJson($V8d777f38); $this->V8d777f38= isset($Vcc187cbc['data_treegrid']) ?
 $Vcc187cbc['data_treegrid'] : $Vcc187cbc; } else { throw new Exception('Data must be json string');
} } catch (Exception $Vd517b272) { echo $Vd517b272->getTraceAsString(); } $this->setRows($V3793ea52);
return $this->getJson(); } public function walk() { if (isset($this->V8d777f38['data_treegrid'])) {
 $this->V8d777f38['data_treegrid']['0']['records'] = $this->walkTree($this->V8d777f38['data_treegrid']['0']['records']);
} elseif (isset($this->V8d777f38['0'])) { $this->V8d777f38['0']['records'] = $this->walkTree($this->V8d777f38['0']['records']);
} } public function getJson() { $V466deec7 = json_encode($this->V8d777f38); if (is_null($V466deec7) || $V466deec7 == 'null') {
 return ''; } return htmlentities($V466deec7); } } 