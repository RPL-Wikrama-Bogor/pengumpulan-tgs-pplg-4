<?php
    $total = 5440;

    $jam = floor($total/3600);
    $menit = floor($total%60);
    $menit2 = floor($menit/60);
    $detik = floor($total%60);

    echo "$jam jam, $menit2 menit, $detik detik";
?>