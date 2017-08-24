<?php $dictionary["RLS_LinkedinParserConfig"]["fields"]["rls_linkedinparserconfig_users"] = array(
 'name' => 'rls_linkedinparserconfig_users', 'type' => 'link', 'relationship' => 'rls_linkedinparserconfig_users',
 'source' => 'non-db', 'module' => 'Users', 'bean_name' => 'User', 'vname' => 'LBL_RLS_LINKEDINPARSERCONFIG_USERS_FROM_USERS_TITLE',
 'id_name' => 'rls_linkedinparserconfig_usersusers_idb', ); $dictionary["RLS_LinkedinParserConfig"]["fields"]["rls_linkedinparserconfig_users_name"]
 = array( 'name' => 'rls_linkedinparserconfig_users_name', 'type' => 'relate', 'source' => 'non-db',
 'vname' => 'LBL_RLS_LINKEDINPARSERCONFIG_USERS_FROM_USERS_TITLE', 'save' => true, 'id_name' => 'rls_linkedinparserconfig_usersusers_idb',
 'link' => 'rls_linkedinparserconfig_users', 'table' => 'users', 'module' => 'Users', 'rname' => 'full_name',
 'db_concat_fields' => array( 0 => 'first_name', 1 => 'last_name', ), ); $dictionary["RLS_LinkedinParserConfig"]["fields"]["rls_linkedinparserconfig_usersusers_idb"]
 = array( 'name' => 'rls_linkedinparserconfig_usersusers_idb', 'type' => 'id', 'source' => 'non-db',
 'vname' => 'LBL_RLS_LINKEDINPARSERCONFIG_USERS_FROM_USERS_TITLE', 'id_name' => 'rls_linkedinparserconfig_usersusers_idb',
 'link' => 'rls_linkedinparserconfig_users', 'table' => 'users', 'module' => 'Users', 'rname' => 'id',
 'reportable' => false, 'side' => 'left', 'massupdate' => false, 'duplicate_merge' => 'disabled',
 'hideacl' => true, ); 