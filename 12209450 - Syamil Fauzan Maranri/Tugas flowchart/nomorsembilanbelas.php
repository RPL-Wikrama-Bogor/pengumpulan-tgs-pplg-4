<?php
$vipSold = 0;
$executiveSold = 0;
$economySold = 0;

echo "Masukkan jumlah tiket terjual untuk kelas VIP: ";
$vipSold = intval(readline());

echo "Masukkan jumlah tiket terjual untuk kelas Eksekutif: ";
$executiveSold = intval(readline());

echo "Masukkan jumlah tiket terjual untuk kelas Ekonomi: ";
$economySold = intval(readline());

$totalTickets = $vipSold + $executiveSold + $economySold;

// Menghitung keuntungan per kelas tiket
$profitVip = 0;
if ($vipSold >= 35) {
    $profitVip = 0.25;
} elseif ($vipSold >= 20) {
    $profitVip = 0.15;
} else {
    $profitVip = 0.05;
}

$profitExecutive = 0;
if ($executiveSold >= 40) {
    $profitExecutive = 0.20;
} elseif ($executiveSold >= 20) {
    $profitExecutive = 0.10;
} else {
    $profitExecutive = 0.02;
}

$profitEconomy = 0.07;

// Menghitung keuntungan secara keseluruhan
$totalProfit = ($vipSold * $profitVip) + ($executiveSold * $profitExecutive) + ($economySold * $profitEconomy);

// Cetak hasil
echo "Keuntungan per kelas tiket:\n";
echo "Kelas VIP: $profitVip\n";
echo "Kelas Eksekutif: $profitExecutive\n";
echo "Kelas Ekonomi: $profitEconomy\n";

echo "Keuntungan keseluruhan: $totalProfit\n";
echo "Jumlah tiket per kelas:\n";
echo "Kelas VIP: $vipSold\n";
echo "Kelas Eksekutif: $executiveSold\n";
echo "Kelas Ekonomi: $economySold\n";
echo "Total tiket dari seluruh kelas: $totalTickets\n";
?>
