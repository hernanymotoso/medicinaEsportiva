<?php
require 'environment.php';
define("BASE_URL", "http://projeto33.pc");
global $config;
$config = array();
if(ENVIRONMENT == "development"){
	$config['dbname'] = 'medicinaesp';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else{
    $config['dbname'] = 'teste';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

?>