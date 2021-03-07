<?php

    // definisanje varijabli
	$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
	$tireqty = $_POST['tireqty']; 
	$oilqty = $_POST['oilqty'];
	$sparkqty = $_POST['sparkqty'];
	$adress = $_POST['adress'];
	$find = $_POST['find'];
	$date = date ('H:i, jS F Y');
?>
<html>
<head>
	<title>Milutin's Auto Parts - Order Results</title>
</head>
<body>
<h1>Milutin's Autoparts</h1>
<h2>Order Results</h2>
<?php 
	// switch uslovljavanje prosledjeno kroz formu select taga sa name="find"
	switch($find)
	{
		case 'a':
			echo '<p>Regular Customer.</p>';
			break;
		case 'b':
			echo '<p>Customer referred by TV advert.</p>';
			break;
		case 'c':
			echo '<p>Customer reffered by phone directory.</p>';
			break;
		case 'd':
			echo '<p>Customer reffered by word of mouth.</p>';
			break;
		default:
			echo '<p>We do not know how this customer found us.</p>';
			break;
	}


	echo '<p>Order processed at '; 
	echo date('H:i, S F');
	echo '</p>';
	
	// echo '<p>Your order is as follows: </p>';
	// echo "$tireqty tires<br />";
	// echo $tireqty.' tires<br />';
	// echo $oilqty.' bottles of oil<br />';
	// echo $sparkqty.' spark plugs<br />';

	// sabiranje varijabli u totalu
	$totalqty = 0;
	// Ukupno proizvoda
	$totalqty = $tireqty + $oilqty + $sparkqty;
	echo 'Items ordered:'.$totalqty.'<br />';
	
	// Definisi cenu proizvoda
	define('TIREPRICE', 20);
	define('OILPRICE', 90);
	define('SPARKPRICE', 50);
	
	// Pomnozi broj proizvoda sa njihovim cenama
	$totalamount = $tireqty * TIREPRICE
				+  $oilqty * OILPRICE
				+  $sparkqty * SPARKPRICE;
				
	
	// ukoliko je total identican nuli, izvrsi blok unutar uslova
	if ($totalqty == 0) {
		echo '<p style="color:red;">';
		echo 'You did not order anything on the previous page!';
		echo '</p>';
		exit;
	}
	// u suprotnom izvrsi ovaj blok
	else {
		if ($tireqty>0)
			echo $tireqty.' tires<br />';
		if ($oilqty>0)
			echo $oilqty.' botltles of oil<br />';
		if ($sparkqty>0)
			echo $sparkqty.' spark plugs<br />';
	}
	
	
	// Izracunavanje totala sa porezom .... 2 je number format, a 1 je integer ko se sabira sa 0.20 i daje 120% ukupne sume		
	echo 'Subtotal: $'.number_format($totalamount, 2).'<br/>';
	$taxrate = 0.20; //Stopa poreza je 20%
	$totalamount = $totalamount * (1 + $taxrate);
	echo 'Total including tax: $'.number_format($totalamount, 2).'<br />';
	
	
    
	// definisi output string
	$outputstring = $date."\t".$tireqty." tires \t".$oilqty." oil\t"
					.$sparkqty." spark plugs\t\$".$totalamount
					."\t". $adress."\n";
	
	// upisivanje od kraja postojeceg sadrzaja i ukoliko ne postoji fajl a ga kreira, b - binarni rezim, @ ne dozvoljava output greske
	@ $fp = fopen("$DOCUMENT_ROOT/orders/orders.txt", 'ab');
	
	
	// zabranjeno upisivanje u datoteku
	flock ($fp, LOCK_EX);
	
	// ukoliko nije $fp uslov ispunjen, izvrsice se blok koda unutar uslova
	if (!$fp)
	{
		echo '<p>Vasu porudzbinu ne mozemo da obradimo. Pokusajte kasnije</p>';
		exit;
	}
	
	// upisi string u fajl
	fwrite($fp, $outputstring, strlen($outputstring));
	
	// dozvoljeno citanje datoteke
	flock($fp, LOCK_UN);
	
	// kretanje po datoteci
	// echo 'Final position of the pointer is '.(ftell($fp));
	// echo '<br/>';
	// rewind($fp);
	// echo 'After rewind, the position is '.(ftell($fp));
	// echo '<br />';
	
	// zatvori varijablu
	fclose($fp);
	echo "<p>Order writen.</p>";
	
	
?>

</body>
</html>
