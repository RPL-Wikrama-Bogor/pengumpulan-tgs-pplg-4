<?php
function getbulannama($bulan) {
    $bulanNama = array(
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

    return $bulanNama[$bulan];
}

$employeeCode = "32005200313"; // Ganti dengan kode pegawai yang diinginkan

$golongan = substr($employeeCode, 0, 1);
$hari = substr($employeeCode, 1, 2);
$bulan = substr($employeeCode, 3, 2);
$tahun = substr($employeeCode, 5, 4);
$urut = substr($employeeCode, 9);

if ($bulan == "01") {
    $bulannama = "JANUARI";
} elseif ($bulan == "02") {
    $bulannama = "FEBRUARI";
} elseif ($bulan == "03") {
    $bulannama = "MARET";
} elseif ($bulan == "04") {
    $bulannama = "APRIL";
} elseif ($bulan == "05") {
    $bulannama = "MEI";
} elseif ($bulan == "06") {
    $bulannama = "JUNI";
} elseif ($bulan == "07") {
    $bulannama = "JULI";
} elseif ($bulan == "08") {
    $bulannama = "AGUSTUS";
} elseif ($bulan == "09") {
    $bulannama = "SEPTEMBER";
} elseif ($bulan == "10") {
    $bulannama = "OKTOBER";
} elseif ($bulan == "11") {
    $bulannama = "NOVEMBER";
} elseif ($bulan == "12") {
    $bulannama = "DESEMBER";
} else {
    $bulannama = "UNKNOWN";
}

echo "Nomor Golongan: " . $golongan . "<br>";
echo "Tanggal Lahir: " . $hari . " " . $bulannama . " " . $tahun . "<br>";
echo "Nomor Urut: " . $urut;
?>
