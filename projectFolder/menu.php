<link href="homestyle.css" type="text/css" rel="stylesheet" />

<div id="bannerimage"></div>

<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="register.php">Sales Register</a></li>
  <li><a href="restock.php">Place Order</a></li>
  <li><a href="stats.php">Sales Stats</a></li>
  <li><a href="transaction.php">Transaction Summary</a></li>
  <li><a href="logout.php">Log Out</a></li>
</ul>

<?php
function check_session()
{
	session_start();
	/* check if user has logged in before allowing them to view the page */
	if(!$_SESSION['loggedin']) {
		header("location:login.php");
		exit;
	}

}
?>
