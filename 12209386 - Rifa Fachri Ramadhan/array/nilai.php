<?php

$nilai = [90, 78, 72, 84, 92, 88];

    $terkecil = min($nilai);
    $jumlah = array_sum($nilai);
    $rt = $jumlah / count($nilai);
    $urutan = implode(",", $nilai);

echo "Nilai Saya = " .$urutan . "<br>". "<br>";

echo "urutan nilai terbesar = ";
arsort($nilai);
foreach($nilai as $urutanT){
    echo $urutanT . ", " ;
}
echo "<br>";

echo "urutan nilai terkecil ke terbesar = ";
asort($nilai);
foreach($nilai as $urutanK){
    echo $urutanK . ", ";
}
echo "<br>";
    $terbesar = max($nilai);

echo "Nilai Terbesar = " . $terbesar. "<br>" ;
echo "Nilai Terkecil = " .$terkecil. "<br>";
echo "Nilai rata-rata saya = " .$rt. "<br>";

$remed = $nilai[2] = 75;
$urutan2 = implode(",", $nilai);
echo "setelah melakukan perbaikan untuk nilai ". $terkecil . " maka nilai sekarang menjadi " . $remed .", jadi nilai " . $urutan2;

echo "<br>";
echo "sekarang urutan terbesar menjadi = ";
arsort($nilai);
foreach($nilai as $urutanB){
     echo $urutanB. ", ";
}




