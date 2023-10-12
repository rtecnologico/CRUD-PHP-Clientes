<?php

	$hostname = '127.0.0.1';
	$user = 'root';
	$password = '';
	$database = 'crud';

	// Create connection
	$conn = new mysqli($hostname,$user,$password,$database);

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

?>