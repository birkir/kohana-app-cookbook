<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
	'email' => array(
		'not_empty' => ':field cannot be empty',
		'email' => 'must be a valid email address',
		'unique' => 'this :field is already registered'
	),
	'username' => array(
		'not_empty' => ':field cannot be empty',
		'unique' => 'this :field is already in use'
	),
	'password' => array(
		'not_empty' => ':field cannot be empty'
	)
);