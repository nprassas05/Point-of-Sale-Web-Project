<html>

<head>
	<title>transaction results</title>
	<meta charset="utf-8" />
	<link href="select.css" type="text/css" rel="stylesheet" />
</head>

<?php

include "menu.php";
include "connect.php";
?>

<br>
<?php

$date = $_GET['date'];
$start_time = $_GET['start_time'];
$end_time = $_GET['end_time'];

$connection = connect_db();
$query = "select sale.sale_id, sum(amount_sold * price) as cost, sale_time
from sold, sale, item, sold_by
where sold.sale_id = sale.sale_id
and item.sku_no = sold.sku_no
and sold_by.sale_id = sale.sale_id
and sale_date = \"$date\"";

// if the user chose a time range, select tuples within that range
// otherwise, select all tuples on the entered date
if ($start_time != NULL and $end_time != NULL) {
	$query = $query . " and sale_time between \"$start_time\" 
		and \"$end_time\" group by sale.sale_id;";
} else {
	$query = $query . " group by sale.sale_id;";
}

$result = $connection->query($query);

if ($result->num_rows > 0) {
    echo "<table class=\"out\"><tr><th>Sale ID</th><th>Cost</th><th>Time</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["sale_id"]."</td><td>$".$row["cost"].
			"</td><td>".$row["sale_time"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>

</html>
