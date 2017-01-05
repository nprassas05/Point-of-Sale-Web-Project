<!DOCTYPE html>
<html>

<head>
	<title>Stats</title>
	<meta charset="utf-8" />
	<link href="register.css" type="text/css" rel="stylesheet" />
</head>

<?php 

include "menu.php";
check_session();

?>

<div class="imgcontainer" style="height: 25%">
	<h1>Ultimate POS: Transaction Summary</h1>
    <h1><img src="cash.jpg"></h1>
</div>

<form action="result_transaction.php" style="width: 75%; margin: 0 auto">
  <fieldset>
  
    Date:
    <input type="date" name="date" required/>
    <br><br>
    
    Start Time:
    <input type="time" name="start_time"/>
    <br><br>
    
    End Time:
    <input type="time" name="end_time"/>
    <br><br>
    
    
    <input type="submit" value="Submit">
  </fieldset>
</form>
