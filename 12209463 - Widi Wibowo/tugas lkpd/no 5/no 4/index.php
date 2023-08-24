<?php

$jam;
$menit;
$detik;
$totalDetik;

$totalDetik = 5440;

$jam = floor($totalDetik / 3600);

$sisaDetik = $totalDetik % 3600;

$menit = floor($sisaDetik / 60);

$detik = $sisaDetik % 60;

echo "Total Detik: $totalDetik detik\n";
echo "Hasil Konversi: $jam jam, $menit menit, $detik detik\n";
?>
