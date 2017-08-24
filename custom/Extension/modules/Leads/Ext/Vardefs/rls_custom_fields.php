<?php $sugar_version = $GLOBALS['sugar_version']; $V128a45e9 = $GLOBALS['sugar_flavor']; if ($V128a45e9 == 'ENT') {
 $V128a45e9 = 'PRO'; } $V2af72f10 = explode('.', $sugar_version); if ($V128a45e9 != 'CE' && ($V2af72f10[0] == 7
 || $V2af72f10[0] > 7) ) { $dictionary["Lead"]["fields"]["rls_linkedin_url_c"]['type'] = 'Linkedinfield';
} else { $dictionary["Lead"]["fields"]["rls_linkedin_url_c"]['function'] = array( 'name' => 'getLinkedinProfileHTML',
 'returns' => 'html', 'include' => 'custom/include/RLS/fields_functions/getLinkedinProfileHTML.php',
 ); } ?> 