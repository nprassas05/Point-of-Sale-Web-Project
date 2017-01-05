<!DOCTYPE html>
<html>

<head>
	<title>Stats</title>
	<meta charset="utf-8" />
	<link href="register.css" type="text/css" rel="stylesheet" />
</head>

<?php
 
include "menu.php";
include "connect.php";

check_session();
$connection = connect_db();
$result = $connection ->query("select distinct item_name from item;");

?>

<div class="imgcontainer" style="height: 25%">
	<h1>Ultimate POS: Sales Stats</h1>
    <h1><img src="statistics.jpg"></h1>
</div>

<form action="result_stats.php" style="width: 75%; margin: 0 auto">
  <fieldset>
    
    Item Name:
    <select name="item_name" required>
	<?php
	/* Display each unique item that exists in the drop down menu*/
	while ($row = $result->fetch_assoc()) {
		echo "<option value=\"".$row["item_name"]."\">".$row["item_name"]."</option>";
		
	}
	?>
	</select>
    <br><br>
    
    Start Date:
    <input type="date" name="start_date" required/>
    <br><br>
    End Date:
    <input type="date" name="end_date" required/>
    <br><br>
    
    
    <input type="submit" value="Submit">
  </fieldset>
</form>
