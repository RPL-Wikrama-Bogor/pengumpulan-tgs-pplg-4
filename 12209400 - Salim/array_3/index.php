<?php 

$siswa =[
    [
        "nama" => "David",
        "nis" => "12209100",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cicurug 7",
        "umur" => 20,
    ],
    [
        "nama" => "Jaya",
        "nis" => "12209200",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cicurug 6",
        "umur" => 18,
    ],
    [
        "nama" => "Bakhri",
        "nis" => "12209300",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cicurug 7",
        "umur" => 16,
    ],
    [
        "nama" => "Hery",
        "nis" => "12209400",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cicurug 5",
        "umur" => 19,
    ],
    [
        "nama" => "Uus",
        "nis" => "12209500",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cicurug 8",
        "umur" => 17,
    ],
    [
        "nama" => "fahri",
        "nis" => "12204170",
        "rombel" => "PPLG XI-4",
        "rayon" => "cia 1",
        "umur" => 18,   
    ],
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cari_umur"])) {
        echo "<h1>Data Siswa yang Berumur 17 Tahun ke Atas:</h1>";

        foreach ($siswa as $data) {
            if ($data["umur"] >= 17) {
                echo "<h2>Nama: " . $data["nama"] . "</h2>";
                echo "NIS: " . $data["nis"] . "<br>";
                echo "Rombel: " . $data["rombel"] . "<br>";
                echo "Rayon: " . $data["rayon"] . "<br>";
                echo "Umur: " . $data["umur"] . " tahun<br><br>";
            }
        }
    } elseif (isset($_POST["cari_nama"])) {
        $cari_nama = $_POST["cari_nama"];
        echo "<h1>Hasil Pencarian Siswa dengan Nama \"$cari_nama\":</h1>";

        foreach ($siswa as $data) {
            if (stripos($data["nama"], $cari_nama) !== false) {
                echo "<h2>Nama: " . $data["nama"] . "</h2>";
                echo "NIS: "  . $data["nis"] . "<br>";
                echo "Rombel: " . $data["rombel"] . "<br>";
                echo "Rayon: " . $data["rayon"] . "<br>";
                echo "Umur: " . $data["umur"] . " tahun<br><br>";
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Siswa</title>
</head>
<body>
        <h1>Data Siswa</h1>

    <form method="post">
        <label for="cari_nama">Cari Siswa berdasarkan Nama:</label>
        <input type="text" id="cari_nama" name="cari_nama">
        <input type="submit" value="Cari">
    </form>

    <form method="post">
        <input type="submit" name="cari_umur" value="Cari yang sudah umur 17 tahun ke atas">
    </form>
</body>
</html>
