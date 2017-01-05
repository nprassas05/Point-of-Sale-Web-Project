<!DOCTYPE html>
<html>

<head>
	<title>Restock</title>
	<meta charset="utf-8" />
	<link href="register.css" type="text/css" rel="stylesheet" />
	<link href="restock.css" type="text/css" rel="stylesheet" />
</head>

<body>

<?php 

include "menu.php";
check_session();

?>

<div class="imgcontainer" style="height: 25%">
	<h1>Ultimate POS: Restock</h1>
    <h1><img src="cart.png"></h1>
</div>

<form action="result_restock.php">
  <div class="container">
    <label><b>Sku Number</b></label>
    <input type="text" placeholder="Enter Sku Number" name="sku" required>

    <label><b>Quantity</b></label>
    <input type="text" placeholder="Enter Quantity" name="qty" required>

    <button type="submit" style="background-color: green">Place Order</button>
  </div>
</form>

</body>
</html>
