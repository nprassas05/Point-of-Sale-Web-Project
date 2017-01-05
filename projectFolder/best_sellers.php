<html>

<head>
	<title>Best Sellers</title>
	<meta charset="utf-8" />
	<link href="select.css" type="text/css" rel="stylesheet" />
</head>

<?php
include "menu.php";
include "connect.php";
?>

<br>

<?php

$connection = connect_db();

/* Display the ten best selling items this month */	
$query = "select item_name, brand_name, sum(amount_sold) as \"total_sold\", price
from (item natural join sold) join sale using (sale_id)
where month(sale_date) = month(curdate())
group by sku_no
order by total_sold desc
limit 10;";

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
