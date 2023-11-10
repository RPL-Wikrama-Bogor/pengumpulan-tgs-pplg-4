<?php 

$siswa = [
    [
        "nama" => "bahri",
        "nis" => 12209858,
        "rombel" => "PPLG XI-2",
        "rayon" => "sukasari 2",
        "umur" => 16,
    ],
    [
        "nama" => "jaya",
        "nis" => 12209959,
        "rombel" => "PPLG XI-2",
        "rayon" => "Ciawi",
        "umur" => 18,
    ],
    [
        "nama" => "soleh",
        "nis" => 12209959,
        "rombel" => "PPLG XI-2",
        "rayon" => "Cibedug 3",
        "umur" => 19,
    ],

];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cari_umur"])) {
        echo "<h2>Data Siswa yang Berumur 17 Tahun ke Atas:</h2>";

        foreach ($siswa as $data) {
            if ($data["umur"] >= 17) {
                echo "<h3>Nama: " . $data["nama"] . "</h3>";
                echo "Umur: " . $data["umur"] . " tahun<br><br>";
            }
        }
    } elseif (isset($_POST["cari_nama"])) {
        $cari_nama = $_POST["cari_nama"];
        echo "<h2>Hasil Pencarian Siswa dengan Nama \"$cari_nama\":</h2>";

        foreach ($siswa as $data) {
            if (stripos($data["nama"], $cari_nama) !== false) {
                echo "<h3>Nama: " . $data["nama"] . "</h3>";
                echo "NIS: " . $data["nis"] . "<br>";
                echo "Rombel: " . $data["rombel"] . "<br>";
                echo "Rayon: " . $data["rayon"] . "<br>";
                echo "Umur: " . $data["umur"] . " tahun<br>";
                echo "Nama Bapak: " . $data["nama_bapak"] . "<br><br>";
            }
        }
    }
}
?>

<h3>Data Siswa</h3>

<form method="post">
    <label for="cari_nama">Cari Siswa berdasarkn Nama:</label>
    <input type="text" id="cari_nama" name="cari_nama">
    <input type="submit" value="Cari">
</form>

<form method="post">
    <input type="submit" name="cari_umur" value="Cari yang sudah umur 17 tahun ke atas">
</form>
