<?php
$nilai = [80, 78, 72, 84, 92, 88];

// Mengubah array menjadi string dengan dipisahkan koma
$strnilai = implode(', ', $nilai);
echo "Nilai saya: $strnilai <br>";

// Mengambil nilai terbesar
$terbesar = max($nilai);
echo "dari keseluruhan nilai yang paling tinggi : $terbesar <br>";

// Mengambil nilai terkecil
$terkecil = min($nilai);
echo "sedangkan nilai yang paling kecil: $terkecil <br>";

// Mengurutkan dari terkecil
sort($nilai);
echo "Urutan Terkecil ke Terbesar: " . implode(', ', $nilai) . "<br> ";

// Mengurutkan dari terbesar
rsort($nilai);
echo "Urutan Terbesar ke Terkecil: " . implode(', ', $nilai) . " <br>";

// Menentukan rata-rata
$average = array_sum($nilai) / count($nilai);
$roundedAverage = round($average);
// Membulatkan rata-rata 
echo "setelah menghitung rata-rata keseluruhan nilai saya: $roundedAverage <br>";

// Mengubah nilai 72 menjadi 75
// mencari item pada array dan menghasilkan indexnya
$key = array_search(72, $nilai);
if ($key !== false) {
    $nilai[$key] = 75;
}

//mengurutkan nilai 72-72
asort:($nilai);
// nilai 72 belum diganti menjadi 75
echo"setelah perbaikan dari nilai 72 ke 75 maka nilai saya sekarang : $strnilai <br>";

// Mengurutkan dari terbesar ke terkecil setelah mengubah nilai 72 menjadi 75
arsort($nilai);
echo "Urutan Terbesar ke Terkecil (setelah mengubah 72 menjadi 75): " . implode(', ', $nilai) . " ";

?>

 