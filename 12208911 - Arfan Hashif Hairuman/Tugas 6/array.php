<?php

$n = array(80, 78, 72, 84, 92, 88);

echo "Dari keseluruhan nilai yang terbesar adalah: " . max($n);
echo "</br>";
echo "Sedangkan nilai yang terkecil adalah: " . min($n);
echo "</br>";
echo "Apabila diurutkan dari yang terkecil menjadi: ";
sort($n);
echo implode(", ", $n);
echo "</br>";
echo "Apabila diurutkan dari yang terbesar menjadi: ";
rsort($n);
echo implode(", ", $n);
echo "</br>";
$t = array_sum($n);
$c = count($n);
$m = $t / $c;
$m = round($m,0);
echo "Apabila dibulatkan rata-rata dari nilai saya menjadi: " . $m;
echo "</br>";
$cn = array_search(72, $n);
if ($cn) {
    $n[$cn] = 75;
}
echo "Setelah melakukan perbaikan nilai 72 sekarang berubah menjadi 75, nilai saya sekarang: ";
echo implode(", ", $n);
echo "</br>";
echo "Sekarang apabila diurutkan dari yang terbesar menjadi: ";
rsort($n);
echo implode(", ", $n);