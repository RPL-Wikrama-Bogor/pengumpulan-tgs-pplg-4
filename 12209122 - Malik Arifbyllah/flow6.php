<?php

$nama = array();
$max = 0;
$nilaitertinggi = 0;
$i = 0;

while ($i <= 10) {
    $nilai = readline();
    $nama[$i] = $nilai;
    if ($nama [$i] > $max) {
        $max = $nama [$i];
        $nilaitertinggi = 1;

    }
    elseif ($nama[$i] == $max) {
        $nilaitertinggi++;
    }
    $i++;
}

echo "nilai tertinggi adalah = $nilaitertinggi";
echo "<br>";
echo "nama yang memiliki nilai tertinggi = $max";

?>