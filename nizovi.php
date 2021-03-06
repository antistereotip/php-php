<?php
$products = array('Tires','Oil','Spark Plugs');
$numbers = range(1, 10);
$neparni = range (1, 10, 2);
$slova = range ('a', 'z');
echo $products[0];echo $products[1];echo $products[2];
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
/// Pogledajmo foreach petlju
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