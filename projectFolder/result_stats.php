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

<?php
$item = $_GET['item_name'];
$start_date = $_GET['start_date'];
$end_date = $_GET['end_date'];

$connection = connect_db();
	
$query = "select item_name, brand_name, sum(amount_sold) as \"total_sold\", price
from (item natural join sold) join sale using (sale_id)
where item_name = \"$item\"
and sale_date between \"$start_date\" and \"$end_date\"
group by sku_no
order by total_sold desc;";

$result = $connection->query($query);

if ($result->num_rows > 0) {
    echo "<table class=\"out\"><tr><th>Item Name</th><th>Brand</th><th>Amount Sold</th><th>Price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["item_name"]."</td><td>".$row["brand_name"].
			"</td><td>".$row["total_sold"]."</td><td>".$row["price"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>

</html>
