<?php

$total_detik = 10000; 

$jam = floor($total_detik / 3600);
$sisa_detik = $total_detik % 3600;
$menit = floor($sisa_detik / 60);
$detik = $sisa_detik % 60;

echo "Total detik: $total_detik\n";
echo "Hasil konversi: $jam jam, $menit menit, $detik detik\n";
?>