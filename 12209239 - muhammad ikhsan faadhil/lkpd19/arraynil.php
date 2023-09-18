<?php

$nil = [12,20,9,6,10,18];

echo"nilai yang saya peroleh. => " . implode(",", $nil) . "</b>";
echo "<br>";

$nilmax = max($nil);
echo "dan keseluruhan nilai yang paling tinggi. => " . $nilmax . "</b>";
echo "<br>";

$nilmin = min($nil);
echo "dan keseluruhan nilai yang paling terkecil. => " . $nilmin . "</b>";
echo "<br>";

$nil2 = [];
foreach($nil as $nl) {
    $nil2[] = $nl;
}

asort($nil2);
    echo "apabila diurutkan dari nilai yang terbesar : " . implode(",", $nil2) . "</b>";
    echo "<br>";
asort($nil2);
    echo "apabila diurutkan dari nilai yang terkecil : " . implode(",", $nil2) . "</b>";
    echo "<br>";

echo "apabila dibulatkan, rata-rata dari keseluruhan nilai adalah : " . round(array_sum($nil)/count($nil)) . "</br>";

$key = array_search(min($nil), $nil);
$nilgan = [75];
array_splice($nil, $key, 1, $nilgan);

echo "setelah melakukan perbaikan nilai " . min($nil2) . "</b>, saya mendapat nilai <b>$nilgan[0]</b>. Nilai saya menjadi : <b>" . implode(", ", $nil) . "</b> <br />";
arsort($nil); 
echo "sehingga sekarang urutan nilai saya dari yang terbesar adalah : <b>" . implode(", ", $nil) . "</b>";

?>