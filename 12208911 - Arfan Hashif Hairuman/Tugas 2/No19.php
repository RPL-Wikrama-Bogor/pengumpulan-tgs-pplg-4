<?php
echo "Tiket Vip: ";
$vip = readline();
echo "Tiket Executive: ";
$exc = readline();
echo "Tiket Economy: ";
$eco = readline();
echo "\n";

if ($vip > 50 || $exc > 50 || $eco > 50) {
    echo "Jumlah tiket tidak valid";
    exit;
} else {
    if ($vip >= 35) {
        $kvip = 25;
    } elseif ($vip < 35 && $vip >= 20) {
        $kvip = 15;
    } else {
        $kvip = 5;
    }

    if ($exc >= 40) {
        $kexc = 20;
    } elseif ($exc < 40 && $exc >= 20) {
        $kexc = 10;
    } else {
        $kexc = 2;
    }

    $keco = $eco * 7;
}

$tk = $kvip + $kexc + $keco;
$tt = $vip + $exc + $eco;

echo "Total tiket terjual: " . $tt;
echo "\n";
echo "Total keuntungan: " . $tk;
echo "\n";
echo "Total keuntungan tiket Vip: " . $kvip;
echo "\n";
echo "Total keuntungan tiket Executive: " . $kexc;
echo "\n";
echo "Total keuntungan tiket Economy: " . $keco;
?>