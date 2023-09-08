<?php

    $nilai = [80, 78, 72, 84, 92, 88];

    echo "Nilai saya:";
    foreach($nilai as $angka){
        echo ", ", $angka;
    }

    echo "<br>";
    $nilaiMax = max($nilai);
    echo "Nilai saya yang paling tinggi : " . $nilaiMax;
    echo "<br>";
    $nilaiMin = min($nilai);
    echo "Nilai saya yang paling kecil : " . $nilaiMin;
    echo "<br>";
    asort($nilai);
    echo "Nilai saya yang paling kecil : " . implode(", ",$nilai);
    echo "<br>";
    rsort($nilai);
    echo "Nilai saya yang paling besar : " . implode(", ",$nilai);
    echo "<br>";
    $rataRata = array_sum($nilai) / count($nilai);
    echo "Apabila dibulatkan, rata rata dari keseluruhan nilai saya menjadi : " . round($rataRata);
    echo "<br>";
    $nilai = [80, 78, 72, 84, 92, 88];
    $nilai[2] = 75; 
    echo " Setelah melakukan perbaikan, nilai saya menjadi : " . implode(", ", $nilai) . "<br>";
    echo "Jadi nilai saya sekarang : " . implode(", ", $nilai);

?>