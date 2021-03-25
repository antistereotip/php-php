<?php
//u modelu postoji niz sa vrednoscu $transakcija
require_once('../model/niz_podataka.php');

//datum u mikrosekundima
$datum = round(microtime(true) * 1000);

//ispis vrednosti niza
$rezultat = print_r($transakcija, true);

//istinitost cvora
$istinitost_noda = 1;

//spakuj podatke u niz
$podaci = array($rezultat, $datum, $istinitost_noda);

//spakuj sve varijable iz niza u fajl
file_put_contents('../view/node0.txt', implode(' ',$podaci)."\n",FILE_APPEND | LOCK_EX);
file_put_contents('../view/node1.txt', implode(' ',$podaci)."\n",FILE_APPEND | LOCK_EX);
file_put_contents('../view/node2.txt', implode(' ',$podaci)."\n",FILE_APPEND | LOCK_EX);
file_put_contents('../view/node3.txt', implode(' ',$podaci)."\n",FILE_APPEND | LOCK_EX);
file_put_contents('../view/node4.txt', implode(' ',$podaci)."\n",FILE_APPEND | LOCK_EX);
?>