<?php 

$nilai = array(80, 78, 72, 84, 92, 88);

echo "Nilai saya : " .implode(',', $nilai);
echo "<br>";
echo "Nilai Yang paling Tinggi adalah: " .max($nilai);
echo "<br>";
echo "Nilai Yang paling kecil adalah: " .min($nilai);
echo "<br>";

sort($nilai);
echo "urutan dari terkecil ke besar: ";
foreach ($nilai as $nilai_terkecil) {
    echo "| $nilai_terkecil";
}
echo "<br>";

rsort($nilai);
echo "urutan dari terbesar ke kecil: ";
foreach ($nilai as $nilai_terbesar) {
    echo  "| $nilai_terbesar";
}

echo "<br>";

$total = array_sum($nilai);
$jumlah_elemen = count($nilai);
$rata_rata = $total / $jumlah_elemen;

echo "dibulatkan, rata-rata keseluruhan: " . $rata_rata;

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