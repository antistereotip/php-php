<?php
/* $a = 27;
	$b = 10; */
	/* $result = $a/$b;
	$resultd = $a%$b;
	$resultm = $a*$b;
	$resultp = $a+$b;
	$resultmi = $a-$b;
	echo $result;
	echo $resultd;
	echo $resultm;
	echo $resultp;
	echo $resultmi; */
	//$a=0;
	//$b = 6 + ($a = 5);
	//echo $b. '<br/>';
	// $a=4;
	// echo ++$a; echo '<br />';
	// echo $a++; echo '<br />';
	// echo $a;
	// echo $a++; echo '<br />';
	// echo $a;
	// Operator reference
	$a = 5;
	$b = $a;
	echo $a;echo '<br />';
	echo $b;echo '<br />';
	$a = 7;echo '<br />';
	// nakon promene varijable $a samo ce se $a promeniti, dok ce $b ostati ista.
	echo $a;echo '<br />';
	echo $b;echo '<br />';
	// da bi izbegli kopiranje operatora reference $b dodacemo sledeci izraz
	$a = 7;
	$b  = &$a;
	$a = 3; // sada $a i $b su 7
	echo $a;echo '<br />'; echo $b; echo '<br />';
	echo '<br />';
	//unset($a);
	//echo $b;echo '<br />';
	echo '<br />';
	$a == $b;
	var_dump($b);echo '<br />';
	$a = $b;
	var_dump($b);
	$x=TRUE;
	$y=FALSE;
	echo $z=$y OR $x;
	echo '<br />';
	$a > $b;
	var_dump($a);echo '<br />';
	//function f($x='surprise')
    //{
    //if ($x == 'surprise')
    //    return $x; // returns 0 !!
    //}
   
	//echo f(0);
	$e = 4; $t = 5;
	var_dump($e != $t);echo '<br />';
	var_dump($e = $t);echo '<br />';
	var_dump($e == $t);echo '<br />';
	var_dump($e === $t);echo '<br />';
	var_dump($e <> $t);echo '<br />';
		
	$ocena=5;
	print ($ocena>=3) ? "Polozio" : "Pao"; echo '<br />'; // Vraca vrednost Polozio
	print ($ocena<=3) ? "Polozio" : "Pao"; echo '<br />'; // Vraca vrednost Pao
	
	echo 'brm brm';
	//$k=101; - nejasno
	//$k >= 0 && $k <= 100; echo '<br />'; // Vraca vrednost Polozio - nejasno
	//var_dump($k); - nejasno
	
	
		echo 'brm brm';
echo '<br />';
$numbers = array(0.001, 0.002, 0.003, 0.004, 0.005, 0.006, 0.007, 0.008, 0.009);
foreach ($numbers as $number)
    print $number."->".number_format($number, 2, '.', ',')."<br>";

	
	echo '<br />';
	$out = `dir c:`;
	echo '<pre>'.$out.'</pre>';
	
	$s = 56;
	echo gettype($s).'<br/>';
	settype($a, 'double');
	echo gettype($a).'<br/>';
	
	
	$a = "test";
$b = "anothertest";

var_dump(isset($a));      // TRUE
var_dump(isset($a, $b)); // TRUE

unset ($a);

var_dump(isset($a));     // FALSE
var_dump(isset($a, $b)); // FALSE

$foo = NULL;
var_dump(isset($foo));   // FALSE


$tireqty = 3;
if ($tireqty < 10) {
	$discount = 0;
}	elseif ($tireqty>=10 && $tireqty <= 49) {
	$discount = 5;
}	elseif ($tireqty >=50 && $tireqty <= 99) {
	$discount = 10;
}	elseif ($tireqty > 100) {
	$discount = 15;
}



$find = 'We do not know how this customer found us.';
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
	
	//while ($distance <= 250)
	//{
		//echo "<tr>";
		//echo "<td align='right'>".$distance."</td>";
		//echo "<td align='right'>". $distance / 10 ."</td>";
		//echo "</tr>\n";
		//$distance +- 50;
	//} beskonacna petlja, nesto nije u redu
	
	
	
	?>