<?php

$n = array(80, 78, 72, 84, 92, 88);

echo "Dari keseluruhan nilai yang terbesar adalah: " . max($n);
echo "</br>";
echo "Sedangkan nilai yang terkecil adalah: " . min($n);
echo "</br>";
echo "Apabila diurutkan dari yang terkecil menjadi: ";
sort($n);
$arrlength = count($n);
for($x = 0; $x < $arrlength; $x++) {
    echo $n[$x];
    echo " ";
}
echo "</br>";
echo "Apabila diurutkan dari yang terbesar menjadi: ";
rsort($n);
$arrlength = count($n);
for($x = 0; $x < $arrlength; $x++) {
    echo $n[$x];
    echo " ";
}
echo "</br>";
$n[5] += 3;
echo "Setelah melakukan perbaikan nilai 72 sekarang berubah menjadi 75, nilai saya sekarang: ";
$arrlength = count($n);
for($x = 0; $x < $arrlength; $x++) {
    echo $n[$x];
    echo " ";
}
echo "</br>";
echo "Sekarang apabila diurutkan dari yang terbesar menjadi: ";
rsort($n);
$arrlength = count($n);
for($x = 0; $x < $arrlength; $x++) {
    echo $n[$x];
    echo " ";
}