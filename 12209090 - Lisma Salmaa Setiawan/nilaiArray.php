 <?php
$nilaisaya = [80, 78, 72, 84, 92, 88];

//mengubah array menjadi string dengan menggunakan fungsi implode().
//biar rapih dipisah pake koma
$stringNilai = implode(', ', $nilaisaya);
echo "Nilai saya : $stringNilai <br>";

//mengambil nilai paling besar
$terbesar = max($nilaisaya);
echo "Dari keseluruhan nilai yang paling besar adalah : $terbesar <br>";

//mengambil nilai paling kecil
$terkecil = min($nilaisaya);
echo "Dari keseluruhan nilai yang paling kecil adalah : $terkecil <br>";

//diurutkan dari yang terbesar
arsort($nilaisaya);
echo "Apabila diurutkan dari yang terbesar menjadi :  " . implode(', ',  $nilaisaya) . "<br>";

//diurutkan dari yang terkecil
sort($nilaisaya);
echo "Apabila diurutkan dari yang terkecil menjadi : " . implode(', ', $nilaisaya) . "<br>";

//nilai rata rata dari keseluruhan
//penggunaan intval(). untuk pembulatan hasil
$rata_rata = array_sum($nilaisaya) /count($nilaisaya);
echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : " . intval($rata_rata) . "<br>";

//perbaikan nilai
$indeks3 =array_search(72, $nilaisaya);
if($indeks3 !== false) {
    $nilaisaya[$indeks3] = 75;
}
echo "setelah melakukan perbaikan untuk nilai 72, nilai saya menjadi : " . implode(', ', $nilaisaya) . "<br>";

//mengurutkan nilai setelah perbaikan
rsort($nilaisaya);
echo "sehingga sekarang, urutan nilai saya dari yang terbesar menjadi : " . implode(', ', $nilaisaya) . "<br>";
?>