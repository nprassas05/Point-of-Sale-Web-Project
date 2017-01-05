<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<meta charset="utf-8" />
	<link href="homestyle.css" type="text/css" rel="stylesheet" />
</head>

<body>

<?php 

include "menu.php";

check_session();

$name = $_SESSION['username'];
?>

<div id="parent">
<h1>Ultimate POS</h1>
<p>With the addition of sales statistics and restocking options, Ultimate POS offers
a point of sale<br> system with enhanced capabilities, and will quickly grow to become
the new industry standard. </p>

<table align="center" id="options">
	<tr align="center">
		<td><a href="best_sellers.php"><img src="bagel-tower.jpg"></a></td>
		<td><a href="register.php"><img src="cash_register.jpg" /></a></td>
		<td><a href="stock.php"><img src="boxes.jpg" /><a></td>
	</tr>
	<tr align="center">
	   	<td>Best Sellers This Month</td>
	   	<td>Register</td>
	   	<td>Stock</td>
	</tr>
</table>
</div>

<div id="parent2">
<ul>
<li class="item">Ultimate POS</li>
<li class="item">Manhattan College</li>
<li class="item">Riverdale, NY, 10471</li>
</ul>
</div>

</body>
</html>
