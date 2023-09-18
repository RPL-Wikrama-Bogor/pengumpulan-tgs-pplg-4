<?php

$nilai = [80, 78, 72, 84, 92, 88];

echo "Nilai Saya: ";
foreach($nilai as $item){
    echo ", $item";
}
echo "<br>";
echo "Dari keseluruhan nilai yang paling tinggi adalah: " . max($nilai) ;
echo "<br>";
echo "Dari keseluruhan nilai yang paling kecil adalah: " . min($nilai);
echo "<br>";
sort($nilai);
echo "Apabila diurutkan dari yang terkecil menjadi: " . implode(", ", $nilai);
echo "<br>";
rsort($nilai);
echo "Apabila diurutkan dari yang terbesar menjadi: " . implode(", ", $nilai);
echo "<br>";
$rata_rata = array_sum($nilai) / count($nilai);
echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi: " . floor($rata_rata);
echo "<br>";
$index = array_search(72, $nilai);
if($index){
    $nilai[$index] = 75;
}
echo "Setelah melakukan perbaikan untuk nilai 72, saya mendapat nilai: " . min($nilai);
echo "<br>";
rsort($nilai);
echo "Apabila diurutkan dari yang terbesar menjadi: " . implode(", ", $nilai);






?>