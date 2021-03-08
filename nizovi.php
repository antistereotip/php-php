<?php
$products = array('Tires','Oil','Spark Plugs');
$numbers = range(1, 10);
$neparni = range (1, 10, 2);
$parni = range (2, 10, 2);
$slova = range ('a', 'z'); echo '<br />';

echo $products[0]; echo $products[1]; echo $products[2]; echo '<br />';

// iscitava varijablu slova od a do z
print_r ($slova); echo '<br />';

// iscitava varijablu numbers od 1 do 10
print_r ($numbers); echo '<br />';

// iscitava vrednost varijable parni koja ima vrednosti parnih brojeva
print_r ($parni); echo '<br />';

// iscitava vrednost varijable neparni koja ima vrednosti neparnih brojeva
print_r ($neparni); echo '<br />';

// promena varijable unutar niza, nakon ovoga products 0 ima vrednost Fuses
$products[0] = 'Fuses';

//Ukoliko zelimo dodati u niz novu vrednost, dodajemo numericki index
$products[3] = 'Fuses'; echo '<br />';

// Ovo ce iscitati sledece - FusesOilSpark PlugsFuses	
echo $products[0];echo $products[1];echo $products[2];echo $products[3];
echo '<br />';
$products[0] = 'Tires';
$products[1] = 'Oil';
$products[2] = 'Spark Plugs';

// Upotreba for petlje za pristupanje elementima, sa indexom manje od 3
for ($i = 0; $i < 3; $i++) {
	echo $products[$i]." ";
}
// Upotreba foreach petlje za pristupanje elementima, pristupa svim elementima u nizu
foreach ($products as $current) {
	echo $current." ";
}
//sledeci kod pravi niz u kome su imena artikala kljucevi, a cene su vrednosti
$prices = array('Tires'=>100, 'Oil'=>10, 'Spark Plugs'=>4);

// sledeci kod pravi isti niz prices. Umesto niza sa 3 elementa, prvo se pravi niz sa samo jednim elementom, a zatim mu se dodaju jos dva
$prices = array('Tires' => 100);
$prices['Oil'] = 10;
$prices['Spark Plugs'] = 4;

//sledeci je ekvivalentan kod. Tu se niz ne pravi izricito, vec tek kada mu se doda prvi element
$prices['Tires'] = 100;
$prices['Oil'] = 10;
$prices['Spark Plugs'] = 4;
echo '<br />';

// Pogledajmo foreach petlju
foreach($prices as $key => $value) {
	echo $key.'=>'.$value.'<br/>';
}

//while petlja pomocu funkcije each
while ($element = each ($prices)) {
	echo $element ['key'];
	echo " - ";
	echo $element ['value'];
	echo "<br />";
}

// istu stvar kao u prethodnom delu koda, mozemo uraditi i sa while petljom na ovaj nacin
reset($prices);
while(list($product, $price) = each($prices)) {
	echo "$product - $price<br />";
}

echo 'brm brm <br />';

// reset vraca pokazivac na pocetak niza, pa omogucava da ponovo predjemo sve elemente niza
reset($prices); // ukoliko ne stavimo reset funkciju, browser nece iscitati nista, jer reset vraca niz na pocetak
while(list($product, $price) = each($prices)) {
	echo "$product - $price<br />";
}


// dvodimenzioni niz
$products = array( array('TIR', 'Tires', 100),
				   array('OIL', 'Oil', 10),
				   array ('SPK', 'Spark Plugs', 4));

// pristupicemo nizu direktno i prikazati sadrzaj
echo '|'.$products[0][0].'|'.$products[0][1].'|'.$products[0][2].'|<br/>';
echo '|'.$products[1][0].'|'.$products[1][1].'|'.$products[1][2].'|<br/>';
echo '|'.$products[2][0].'|'.$products[2][1].'|'.$products[2][2].'|<br/>';

//nizu mozemo pristupiti i putem for petlje i dobicemo isti rezultat kao u prethodnom primeru
for ($row = 0; $row < 3; $row ++) {
	for ($column = 0; $column <3; $column ++) {
		echo '|'.$products[$row][$column];
	}
	echo '|<br />';
}

// Umesto brojeva, kolonama mozemo dati imena. Ova naredba formira isti skup artikala, ali kolonama dodeljuje imena
$products = array(array('Code' => 'TIR',
						'Description' => 'Tires',
						'Price' => '100'
						),
				  array('Code' => 'OIL',
						'Description' => 'Oil',
						'Price' => '10'
						),
				  array ('Code' => 'SPK',
						'Description' => 'Spark Plugs',
						'Price' => '4'
						),
	
				);

// Index nije numericki i lakse se pamti. Pristupicemo nizu putem for petlje
for ( $row = 0; $row <3; $row ++) {
	echo '|'.$products[$row]['Code'].'|'.$products[$row]['Description'].'|'.$products[$row]['Price'].'|<br />';
}


// each i list omogucavaju prolazak kroz unutrasnje nizove, zbog cega je unutar for potrebna while petlja
for ( $row = 0; $row <3; $row ++) {
	while (list($key, $value) = each ($products[$row])) {
			echo "|$value";
	}
	echo '<br/>';
}

// U kodu ispod imamo primer trodimenzionog niza koji sadrzi nizove nizova
$categories = array (array (array ('CAR_TIR', 'Tires', 100),
							array ('CAR_OIL', 'Oil', 10),
							array ('CAR_SPK', 'Spark Plugs', 4)
							),
				    array (array ('VAN_TIR', 'Tires', 120),
							array ('VAN_OIL', 'Oil', 12),
							array ('VAN_SPK', 'Spark Plugs', 5)
							),
				    array (array ('TRK_TIR', 'Tires', 150),
							array ('TRK_OIL', 'Oil', 15),
							array ('TRK_SPK', 'Spark Plugs', 6)
							)
			);
// isprintuj varijablu categories
 print_r ($categories); echo '<br />';
 
 // buduci da ovaj niz ima samo numericke indekse, za prikazivanje njegovog sadrzaja,  mogu se koristiti ugnjezdene for petlje
 for ($layer=0; $layer<3; $layer++) {
	 echo "Layer $layer<br />";
	 for ($row=0; $row<3; $row++) {
		 for ($column = 0; $column<3; $column++) {
			echo '|'.$categories[$layer][$row][$column]; 
		 }
		 echo '<br />';
	 }
 }
echo '<br />';			
// sortiranje nizova

$products = array('Tires', 'Oil', 'Spark Plugs');
// sortiraj po abecednom redu
sort ($products);
print_r($products);
echo '<br />';
$prices = array(100, 10, 4);
// sortiraj po numerickom redu
sort($prices);
print_r($prices);
echo '<br />';

$prices = array('Tires'=>100, 'Oil'=>10, 'Spark Plugs'=>4);
//sortira prema rastucem redosledu cena
asort($prices);
print_r($prices);
echo '<br />';
//funkcija ksort redja kljuceve po abecedi
ksort($prices);
print_r($prices);
//Postoje funkcije rsort, arsort i krsort koje sortiraju niz opadajucim redosledom

//sortiranje visedimenzionih nizova
// dvodimenzioni niz
$products = array( array('TIR', 'Tires', 100),
				   array('OIL', 'Oil', 10),
				   array ('SPK', 'Spark Plugs', 4));
				 
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

usort ($products, 'compare');

echo compare('Tires', 'Tires' );
echo compare('Oil', 'Spark Plugs' );
echo compare('Spark Plugs', 'Tires' );
