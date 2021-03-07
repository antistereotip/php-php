<?php
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$orders = file("$DOCUMENT_ROOT/orders/orders.txt");
$number_of_orders = count($orders);
if ($number_of_orders == 0) {
	echo "<p><strong>No orders pending. Please try later.</strong></p>";
}
for ($i = 0; $i < $number_of_orders; $i++){
	echo $orders[$i].'<br />';
}
?>