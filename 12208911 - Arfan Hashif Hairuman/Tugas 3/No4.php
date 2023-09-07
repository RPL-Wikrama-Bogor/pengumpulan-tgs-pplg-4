<?php 
echo "Nama: ";
$nama = readline();
echo "Gaji Pokok: ";
$gp = readline();

$tj = (20 * $gp) / 100;
$pjk = (15 *($gp + $tj)) / 100;
$gb = $gp + $tj - $pjk;

echo "\n";
echo "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=";
echo "\n";
echo "Nama: " . $nama;
echo "\n";
echo "Tujangan: " . number_format($tj);
echo "\n";
echo "Pajak: " . number_format($pjk);
echo "\n";
echo "Gaji bersih: " . number_format($gb);
