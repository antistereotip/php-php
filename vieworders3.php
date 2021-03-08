<?php
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
<head>
	<title>Milutin's auto parts - Customer orders</title>
</head>
<body>
<h1>Milutin's auto parts</h1>
<h2>Customer orders</h2>
<?php
//cita celu datoteku
//svaka porudzbina postaje jedan element
$orders = file("$DOCUMENT_ROOT/orders/orders.txt");
//prebrojava porudzbine u nizu
$number_of_orders = count($orders);
if ($number_of_orders == 0) {
	echo "<p>No orders pending. Please try later.</p>";
}
echo "<table border=\1\">\n";
echo "<tr><th bgcolor=\"#CCCCFF\">Order Date</th>
		  <th bgcolor=\"#CCCCFF\">Tires</th>
		  <th bgcolor=\"#CCCCFF\">Oil</th>
		  <th bgcolor=\"#CCCCFF\">Spark Plugs</th>
		  <th bgcolor=\"#CCCCFF\">Total</th>
		  <th bgcolor=\"#CCCCFF\">Adress</th>
	  </tr>";

for ($i =0; $i<$number_of_orders;$i++) {
	//razbija svaki red
	$line = explode("\t", $orders[$i]);
	//cuva samo broj narucenih artikala
	$line[1] = intval ($line[1]);	
	$line[2] = intval ($line[2]);
	$line[3] = intval ($line[3]);
	//prikazuje svaku porudzbinu
	echo "<tr><td>$line[0]</td>";
	echo "<td align='right'>$line[1]</td>";
	echo "<td align='right'>$line[2]</td>";
	echo "<td align='right'>$line[3]</td>";
	echo "<td align='right'>$line[4]</td>";
	echo "<td>$line[5]</td></tr>";
}
echo '</table>';
?>
</body>
</html>