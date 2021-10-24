<?php

//phpinfo();

error_reporting(E_ALL);

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    //die();
}


header('Content-Type: application/json; charset=utf-8');

if(isset($_GET['controller']) && isset($_GET['method'])) {
	$controllerName = $_GET['controller'];
	$method = $_GET['method'];
	$class = ucfirst($controllerName) . 'Controller';

	require("$controllerName/$class.php");
	

	$controller = new $class();

	$controller->$method();
}