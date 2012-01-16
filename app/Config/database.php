<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'Holidays',
		'encoding' => 'utf8'
	);
	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'api-test-db.totodotnet.net',
		'login' => 'tonny_api_user',
		'password' => '&7YuHjNm',
		'database' => 'totodotnet_holidays_test',
		'encoding' => 'utf8'
	);
	public $product = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'api-db.totodotnet.net',
		'login' => 'tonny_api_user',
		'password' => '&7YuHjNm',
		'database' => 'totodotnet_holidays',
		'encoding' => 'utf8'
	);
}
