<?php

// change the username (root) and password (password) in the string below to match your SugarCRM credentials

$testConnection = mysql_connect('localhost', 'iss', '$ug@r@dm1n');

if (!$testConnection) {

	die('Error: ' . mysql_error());

	}

echo 'Database connection working!';

mysql_close($testConnection);

?>
