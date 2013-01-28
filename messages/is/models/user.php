<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
	'email' => array(
		'not_empty' => 'þú verður að slá inn netfang',
		'email' => 'ekki gilt netfang',
		'unique' => 'þetta netfang er nú þegar í notkun'
	),
	'username' => array(
		'not_empty' => 'þú verður að slá inn notandanafn',
		'unique' => 'þetta notandanafn er nú þegar í notkun'
	),
	'password' => array(
		'not_empty' => 'þú verður að slá inn lykilorð'
	)
);