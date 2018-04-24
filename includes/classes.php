<?php

class Connection {
	// Create Database Variables
	public $server;
	public $user;
	public $password;	
	public $database;
	public $conn;
	
	public function __construct($server, $user, $password, $database) {
		$this->server = $server;
		$this->user = $user;
		$this->password = $password;	
		$this->database = $database;
		
		$this->conn = $this->connection($this->server, $this->user, $this->password, $this->database);
		
		if($this->conn->connect_errno) {
			echo "Failed to connect to the Database: " . $this->conn->connect_error;
		}
		
		// Connect to Database
//		$conn	= mysqli_connect($this->server, $this->user, $this->password, $this->database);
	}
	
	public function connection($server, $user, $password, $database) {
		return mysqli_connect($server, $user, $password, $database);
	}
	
	public function close() {
		return mysqli_close($this->conn);
	}
	
	// Verify Connection to Database
//	if(!$conn) {
//		die("Connection to database failed: " . mysqli_connect_error());
//	}

}

class Products {
	
//	public function __construct($connection) {
////		$this->conn = $connection
//	}
	
	public function loadAllProducts($conn) {
		$query = "SELECT *
				  FROM products";
		$results = $conn->query($query);
//		$products = $conn::fetch_assoc($results);
		return $results;
		
	}
	
	public function loadProductsByCategory($conn, $cat) {
		$query = "SELECT *
				  FROM products
				  WHERE prod_category = '$cat'";
		$results = $conn->query($query);
		return $results;
	}
	
	public function loadProductById($conn, $product_id) {
		$query = "SELECT *
				  FROM products
				  WHERE prod_id = $product_id";
		$results = $conn->query($query);
		return $results;
	}
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