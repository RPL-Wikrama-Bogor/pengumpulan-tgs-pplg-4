<?php

$nilai = array(80, 78, 72, 84, 92, 88);

echo "Nilai saya:" . implode(',',$nilai);
echo "<br>";

echo "nilai terbesar saya adalah:" . max($nilai);
echo "<br>";

echo "nilai terkecil saya adalah:" . min($nilai);
echo "<br>";

sort($nilai);
echo "ini urutan dari yang terkecil:";
foreach ($nilai as $nilaiterkecil) {
    echo  $nilaiterkecil . "|";
}
echo "<br>";

rsort($nilai);
echo "ini urutan dari yang terbesar:";
foreach ($nilai as $nilaiterbesar) {
    echo $nilaiterbesar . "|";
}
echo "<br>";

$total_nilai = array_sum($nilai);
$jumlah = count($nilai);
$rata_rata = $total_nilai / $jumlah;
echo "Rata-rata: " . $rata_rata;
echo "<br>";

$remed = array_search(72, $nilai);
if ($remed !== false){
    $nilai [$remed]= 79;
}
rsort($nilai);
echo "ini urutan dari yang terbesar:";
foreach ($nilai as $nilaiterbesar) {
    echo $nilaiterbesar . "|";
}


?>
