<?php

//phpinfo();

error_reporting(E_ALL);

header('Content-Type: application/json; charset=utf-8');

if(isset($_GET['controller']) && isset($_GET['method'])) {
	$controllerName = $_GET['controller'];
	$method = $_GET['method'];
	$class = ucfirst($controllerName) . 'Controller';

	require("$controllerName/$class.php");
	

	$controller = new $class();

	$controller->$method();
}