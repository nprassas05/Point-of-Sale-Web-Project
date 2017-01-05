<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
	<meta charset="utf-8" />
	<link href="register.css" type="text/css" rel="stylesheet" />
</head>

<body>

<?php 

include "menu.php";
check_session();

?>

<div class="imgcontainer" style="height: 25%">
	<h1>Ultimate POS: Cash Register</h1>
    <h1><img src="cash_register.jpg"></h1>
</div>

<form action="result_sale.php">
  <div class="container">
      <table class="mod">
	     <tr>
			<td><b>Sku Number</b></td>
			<td><b>Quantity</b></td>
		 <tr>
		 <tr>
			<td><input type="text" placeholder="Enter Sku Number" name="sku1" required></td>
			<td><input type="text" placeholder="Enter Quantity" name="qty1" required></td>
		 <tr>
		 <tr>
			<td><input type="text" placeholder="Enter Sku Number" name="sku2"></td>
			<td><input type="text" placeholder="Enter Quantity" name="qty2"></td>
		 <tr>
		 <tr>
			<td><input type="text" placeholder="Enter Sku Number" name="sku3"></td>
			<td><input type="text" placeholder="Enter Quantity" name="qty3"></td>
		 <tr>
		 <tr>
			<td><input type="text" placeholder="Enter Sku Number" name="sku4"></td>
			<td><input type="text" placeholder="Enter Quantity" name="qty4"></td>
		 <tr>
		 <tr>
			<td><input type="text" placeholder="Enter Sku Number" name="sku5"></td>
			<td><input type="text" placeholder="Enter Quantity" name="qty5"></td>
		 <tr>
	  </table>
    
    <button type="submit">Record Sale</button>
  </div>
</form>

</body>
</html>
