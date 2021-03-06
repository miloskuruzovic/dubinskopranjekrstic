<?php

$GLOBALS['config'] = array(
	'DB' => array(
		'host' => '127.0.0.1',
		'user' => 'root',
		'password' => '',
		'db_name' => 'dubinsko'
	),
	'status' => true,
	'session' => array()
);

spl_autoload_register(function($className){
	if(file_exists("classes/{$className}.class.php")){
		require_once "classes/{$className}.class.php";
	}else if(file_exists("../classes/{$className}.class.php")){
		require_once "../classes/{$className}.class.php";
	}
});