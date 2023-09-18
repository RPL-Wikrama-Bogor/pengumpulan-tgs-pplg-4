<?php
$sum = 0;
$terbesar = PHP_INT_MIN;
$terkecil = PHP_INT_MAX;
$count = 1;

while ($count <= 20) {
    $number = intval(readline("Masukkan bilangan ke-$count: "));
    
    $sum += $number;
    
    if ($number > $terbesar) {
        $terbesar = $number;
    }
    
    if ($number < $terkecil) {
        $terkecil = $number;
    }
    
    $count++;
}

$average = $sum / 20;

echo "Bilangan terbesar: $terbesar\n";
echo "Bilangan terkecil: $terkecil\n";
echo "Rata-rata: $average\n";
?>
