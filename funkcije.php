<?php
function moja_funkcija() {
	echo 'Pozvana je moja funkcija';
}

moja_funkcija();

function create_table($data) {
	echo "<table border=1>";
	reset($data); // pomera interni pokazivac niza na pocetak
	$value=current($data);
	while($value) {
		echo "<tr><td>$value</td></tr>\n";
		$value=next($data);
	}
	echo "</table>";
}

$my_array = array('Line one', 'Line two', 'Line three');
create_table($my_array);

function create_table2($data, $border=1, $cellpadding=4, $cellspacing=4) {
	echo '<table border="'.$border.'" cellpading="'.$cellpadding.'" cellspacing="'.$cellspacing.'"';
	reset($data); // pomera interni pokazivac niza na pocetak
	$value=current($data);
	while($value) {
		echo "<tr><td>$value</td></tr>\n";
		$value=next($data);
	}
	echo "</table>";
}
$my_array = array('Line one', 'Line two', 'Line three');
create_table2 ($my_array, 3, 8, 8);