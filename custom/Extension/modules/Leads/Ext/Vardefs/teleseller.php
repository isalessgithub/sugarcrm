<?php
$dictionary['Lead']['fields']['log_call_c']['enforced'] = 'false';
$dictionary['Lead']['fields']['log_call_c']['dependency'] = '';
$dictionary['Lead']['fields']['log_call_c']['name'] = 'log_call_c';
$dictionary['Lead']['fields']['log_call_c']['vname'] = 'LBL_LOG_CALL';
$dictionary['Lead']['fields']['log_call_c']['type'] = 'varchar';
$dictionary['Lead']['fields']['log_call_c']['source'] = 'non-db';
$dictionary['Lead']['fields']['log_call_c']['studio'] = array('editview' => false,'quickcreate'=>false,'searchview'=>false,'wirelesseditview'=>false, 'wirelessdetailview'=>false, 'wirelesslistview'=>false, 'wireless_basic_search'=>false);
$dictionary['Lead']['fields']['log_call_c']['function'] =  array(
                            'name'    => 'renderLogCall',
                            'returns' => 'html',
                            'include' => 'modules/ATC_Teleseller/ATC_CallLogger.php',);