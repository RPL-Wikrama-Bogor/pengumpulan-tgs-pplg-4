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
    
    "nama" => "Alfin",
    "nis" => "12208882",
    "rombel" => "PPLG XI-4",
    "rayon" => "Cisarua 6",
    "umur" => 16,
],[
    
    "nama" => "Sigit",
    "nis" => "12209415",
    "rombel" => "PPLG XI-1",
    "rayon" => "Wikrama 3",
    "umur" => 99,
],[
    
    "nama" => "Ikhsan",
    "nis" => "12209239",
    "rombel" => "PPLG XI-4",
    "rayon" => "Wikrama 2",
    "umur" => 56789,
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
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h3 {
            color: #333;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        ul, ol {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        form {
            margin-top: 10px;
        }

        input[type="text"] {
            padding: 5px;
            width: 200px;
        }

        button {
            padding: 5px 10px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
    </style>
    <h3>Data Siswa</h3>

 
    <h3><a href="?opsi=umur">Cari yang sudah berusia lebih dari 17 tahun</a></h3>

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

    
    <h3>Cari berdasarkan nama</h3>
    <form method="post">
        <input type="text" name="nama_cari" placeholder="Masukkan nama">
        <button type="submit">Cari</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama_cari = $_POST['nama_cari'];
        $found = false;

        echo '<ol>';
        foreach ($siswa as $data) {
            if (strcasecmp($data['nama'], $nama_cari) === 0) {
                echo '<li>' . $data['nama'] . ' : ' . $data['umur'] . ' : ' . $data['nis'] . ' : ' . $data['rombel'] . ' : ' . $data['rayon'] . '</li>';
                $found = true;
            }
        }
        echo '</ol>';

        if (!$found) {
            echo 'Nama tidak ditemukan.';
        }
    }
    ?>

  
    <h2>Siswa</h2>
    <ol>
        <?php
        foreach ($siswa as $data) {
            echo '<li>' . $data['nama'] . ' : ' . $data['umur'] .'</li>';
        }
        ?>
        
    </ol>
</body>
</html>