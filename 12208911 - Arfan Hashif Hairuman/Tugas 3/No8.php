<?php 

echo "Bilangan bulat: ";
$bb = readline();

$s = $bb % 10;
$p = $bb % 100;
$r = $bb % 1000;

echo "Ratusan: " . ($r - $p) / 100 . ", Puluhan: " . ($p - $s) / 10 . ", Satuan: " . $s;

