<?php
function tambahSatuDetik($waktu) {
    $time = strtotime($waktu);
    $time = $time + 1; // Menambah 1 detik
    return date("H:i:s", $time);
}

$waktuAwal = "23:59:59"; // Ganti dengan waktu awal yang diinginkan
$waktuAkhir = tambahSatuDetik($waktuAwal);

echo "Waktu awal: " . $waktuAwal . "<br>";
echo "Waktu setelah ditambah 1 detik: " . $waktuAkhir;
?>