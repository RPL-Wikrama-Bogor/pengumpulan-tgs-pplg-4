<?php
// Daftar nilai awal
$nilai_saya = [80, 78, 72, 84, 92, 88];
$nilai = implode(", ", $nilai_saya);
echo "Nilai saya :   $nilai <br><br>";

// niali tertinggi
$nilai_tertinggi = max($nilai_saya);
echo "Dari keseluruhan nilai, nilai paling tinggi ialah: " . $nilai_tertinggi . "<br>";

// nilai tertendah
$nilai_terendah = min($nilai_saya);
echo "Sedangkan nilai paling kecil adalah: " . $nilai_terendah . "<br>";

// Mengurutkan nilai dari terendah ke tertinggi
sort($nilai_saya);
echo "Apabila diurutkan dari yang terkecil menjadi: " . implode(", ", $nilai_saya) . "<br>";

// Mengurutkan nilai dari tertinggi ke terendah
arsort($nilai_saya);
echo "Apabila diurutkan dari yang terbesar menjadi: " . implode(", ", $nilai_saya) . "<br>";

// Menghitung rata-rata nilai
$rata_rata = array_sum($nilai_saya) / count($nilai_saya);
echo "apabila, dibulatkan rata-rata dari keseluruhan nilai saya menjadi : " . intval($rata_rata) . "<br>";

// Melakukan perbaikan nilai
$indeks3 = array_search(72, $nilai_saya);
if ($indeks3 !== false) {
    $nilai_saya[$indeks3] = 75;
}
echo "Setelah melakukan perbaikan untuk nilai 72, nilai saya menjadi: " . implode(", ", $nilai_saya) . "<br>";

// Mengurutkan nilai setelah perbaikan
rsort($nilai_saya);
echo "Sehingga sekarang, urutan nilai saya dari yang terbesar menjadi: " . implode(", ", $nilai_saya) . "<br>";
?>
