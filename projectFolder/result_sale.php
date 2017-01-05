<?php

include "connect.php";

$sku1 = $_GET['sku1']; $qty1 = $_GET['qty1'];
$sku2 = $_GET['sku2']; $qty2 = $_GET['qty2'];
$sku3 = $_GET['sku3']; $qty3 = $_GET['qty3'];
$sku4 = $_GET['sku4']; $qty4 = $_GET['qty4'];
$sku5 = $_GET['sku5']; $qty5 = $_GET['qty5'];

$sku_numbers = array($sku1, $sku2, $sku3, $sku4, $sku5);
$quants = array($qty1, $qty2, $qty3, $qty4, $qty5);

// connect to database
$connection = connect_db();
$query1 = "insert into sale(sale_date, sale_time) values(curdate(), curtime())";
$query2; 
$query3; 
$query4;

try {
	$connection->begin_transaction();
	$connection->query($query1);
	
	for ($i = 0; $i < count($sku_numbers); $i++) {
		if ($sku_numbers[$i] == NULL || $quants[$i] == NULL)
			continue;

		$query2 = "insert into sold values($sku_numbers[$i], (select max(sale_id) from sale), $quants[$i])";
		$query3 = "insert into sold_by values((select max(sale_id) from sale), \"matt44\")";
		$query4 = "update item set stock_amount = stock_amount - $quants[$i] where sku_no = $sku_numbers[$i]";
		
		// execute each query
		$connection->query($query2);
		$connection->query($query3);
		$connection->query($query4);
	}
	
	$connection->commit();
	$connection->close();
	?>
	<h2 style="color: purple">Sale Completed</h2>
	<a href="register.php"><button type="button">Done</button></a>
	<?php
} catch (Exception $e) {
	$connection->rollback();
	echo "Transaction Error";
}

?>
