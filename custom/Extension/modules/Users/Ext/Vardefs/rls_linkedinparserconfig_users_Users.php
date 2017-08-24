<?php $dictionary["User"]["fields"]["rls_linkedinparserconfig_users"] = array( 'name' => 'rls_linkedinparserconfig_users',
 'type' => 'link', 'relationship' => 'rls_linkedinparserconfig_users', 'source' => 'non-db', 'module' => 'RLS_LinkedinParserConfig',
 'bean_name' => 'RLS_LinkedinParserConfig', 'vname' => 'LBL_RLS_LINKEDINPARSERCONFIG_USERS_FROM_RLS_LINKEDINPARSERCONFIG_TITLE',
 'id_name' => 'rls_linkedinparserconfig_usersrls_linkedinparserconfig_ida', ); $dictionary["User"]["fields"]["rls_linkedinparserconfig_users_name"] = array(
 'name' => 'rls_linkedinparserconfig_users_name', 'type' => 'relate', 'source' => 'non-db', 'vname' => 'LBL_RLS_LINKEDINPARSERCONFIG_USERS_FROM_RLS_LINKEDINPARSERCONFIG_TITLE',
 'save' => true, 'id_name' => 'rls_linkedinparserconfig_usersrls_linkedinparserconfig_ida', 'link' => 'rls_linkedinparserconfig_users',
 'table' => 'rls_linkedinparserconfig', 'module' => 'RLS_LinkedinParserConfig', 'rname' => 'name',
); $dictionary["User"]["fields"]["rls_linkedinparserconfig_usersrls_linkedinparserconfig_ida"] = array(
 'name' => 'rls_linkedinparserconfig_usersrls_linkedinparserconfig_ida', 'type' => 'id', 'source' => 'non-db',
 'vname' => 'LBL_RLS_LINKEDINPARSERCONFIG_USERS_FROM_RLS_LINKEDINPARSERCONFIG_TITLE', 'id_name' => 'rls_linkedinparserconfig_usersrls_linkedinparserconfig_ida',
 'link' => 'rls_linkedinparserconfig_users', 'table' => 'rls_linkedinparserconfig', 'module' => 'RLS_LinkedinParserConfig',
 'rname' => 'id', 'reportable' => false, 'side' => 'left', 'massupdate' => false, 'duplicate_merge' => 'disabled',
 'hideacl' => true, ); 