<?php
//
$totalGram = readline("Total Gram : ");
$hargaBefore = 500 * $totalGram;
$diskon = 5 * $hargaBefore / 100;
$hargaAfter = $hargaBefore - $diskon;

echo "Harga sebelum diskon : " . $hargaBefore . "\n";
echo "Diskon : " . $diskon . "\n";
echo "Harga sesudah diskon : " . $hargaAfter . "\n";
?>