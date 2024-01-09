<?php
$total_detik = 5440;

$jam = floor($total_detik/3600);
$menit = floor($total_detik%60);
$menit2 = floor($menit/60);
$detik = floor($total_detik%60);

// jawabannya tidak tepat
echo "$jam jam, $menit2 menit, $detik detik";

?>