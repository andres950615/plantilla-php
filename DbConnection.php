<?php

class DbConnection {

	public $pdo;

	public function __construct() {
		$driver = 'mysql';
		$host = 'localhost';
		$db = 'plantilla_test';
		$user = 'root';
		$password = 'toor';

		$this->pdo = new PDO("$driver:host=$host;dbname=$db", $user, $password);
	}

	public function getPdo()
	{
		return $this->pdo;
	}

}