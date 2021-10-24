<?php

require('DbConnection.php');

class UserController {

	public $dbConnection;

	public function __construct() {
		$this->dbConnection = new DbConnection();
	}

	public function index()
	{
		
		$query = 'SELECT * FROM user;';

		$users = $this->dbConnection
		->getPdo()
		->query($query)
		->fetchAll();

		echo json_encode($users);
	}

}