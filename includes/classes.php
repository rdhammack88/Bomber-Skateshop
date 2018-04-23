<?php

class Connection {
	// Create Database Variables
	public $server;
	public $user;
	public $password;	
	public $database;	
	
	public function __construct($server, $user, $password, $database) {
		$this->server = $server;
		$this->user = $user;
		$this->password = $password;	
		$this->database = $database;
		
		$this->conn($this->server, $this->user, $this->password, $this->database);
		
		// Connect to Database
//		$conn	= mysqli_connect($this->server, $this->user, $this->password, $this->database);
	}
	
	public function conn($server, $user, $password, $database) {
		return mysqli_connect($server, $user, $password, $database);
	}
	
	// Verify Connection to Database
//	if(!$conn) {
//		die("Connection to database failed: " . mysqli_connect_error());
//	}

}

class User {
	
	public $name;
	public $user_name;
	public $password;
	
	public function __construct($name, $user_name, $password) {
		$this->name = $name;
		$this->user_name = $user_name;
		$this->password = password_hash($password, PASSWORD_DEFAULT);
	}
	
}


?>