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

function test_return() {
	echo "Ova naredba ce se izvrsiti";
	return;
	echo "Ova naredba se nikada nece izvrsiti";
}


test_return();

function larger($x, $y) {
	if(!isset($x)||!isset($y)) {
		echo "Prosledite dva broja";
		return;
	}
	if($x>$y) {
		echo $x."<br />";
	} else {
		echo $y."<br />";
	}
	
}

larger(6,5);

function var_args() {
  echo 'Number of parameters:';
  echo func_num_args();

  echo '<br />';
  $args = func_get_args();
  foreach ($args as $arg) {
    echo $arg.'<br />';
  }
}

var_args(1,2,3);

var_args('hello', 47.3);