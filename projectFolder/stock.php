<html>

<head>
	<title>Restock</title>
	<meta charset="utf-8" />
	<link href="select.css" type="text/css" rel="stylesheet" />
</head>

<?php
include "menu.php";
include "connect.php";
?>

<br>

<form action="stock.php">
<input type="text" placeholder="Item Name" name ="item_name"> 
</form>

<?php
//$item = $_GET['item_name'];
//$start_date = $_GET['start_date'];
//$end_date = $_GET['end_date'];

$connection = connect_db();
	
$query = "select item_name, brand_name, price, stock_amount from item
			order by item_name";

if (isset($_GET['item_name']) && $_GET['item_name'] != NULL) {
	$item = $_GET['item_name'];
	$query = "select item_name, brand_name, price, stock_amount 
		from item where item_name = \"$item\" order by item_name";
	unset( $_GET['item_name'] );
}

$result = $connection->query($query);

if ($result->num_rows > 0) {
    echo "<table class=\"out\"><tr><th>Item Name</th><th>Brand</th><th>Price</th><th>Amount in Stock</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["item_name"]."</td><td>".$row["brand_name"].
			"</td><td>".$row["price"]."</td><td>".$row["stock_amount"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>

</html>
