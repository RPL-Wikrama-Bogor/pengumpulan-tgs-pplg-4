<?php 

$nama = readline ("nama kariawan: ");
$gaji_pokok = floatval(readline("gaji pokok: "));

$tunj = 0.20 * $gaji_pokok;
$pjk = 0.15 * ($gaji_pokok+$tunj);
$gaji_bersih = $gaji_pokok + $tunj - $pjk;

echo "Nama Kariawan: " $nama "<br>";
echo "Tunjangan: " $tunj "<br>";
echo "Pajak: " $pjk "<br>";
echo "Gaji bersih: " $gaji_bersih "<br>";

?>
