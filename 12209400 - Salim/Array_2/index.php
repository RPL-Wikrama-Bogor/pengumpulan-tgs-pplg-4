<?php
    $nilai = array(80, 78, 72, 84, 92, 88);

    echo "Nilai saya : " .implode(',', $nilai);
    echo "<br>";

    echo "Dari keseluruhan nilai paling tinggi : ".max($nilai);
    echo "<br>";
    echo "Nilai paling kecil : ".min($nilai);
    echo "<br>";
    echo "Di urutkan dari yang terkecil : ";
    
    sort($nilai);
    foreach ($nilai as $n) {
        echo $n . " ";
    }
    echo "<br>";
    echo "Di urutkan dari yang terbesar : ";
    rsort($nilai);
    foreach ($nilai as $n) {
        echo $n . " ";
    }
    echo "<br>";

    $total_nilai=array_sum($nilai);

    $jumlah_el= count($nilai);

    $rata_rata= $total_nilai / $jumlah_el;
    echo "Rata rata nilai keseluruhan adalah : " , $rata_rata;
    echo "<br>";

    echo "Setelah melakukan perbaikan nilai sekarang adalah : ";
    
    $Remed = array_search(72, $nilai);
    if ($Remed !== false){
        $nilai [$Remed]= 75;
    }

    sort($nilai);
    foreach ($nilai as $n) {
        echo $n . " ";
    }
    echo "<br>";

    echo "Urutan nilai dari yang terbesar sekarang : ";
    rsort($nilai);
    foreach ($nilai as $n) {
        echo $n . " ";
    }
?>