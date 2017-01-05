<html>

<?php

/* Increase amount available in stock of item with the entered sku number
   by the entered quantity*/

include "connect.php";

$sku = $_GET['sku'];
$qty = $_GET['qty'];

$connection = connect_db();
$query = "update item set stock_amount = stock_amount + $qty where sku_no = $sku";

if ($connection->query($query) === TRUE) { ?>
	<img src="http://i.istockimg.com/file_thumbview_approve/19395713/3/stock-photo-19395713-green-check-mark.jpg" />
	<h1>Order Has Been Successfully Placed</h1><br>
	<a href="restock.php"><button type="button">Done</button></a>
	<?php
} else {
	echo "An error occurred";
}

?>

</html>
