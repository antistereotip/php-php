<?php
$url = $_SERVER['SCRIPT_FILENAME'];
$break = explode('/', $url);
$fajl = $break[count($break) - 1];
$keshfajl = 'xcache/cache/kesh-'.substr_replace($fajl, '', -4).'.html';
$keshtime = 18000;

// Servira iz keša ako je mlađe od $keshtime
if (file_exists($keshfajl) && time() - $keshtime < filemtime($keshfajl)) {
  echo '<!-- Keširana kopija, generisana ' . date('H:i', filemtime($keshfajl)) . ' -->\n';
  include($keshfajl);
  exit;
}

// Pokreće izlazni buffer
if (@ini_set('zlib.output_compression', TRUE) ||
    @ini_set('zlib.output_compression_level', 2)) {
  ob_start();
} else {
  ob_start('ob_gzhandler');
}
