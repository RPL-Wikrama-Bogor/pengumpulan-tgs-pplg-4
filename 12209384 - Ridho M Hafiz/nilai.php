<?php
$nilai = array(80, 78, 72, 84, 92, 88);

echo "Nilai asli:<br>";
foreach ($nilai as $key => $value) {
    echo "$key: $value<br>";
}

$terbesar = max($nilai);
$terkecil = min($nilai);

echo "<br>Nilai terbesar: " . $terbesar . "<br>";
echo "Nilai terkecil: " . $terkecil . "<br>";

arsort($nilai);

echo "<br>Nilai dari terbesar ke terkecil:<br>";
foreach ($nilai as $key => $value) {
    echo "$key: $value<br>";
}

asort($nilai);

echo "<br>Nilai dari terkecil ke terbesar:<br>";
foreach ($nilai as $key => $value) {
    echo "$key: $value<br>";
}

echo"<br>";

$rata_rata = array_sum($nilai) / count($nilai);

echo "Rata-rata nilai keseluruhan: " . $rata_rata;

echo"<br>";
$ubah = array_search(72, $nilai); 
if ($ubah !== false) {
    $nilai[$ubah] = 75;
}

echo "<br>Nilai setelah perubahan:<br>";
ksort($nilai);
foreach ($nilai as $key => $value) {
    echo "$key: $value<br>";
}

arsort($nilai); 

echo "<br>Nilai dari terbesar ke terkecil setelah perubahan:<br>";
foreach ($nilai as $key => $value) {
    echo "$key: $value<br>";
} 
?>
