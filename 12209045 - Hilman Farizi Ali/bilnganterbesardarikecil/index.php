<?php
  
$nilai = array(80, 60, 50, 85, 100, 90);

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
$ubah = array_search(50, $nilai);
if ($ubah !== false) {
    $nilai[$ubah] = 50;
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