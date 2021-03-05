<?php
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<html>
<head>
	<title>Milutin's Auto Parts - View Orders</title>
</head>
<body>
<h1>View orders</h1>
<?php
//var_dump($DOCUMENT_ROOT);

@ $fp = fopen("$DOCUMENT_ROOT/orders/orders.txt", 'rb');

// zabranjeno citanje datoteke
flock($fp, LOCK_SH);

//var_dump($fp);
if (!$fp) {
	echo "<p>No orders pending. Please try later.</p>";
	exit;
}
// proveravanje da li je dostignut kraj datoteke EOF (End Of File)
while (!feof($fp)) {
	
	// $order = fgetcsv ($fp, 100, "\t"); - izvlaci nizove
	// print_r ($order)."<br />"; - ispisuje nizove
	
	// definisemo varijablu i ispisujemo je 
	$order = fgets ($fp, 999);
	echo $order."<br />";
}
	// dozvoljeno citanje datoteke
	flock($fp, LOCK_UN);
	fclose($fp);
?>
</body>
</html>