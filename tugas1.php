<?php
function namaBulan($bulanKeberapa) {
    $namaBulan = array(
        1 => "JANUARI", 
        2 => "FEBRUARI", 
        3 => "MARET",
        4 => "APRIL",
        5 => "MEI", 
        6 => "JUNI",
        7 => "JULI", 
        8 => "AGUSTUS",
        9 => "SEPTEMBER",
        10 => "OKTOBER", 
        11 => "NOVEMBER",
        12 => "DESEMBER"
    );

    return $namaBulan[$bulanKeberapa];
}

$codepegawai = "1240920239"; 

$golongan = substr($codepegawai, 0, 1);
$tanggal = substr($codepegawai, 1, 2);
$bulan = substr($codepegawai, 3, 2);
$tahun = substr($codepegawai, 5, 4);
$nomorUrut = substr($codepegawai, 9, 2);

$namaBulan = namaBulan((int)$bulan);

echo "Nomor Golongan: $golongan <br>";
echo "Tanggal Lahir: $tanggal $namaBulan $tahun <br>";
echo "Nomor Urut: $nomorUrut";
?>
