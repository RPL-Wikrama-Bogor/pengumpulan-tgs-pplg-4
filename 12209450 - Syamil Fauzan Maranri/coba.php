<?php 

$masukdetik = 10000;

$jam= floor($masukdetik/3600);
$menit= floor($masukdetik%3600);
$menit= floor($menit/60);
$detik=floor($masukdetik%60);

echo "$jam Jam: $menit Menit :$detik Detik";

?>

// test push