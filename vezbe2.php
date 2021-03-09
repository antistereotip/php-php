<?php

//sortiranje visedimenzionih nizova
// dvodimenzioni niz
$products = array( array('TIR', 'Tires', 100),
				   array('OIL', 'Oil', 10),
				   array ('SPK', 'Spark Plugs', 4));
print_r ($products); echo '<br />';
				 
//funkcija compare uporedjuje vrednosti iz niza, vrednosti x[2] i y[2] su u ovom slucaju cene jer su treci element u nizu, 0, 1, 2
function compare($x, $y) {
	if ($x[2] == $y[2]) {
		return 0;
	} else if ($x[2]<$y[2]) {
		return -1;
	} else {
		return 1;
	}
}
echo '<br />';
var_dump ($products[0]);
echo '<br />';
var_dump ($products[1]);
echo '<br />';
var_dump ($products[2]);
echo '<br />';
//usort ($products, 'compare');

echo compare('Tires', 'Tires' );
echo compare('Oil', 'Spark Plugs' );
echo compare('OIL', 'SPK' );
echo compare('SPK', 'OIL');
echo compare('OIL', 'SPK');
echo '<br />';


function my_sort($a,$b)
{
if ($a==$b) return 0;
  return ($a<$b)?-1:1;
}

$a=array(4,2,8,6);
usort($a,"my_sort");

$arrlength=count($a);
for($x=0;$x<$arrlength;$x++)
  {
  echo $a[$x];
  echo "<br>";
  }
  
echo '<br />';

function my_uksort($f,$c)
{
if ($f==$c) return 0;
return ($f<$c)?-1:1;
}

$arr=array("a"=>4,"b"=>2,"c"=>8,"d"=>6);
uksort($arr,"my_sort");
var_dump (my_uksort('a', 'b'));

echo '<br />';

//$x and $y are two of the elements of your array that you are trying to sort, that get passed into your comparison function. -
// - So $x[0] is the first element of one of those sub-arrays, $x[1] is the second, etc. –


//When you call the compare($x, $y) function, you are passing the strings as the parameters. 
//These string are treated as arrays with 0-based indexing.
//So, when echo compare('Tires', 'Tires' ); is executed, these two strings are passed 
//and according to compare function, the character at index 1(indexing starts at 0) i.e. 2nd character is compared.
//So, for this ```echo compare('Tires', 'Tires' );```, the compared characters are 'i' and 'i' 
//which are equal and hence 0 is returned. So, for this echo compare('Oil', 'Spark Plugs' );, the compared 
//characters are 'i' and 'p'. 'i' is less than p and hence -1 is returned. To decide which character is lower 
//than the other, lookup ASCII codes. And so on for other function calls. Let me know, if you still have any doubt.
$malaslova = "mala slova ce postati velika";
$malaslova = strtoupper($malaslova);
echo $malaslova;

echo '<br/>';

// Specify the range
$a = range("A","Z");
// Show the character one after another
foreach($a as $char)
    echo $char."<br>";

echo '<br />';
// Specify the alphabet range 
$alpharange = range( 'A', 'Z' );
// Show the alphabet one after another
foreach ( $alpharange as $i ){
    echo "$i\n";
}
echo '<br/>';
$str = '<a href="https://antistereotip.net">Go to antistereotip.net</a>';
echo htmlentities($str);

echo '<br/>';
$test = 'Your customer service is exelent';
echo substr($test, 1); 
echo '<br/>';
echo substr($test, -9);
echo '<br/>';
echo substr($test, 5, -9);
echo '<br/>';
echo strlen("Hello");
echo '<br/>';
$email = "a@a.c";
if (strlen($email)<6) {
	echo "Ovo nije validna email adresa";
	exit; // prisilno zavrsavanje php skripte
}
