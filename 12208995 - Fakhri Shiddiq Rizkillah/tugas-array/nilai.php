<?php
$nilai = array(80, 78, 72, 84, 92, 88);

echo "Nilai asli:";
foreach ($nilai as $key => $value) {
    echo "$key: $value";
}
echo "<br>";
$terbesar = max($nilai);
$terkecil = min($nilai);

echo "Nilai terbesar: " . $terbesar . "";
echo "<br>";
echo "Nilai terkecil: " . $terkecil . "";
echo "<br>";

arsort($nilai);

echo "Nilai dari terbesar ke terkecil:";
foreach ($nilai as $key => $value) {
    echo "$key: $value";
}

asort($nilai);
echo "<br>";

echo "Nilai dari terkecil ke terbesar:";
foreach ($nilai as $key => $value) {
    echo "$key: $value";
}

echo"<br>";

$rata_rata = array_sum($nilai) / count($nilai);

echo "Rata-rata nilai keseluruhan: " . $rata_rata;

echo"<br>";
$ubah = array_search(72, $nilai);
if ($ubah !== false) {
    $nilai[$ubah] = 75;
}

echo "Nilai setelah perubahan:";
ksort($nilai);
foreach ($nilai as $key => $value) {
    echo "$key: $value";
}
echo"<br>";

arsort($nilai);


echo "Nilai dari terbesar ke terkecil setelah perubahan:";
foreach ($nilai as $key => $value) {
    echo "$key: $value";
}

?>