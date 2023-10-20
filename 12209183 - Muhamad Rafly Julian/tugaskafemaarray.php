<?php 

$siswa =[
    [
        "nama" => "Rafly",
        "nis" => "12209183",
        "rombel" => "PPLG XI-4",
        "rayon" => "cib 3",
        "umur" => 20,
    ],
    [
        "nama" => "widi",
        "nis" => "12209188",
        "rombel" => "PPLG XI-4",
        "rayon" => "cis 3",
        "umur" => 18,
    ],
    [
        "nama" => "salim",
        "nis" => "12209100",
        "rombel" => "PPLG XI-4",
        "rayon" => "cic 6",
        "umur" => 10,
    ],
    [
        "nama" => "rido",
        "nis" => "12209170",
        "rombel" => "PPLG XI-4",
        "rayon" => "cib 1",
        "umur" => 19,
    ],
    [
        "nama" => "hilman",
        "nis" => "12209230",
        "rombel" => "PPLG XI-4",
        "rayon" => "cis 2",
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
                echo "NIS: " . $data["nis"] . "<br>";
                echo "Rombel: " . $data["rombel"] . "<br>";
                echo "Rayon: " . $data["rayon"] . "<br>";
                echo "Umur: " . $data["umur"] . " tahun<br><br>";
            }
        }
    }
}
?>

<h1>Data Siswa</h1>

<form method="post">
    <label for="cari_nama">Cari Siswa berdasarkan Nama:</label>
    <input type="text" id="cari_nama" name="cari_nama">
    <input type="submit" value="Cari">
</form>

<form method="post">
    <input type="submit" name="cari_umur" value="Cari yang sudah umur 17 tahun ke atas">
</form>
