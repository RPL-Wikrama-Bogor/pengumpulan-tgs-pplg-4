<?php 

$siswa =[
    [
        "nama" => "Hillman Farizi Ali",
        "nis" => "12209045",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cisarua 2",
        "umur" => 17,
    ],
    [
        "nama" => "Widi Wibowo",
        "nis" => "12209463",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cisarua 3",
        "umur" => 18,
    ],
    [
        "nama" => "Salim",
        "nis" => "12209400",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cicurug 6",
        "umur" => 20,
    ],
    [
        "nama" => "M.Ridho Hafiz",
        "nis" => "12209170",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cibedug 1",
        "umur" => 19,
    ],
    [
        "nama" => "M.Rafly Julian",
        "nis" => "12209183",
        "rombel" => "PPLG XI-4",
        "rayon" => "Cibedug 3",
        "umur" => 16,
    ],
    [
        "nama" => "Fahri Siddiq",
        "nis" => "12204170",
        "rombel" => "PPLG XI-4",
        "rayon" => "Ciawi 1",
        "umur" => 16,
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