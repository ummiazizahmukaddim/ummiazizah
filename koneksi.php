<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "kelasa";

	//create conection
	$conn = new mysqli ($servername, $username, $password, $database);

	//Check conection
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}

?>