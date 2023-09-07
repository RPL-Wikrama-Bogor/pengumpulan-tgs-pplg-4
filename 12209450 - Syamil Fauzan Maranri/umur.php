<?php

$siswa = [
    [
    "nama" => "Fema",
    "nis" => "11907154",
    "rombel" => "PPLG XI-2",
    "rayon" => "Cicurug 3",
    "umur" => 18,
    
],[
    "nama" => "Putri",
    "nis" => "11907155",
    "rombel" => "PPLG XI-2",
    "rayon" => "Ciawi 1",
    "umur" => 16,
],[
    "nama" => "Putra",
    "nis" => "11907156",
    "rombel" => "PPLG XI-4",
    "rayon" => "Sukasari 2",
    "umur" => 17,
],[
    
    "nama" => "Arta",
    "nis" => "11907157",
    "rombel" => "PPLG XI-4",
    "rayon" => "Wikrama 4",
    "umur" => 17,
],[
    
    "nama" => "Ramadhan",
    "nis" => "11907158",
    "rombel" => "PPLG XI-5",
    "rayon" => "Wikrama 1",
    "umur" => 19,
],[
    
    "nama" => "Ihsan",
    "nis" => "11907159",
    "rombel" => "PPLG XI-6",
    "rayon" => "Ciawi 5",
    "umur" => 20,
]

]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>

    <!-- Opsi 1: Menampilkan data yang memiliki umur >= 17 -->
    <h2><a href="?opsi=umur">Cari yang sudah berusia lebih dari 17 tahun</a></h2>

    <?php
    if (isset($_GET['opsi']) && $_GET['opsi'] === 'umur') {
        echo '<ul>';
        foreach ($siswa as $data) {
            if ($data['umur'] >= 17) {
                echo '<li>' . $data['nama'] . ' : ' . $data['umur'] . '</li>';
            }
        }
        echo '</ul>';
    }
    ?>

    <!-- Opsi 2: Menampilkan data dari nama yang dicari -->
    <h2>Cari berdasarkan nama</h2>
    <form method="post">
        <input type="text" name="nama_cari" placeholder="Masukkan nama">
        <button type="submit">Cari</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama_cari = $_POST['nama_cari'];
        $found = false;

        echo '<ul>';
        foreach ($siswa as $data) {
            if (strcasecmp($data['nama'], $nama_cari) === 0) {
                echo '<li>' . $data['nama'] . ' : ' . $data['umur'] . ' : ' . $data['nis'] . ' : ' . $data['rombel'] . ' : ' . $data['rayon'] . '</li>';
                $found = true;
            }
        }
        echo '</ul>';

        if (!$found) {
            echo 'Nama tidak ditemukan.';
        }
    }
    ?>

    <!-- Menampilkan seluruh data siswa -->
    <h2>Seluruh Data Siswa</h2>
    <ul>
        <?php
        foreach ($siswa as $data) {
            echo '<li>' . $data['nama'] . ' : ' . $data['umur'] . ' : ' . $data['nis'] . ' : ' . $data['rombel'] . ' : ' . $data['rayon'] . '</li>';
        }
        ?>
    </ul>
</body>
</html>
