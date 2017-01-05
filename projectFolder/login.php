<!DOCTYPE HTML>

<html>
<head>
<meta charset="utf-8" />
<title>Login Page</title>
<link href="stylesheet2.css" type="text/css" rel="stylesheet" />
</head>
<body>

<h1>User Login</h1>
<div>
<form action="login.php" method="post">
<p>Username: <br><input type="text" name="username" required /></p>
<p>Password: <br><input type="password" name="password" required /></p>
<p><input type="submit" value="Login" name="Login" /></p>
</form>
</div>
<br>

<h1>New Employee? Create Account Below</h1>
<div>
<form action="new_account.php" method="post">
<br><br>
<p>First Name: <br><input type="text" name="first_name" required /></p>
<p>Last Name: <br><input type="text" name="last_name" required /></p>
<p>Username: <br><input type="text" name="username" required /></p>
<p>Password:<br> <input type="password" name="password" required /></p>
<p><input type="submit" name="create" value="create account" /></p>
</form>
</div>

<?php

session_start();
include "connect.php";

if(isset($_POST["username"])) {
	$entered_user = $_POST["username"];
	$entered_password = $_POST["password"];

     /* check if entered username and password match an entry in the database */
	$connection = connect_db();
	$query = "select username, password from employee where
		username = \"$entered_user\" and password = \"$entered_password\"";

	$result = $connection->query($query);


	if ($result->num_rows > 0) {
		// Set session variables
	
		$_SESSION['username'] = $entered_user;
		$_SESSION['loggedin'] = "YES";
		$_SESSION['time_of_login'] = time();
		//Now direct to users home page
		header("Location: home.php");
	} else {
		echo "<h2 style=\"color:red\">That username or password combination was incorrect.
		<br /> Please try again.</h2>";
	}
}
?>
</body>
</html>
