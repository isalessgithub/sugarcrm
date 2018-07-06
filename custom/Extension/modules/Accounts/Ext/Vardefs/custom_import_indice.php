<?php
$dictionary['Account']['indices'][] = array(
	'name'  => 'idx_website_cstm',
	'type' => 'index',
	'fields' => array(
		0 => 'website',
	),
	'source' => 'non-db',
);
