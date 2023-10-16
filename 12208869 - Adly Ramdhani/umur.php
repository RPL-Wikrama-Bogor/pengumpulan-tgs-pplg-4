<?php

$siswa = [
    [
        "nama" => "elo",
        "nis" => "12208869",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cicurug3",
        "umur" => 18,
    ],
    [
        "nama" => "adly",
        "nis" => "12208867",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cicurug2",
        "umur" => 18,
    ],
    [
        "nama" => "samsul",
        "nis" => "12208868",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cicurug5",
        "umur" => 17,
    ],
    [
        "nama" => "ihsan",
        "nis" => "12208868",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cicurug6",
        "umur" => 16,
    ],
];

$hasilPencarian = [];

if (isset($_GET['cari_nama'])) {
    $namaYangDicari = $_GET['cari_nama'];
    foreach ($siswa as $students) {
        if (strtolower($students["nama"]) == strtolower($namaYangDicari)) {
            $hasilPencarian[] = $students;
        }
    }
} elseif (isset($_GET['cari_usia'])) {
    $siswaUsia17Plus = [];
    foreach ($siswa as $students) {
        if ($students["umur"] >= 17) {
            $siswaUsia17Plus[] = $students;
        }
    }
    $hasilPencarian = $siswaUsia17Plus; 
} else {
    $hasilPencarian = $siswa; 
}



?>

<!DOCTYPE html>
<html>
<head>
    <title>Pencarian Siswa</title>
</head>
<body>
    <h1>Daftar Siswa</h1>

    <form method="GET">
        <label for="cari_nama">Cari Berdasarkan Nama:</label>
        <input type="text" name="cari_nama" id="cari_nama">
        <input type="submit" value="Cari">
    </form>
    <p><a href="?cari_usia=1">Cari yang Berusia 17 Tahun atau Lebih:</a></p>


    
    

    <?php



  
    if (!empty($hasilPencarian)) {
        echo "<h2>Hasil Pencarian:</h2>";
        echo "<ol>";
        foreach ($hasilPencarian as $siswa) {
            echo "<li>";
            echo "Nama: " . $siswa["nama"] . "<br>";
            echo "NIS: " . $siswa["nis"] . "<br>";
            echo "Rombel: " . $siswa["rombel"] . "<br>";
            echo "Rayon: " . $siswa["rayon"] . "<br>";
            echo "Umur: " . $siswa["umur"] . " tahun<br>";
            echo "</li>";
        }
        echo "</ol>";
    } else {
        echo "<p>Tidak ada siswa yang cocok dengan pencarian ini.</p>";
    }
    
  
    
    ?>
</body>
</html>






