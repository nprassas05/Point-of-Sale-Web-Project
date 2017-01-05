<?php

include "connect.php";

$user_exists = false;
$connection = connect_db();
$entered_first_name;
$entered_last_name; 
$entered_user;
$entered_password;

if (isset($_POST['username'])) {

	$entered_first_name = $_POST['first_name'];
	$entered_last_name = $_POST['last_name'];
	$entered_user = $_POST['username'];
	$entered_password = $_POST['password'];

	$query1 = "select username from employee where username = \"$entered_user\"";
	$result = $connection->query($query1);

	if ($result->num_rows > 0) {
		$user_exists = true;
	}
	
}

?>

<!DOCTYPE HTML>
<head>
<meta charset="utf-8" />
<title>Registration</title>
</head>

<html>
<body>
<h2 style="color: #8C001A; text-align:center">
<?php
	if ($user_exists) {
		echo "That username or password already exists. Try again..";
		echo "Return to <a href='login.php'><strong>Login</strong></a>";
	}
	else {
		$query2 = "insert into employee values(\"$entered_user\", \"$entered_password\",
			\"$entered_first_name\", \"$entered_last_name\");";
		$result = $connection->query($query2);
		echo "Registration Complete. To successully log in,
			return to <a href='login.php'><strong>Login</strong></a>";
			
	}
	
?>
</h2>
</body>
</html>
