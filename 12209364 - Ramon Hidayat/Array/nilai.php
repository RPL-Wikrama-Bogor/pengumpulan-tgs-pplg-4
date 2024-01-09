<?php 
    $nilai = [80, 78, 72, 84, 92, 88];

    $stringNilai = implode(', ', $nilai);
    echo "Nilai Saya : <b>" . $stringNilai . "</b><br>";

    
    $nilaiTerbesar = max($nilai);
    echo "Dari keseluruhan nilai yang paling tinggi ialah : <b>" . $nilaiTerbesar . "</b><br>";

    
    $nilaiTerkecil = min($nilai);
    echo "Sedangkan nilai yang paling kecil : <b>" . $nilaiTerkecil . "</b><br>";


    sort($nilai);
    echo "Apabila diurutkan dari yang terkecil menjadi : <b>" . implode(', ', $nilai) . "</b><br>";

   
    echo "Apabila diurutkan dari yang terbesar menjadi : <b>" . implode(', ', array_reverse($nilai)) . "</b><br>";


    $rataRata = round(array_sum($nilai) / count($nilai));
    echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : <b>" . $rataRata . "</b><br>";

    
    echo "Setelah melakukan perbaikan untuk nilai <b>" . $nilaiTerkecil . "</b>, ";

    
    $key = array_search(72, $nilai);
    if ($key !== false) {
        $nilai[$key] = 75;
        
    }
    
    $nilaiBaru = min($nilai);
    echo "saya mendapat nilai <b>" . $nilaiBaru . "</b>. Jadi nilai saya sekarang : <b>" . implode(', ', $nilai) . "</b><br>";
    
    echo "Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : <b>" . implode(', ', array_reverse($nilai)) . "</b>";
    
?>