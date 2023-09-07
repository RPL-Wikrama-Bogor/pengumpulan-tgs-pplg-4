<?php 
echo "Total gram: ";
$tg = readline();

$hsb = 500 * $tg;
$ds = 5 * $hsb / 100;
$hst = $hsb - $ds;

echo "Harga sebelum: " . $hsb . ", Diskon: " . $ds . ", Harga setelah: " . $hst;
