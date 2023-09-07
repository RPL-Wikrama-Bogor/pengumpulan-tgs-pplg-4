<?php 
//
$bil = readline("Bilangan : ");
$satuan = $bil % 10;
$puluhan = ($bil / 10) % 10;
$ratusan = ($bil / 100) % 10;

echo $satuan . "\n";
echo $puluhan . "\n";
echo $ratusan . "\n";
?>