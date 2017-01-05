<?php

/* Connect to mySQL */
function connect_db()
{
	$server = "localhost";
	$username = "root";
	$password = "pass";
	$db = "store";

	// Create connection
	$conn = mysqli_connect($server, $username, $password, $db);
	// Check connection
	if (!$conn) {
		die("Connection failed");
	}
	return $conn;

}

?>
