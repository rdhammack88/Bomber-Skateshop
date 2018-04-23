<?php

class Connection {
	
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