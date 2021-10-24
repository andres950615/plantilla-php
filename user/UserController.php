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

	public function store()
	{
		$user = json_decode($_REQUEST['user']);

		var_dump($user);
		
		$query = 'INSERT INTO user (username)
			VALUES (?);';

		$userData = ['username' => $user->username];

		$users = $this->dbConnection
		->getPdo()
		->prepare($query)
		->execute([$user->username]);
		//->execute(['test']);

		$data = ['ok'];

		echo json_encode($data);
	}

}