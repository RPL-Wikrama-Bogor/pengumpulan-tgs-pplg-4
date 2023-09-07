<?php 
$nilai = [20, 80, 72, 60, 50, 40];

echo "Nilai saya :";
foreach ($nilai as $item) {
    echo "$item, ";
}

echo "<br>Dari keseluruhann nilai yang paling tinggi ialah : " . max($nilai);
echo "<br>Sedangkan nilai yang paling kecil : " . min($nilai);

//
$sort = $nilai;
sort($sort);
echo "<br>Apablia diurutkan dari yang terkecil menjadi : " . implode(", ", $sort);

$arsort = $nilai;
arsort($arsort);
echo "<br>Apablia diurutkan dari yang terbesar menjadi : " . implode(", ", $arsort);

$rata = array_sum($nilai) / count($nilai);
$rata = round($rata);
echo "<br>Rata rata : " . $rata;

$index = array_search(72, $nilai);
if ($index) {
    $nilai[$index] = 75;
}

echo "<br>Setelah melakukan perbaikan untuk nilai 72, saya mendapat nilai " . $nilai[$index];
echo "<br> Jadi nilai saya menjadi : ";
foreach($nilai as $item) {
    echo "$item, ";
}

arsort($nilai);
echo "<br>Apabila diurutkan lagi dari yang terbesar menjadi : " . implode(", ", $nilai);
?>
