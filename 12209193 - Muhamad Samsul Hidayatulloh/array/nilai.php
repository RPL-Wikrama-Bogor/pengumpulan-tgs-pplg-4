<?php
$nilaiSaya = array(80, 78, 72, 84, 92, 88);
echo "Nilai Saya: " . implode(",", $nilaiSaya) . "<br><br>";

$nilaiTerbesar = max($nilaiSaya);
echo "Nilai Terbesar: " . $nilaiTerbesar . "<br>";
$nilaiTerkecil = min($nilaiSaya);
echo "Nilai Terkecil: " . $nilaiTerkecil . "<br>";

$nilaiTerkecil = $nilaiSaya;
sort($nilaiTerkecil);
echo "Urutan Nilai Terkecil: " . implode(", ", $nilaiTerkecil) . "<br>";

$nilaiTerbesar = $nilaiSaya;
arsort($nilaiTerbesar);
echo "Urutan Nilai Terbesar: " . implode(", ", $nilaiTerbesar) . "<br>";

$rataRata = array_sum($nilaiSaya) / count($nilaiSaya);
echo "Rata-rata Nilai: " . round($rataRata) . "<br>";

$newnilai = array_search(72, $nilaiSaya);
$newnilai = array_splice($nilaiSaya, $newnilai, 1, [75]);

$nilaibaruTerbesar = $nilaiSaya;
arsort($nilaibaruTerbesar);

echo "Setelah melakukan perbaikan untuk nilai 72 maka nilai sekarang menjadi 75, jadi nilai sekarang: " . implode(",", $nilaiSaya) . "<br>";
echo "Sekarang urutannya dari yang terbesar menjadi: " . implode(",", $nilaibaruTerbesar) . "<br>";