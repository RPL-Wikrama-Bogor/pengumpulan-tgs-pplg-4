<?php
$nilai = [90, 76, 70, 84, 92, 86];

echo "Nilai awal yang saya peroleh: <b>" . implode(", ", $nilai) . "</b> <br/>";
echo "<br/>";
echo "Dari keseluruhan nilai,nilai yang paling tinggi ialah : <b>" . max($nilai) . "</b> <br />";
echo "Sedangkan nilai yang paling kecil ialah : <b>" . min($nilai) . "</b> <br />";

$nilai2 = [];
foreach ($nilai as $nl) {
    $nilai2[] = $nl;
}
asort($nilai2);
echo "Apabila diurutkan dari nilai yang terkecil hingga yang terbesar menjadi : <b>" . implode(", ", $nilai2) . "</b> <br/>";

arsort($nilai2);
echo "Apabila diurutkan dari nilai yang terbesar hingga yang terkecil menjadi : <b>" . implode(", ", $nilai2) . "</b> <br />";

echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya adalah : <b>" . round(array_sum($nilai)/count($nilai)) . "</b> <br />";

$key = array_search(min($nilai), $nilai);
$nilaiGanti = [75];
array_splice($nilai, $key, 1, $nilaiGanti);

echo "Setelah melakukan perbaikan untuk nilai <b>" . min($nilai2) . "</b>, saya mendapat nilai <b>$nilaiGanti[0]</b>. Nilai saya menjadi : <b>" . implode(", ", $nilai) . "</b> <br />";

arsort($nilai);
echo "sehingga sekarang urutan nilai saya dari yang terbesar adalah : <b>" . implode(", ", $nilai) . "</b>";
?>
<?php
