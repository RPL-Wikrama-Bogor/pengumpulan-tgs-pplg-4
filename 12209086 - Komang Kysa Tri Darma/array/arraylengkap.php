<?php

$nilai = [80, 78, 72, 84, 92, 88];

echo "Nilai Saya: ". "<strong>" .implode(", ",$nilai) ."</strong><br><br>";
echo "Dari keseluruhan nilai yang paling tinggi ialah<strong>: " . max($nilai) ."</strong><br>";
echo "Sedangkan nilai yang paling kecil: <strong>" . min($nilai) . "</strong><br>";
$nilai_terkecil = $nilai;
asort($nilai_terkecil);
echo "Apabila diurutkan dari yang terkecil menjadi: <strong>" . implode(", ",$nilai_terkecil) . "</strong><br>";
$nilai_terbesar = $nilai;
arsort($nilai_terbesar);
echo "Apabila Dibulatkan dari yang terbesar menjadi: <strong>" . implode(", ",$nilai_terbesar) . "</strong><br>";
$rata = array_sum($nilai) / count($nilai);
echo "Apabila di bulatkan, rata rata dari keseluruhan nilai menjadi: <strong>" . round($rata) . "</strong><br>";

$subset = array_search(72, $nilai);
$subsett = array_splice($nilai, $subset, 1, [75]);
echo "Setelah melakukan perbaikan untuk nilai 72 di ganti menjadi 75 jadi nilai saya: <strong>" . implode(", ", $nilai) . "</strong><br>";
$nilai_terbesar_splice = $nilai;
arsort($nilai_terbesar_splice);
echo "sehingga sekarang, urutan nilai saya dari terbesar menjadi: <strong>" . implode(", ", $nilai_terbesar_splice);

?>