<?php
 // created: 2017-02-28 11:18:22
$dictionary['users_atc_clients_1']['name'] = 'users_atc_clients_1';
$dictionary['users_atc_clients_1']['true_relationship_type'] = 'one-to-many';
$dictionary['users_atc_clients_1']['from_studio'] = true;
$dictionary['users_atc_clients_1']['relationships']['users_atc_clients_1']['lhs_module'] = 'Users';
$dictionary['users_atc_clients_1']['relationships']['users_atc_clients_1']['lhs_table'] = 'users';
$dictionary['users_atc_clients_1']['relationships']['users_atc_clients_1']['lhs_key'] = 'id';
$dictionary['users_atc_clients_1']['relationships']['users_atc_clients_1']['rhs_module'] = 'ATC_Clients';
$dictionary['users_atc_clients_1']['relationships']['users_atc_clients_1']['rhs_table'] = 'atc_clients';
$dictionary['users_atc_clients_1']['relationships']['users_atc_clients_1']['rhs_key'] = 'id';
$dictionary['users_atc_clients_1']['relationships']['users_atc_clients_1']['relationship_type'] = 'many-to-many';
$dictionary['users_atc_clients_1']['relationships']['users_atc_clients_1']['join_table'] = 'users_atc_clients_1_c';
$dictionary['users_atc_clients_1']['relationships']['users_atc_clients_1']['join_key_lhs'] = 'users_atc_clients_1users_ida';
$dictionary['users_atc_clients_1']['relationships']['users_atc_clients_1']['join_key_rhs'] = 'users_atc_clients_1atc_clients_idb';
$dictionary['users_atc_clients_1']['table'] = 'users_atc_clients_1_c';
$dictionary['users_atc_clients_1']['fields'][0]['name'] = 'id';
$dictionary['users_atc_clients_1']['fields'][0]['type'] = 'varchar';
$dictionary['users_atc_clients_1']['fields'][0]['len'] = 36;
$dictionary['users_atc_clients_1']['fields'][1]['name'] = 'date_modified';
$dictionary['users_atc_clients_1']['fields'][1]['type'] = 'datetime';
$dictionary['users_atc_clients_1']['fields'][2]['name'] = 'deleted';
$dictionary['users_atc_clients_1']['fields'][2]['type'] = 'bool';
$dictionary['users_atc_clients_1']['fields'][2]['len'] = '1';
$dictionary['users_atc_clients_1']['fields'][2]['default'] = '0';
$dictionary['users_atc_clients_1']['fields'][2]['required'] = true;
$dictionary['users_atc_clients_1']['fields'][3]['name'] = 'users_atc_clients_1users_ida';
$dictionary['users_atc_clients_1']['fields'][3]['type'] = 'varchar';
$dictionary['users_atc_clients_1']['fields'][3]['len'] = 36;
$dictionary['users_atc_clients_1']['fields'][4]['name'] = 'users_atc_clients_1atc_clients_idb';
$dictionary['users_atc_clients_1']['fields'][4]['type'] = 'varchar';
$dictionary['users_atc_clients_1']['fields'][4]['len'] = 36;
$dictionary['users_atc_clients_1']['indices'][0]['name'] = 'users_atc_clients_1spk';
$dictionary['users_atc_clients_1']['indices'][0]['type'] = 'primary';
$dictionary['users_atc_clients_1']['indices'][0]['fields'][0] = 'id';
$dictionary['users_atc_clients_1']['indices'][1]['name'] = 'users_atc_clients_1_ida1';
$dictionary['users_atc_clients_1']['indices'][1]['type'] = 'index';
$dictionary['users_atc_clients_1']['indices'][1]['fields'][0] = 'users_atc_clients_1users_ida';
$dictionary['users_atc_clients_1']['indices'][2]['name'] = 'users_atc_clients_1_alt';
$dictionary['users_atc_clients_1']['indices'][2]['type'] = 'alternate_key';
$dictionary['users_atc_clients_1']['indices'][2]['fields'][0] = 'users_atc_clients_1atc_clients_idb';
$dictionary['users_atc_clients_1']['lhs_module'] = 'Users';
$dictionary['users_atc_clients_1']['lhs_table'] = 'users';
$dictionary['users_atc_clients_1']['lhs_key'] = 'id';
$dictionary['users_atc_clients_1']['rhs_module'] = 'Employees';
$dictionary['users_atc_clients_1']['rhs_table'] = 'atc_clients';
$dictionary['users_atc_clients_1']['rhs_key'] = 'id';
$dictionary['users_atc_clients_1']['relationship_type'] = 'many-to-many';
$dictionary['users_atc_clients_1']['join_table'] = 'users_atc_clients_1_c';
$dictionary['users_atc_clients_1']['join_key_lhs'] = 'users_atc_clients_1users_ida';
$dictionary['users_atc_clients_1']['join_key_rhs'] = 'users_atc_clients_1atc_clients_idb';
