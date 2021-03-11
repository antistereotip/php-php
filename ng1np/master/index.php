<?php 
require_once 'set/master.class.php';

$db = new DB();
$db->konektuj('localhost', 'user', 'pass', 'base');

$rezultat = $db->select('* FROM info LIMIT 0,5');


while  ($row = $rezultat->fetch_object()) {
  echo '<pre>';
  echo $row->title . ' ' . $row->url;
  echo '</pre>';
}

$db->kraj();
