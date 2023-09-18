<?php

$siswa = [
    [
        'nama' => "komang",
        'nis' => 12209086,
        'rombel' => "PPLG XI-4",
        'rayon' => "cicurug 3",
        'umur' => 18
    ],
    [
        'nama' => "catur",
        'nis' => 12209087,
        'rombel' => "PPLG XI-4",
        'rayon' => "cisarua 5",
        'umur' => 19
    ],
    [
        'nama' => "samsul",
        'nis' => 12209088,
        'rombel' => "PPLG XI-4",
        'rayon' => "cisarua 4",
        'umur' => 20
    ],
    [
        'nama' => "rifa",
        'nis' => 12209086,
        'rombel' => "PPLG XI-4",
        'rayon' => "cicurug 1",
        'umur' => 14
    ],
    [
        'nama' => "isyam",
        'nis' => 12209086,
        'rombel' => "PPLG XI-4",
        'rayon' => "cicurug 10",
        'umur' => 9
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post">
        <ol>
             <li>
                <a href="?umur=1">Cari yang sudah berusia lebih dari 17 tahun</a>
            </li>
            <li>
                <label for="nama">Cari berdasarkan nama:</label>
                <input type="text" name="nama" id="nama">
                <button type="submit" name="submit">Cari</button>
            </li>
        </ol>
    </form>

</body>
</html>

<?php
function umur($siswa) {
    $hasilPencarian = [];
    foreach ($siswa as $data) {
        if ($data['umur'] > 17) {
            $hasilPencarian[] = $data;
        }
    }
    return $hasilPencarian;
}

if (isset($_GET['umur']) && $_GET['umur'] == 1) {
    $hasilPencarian = umur($siswa);
}

function nama($siswa, $nama) {
    $hasilPencarian = [];
    foreach ($siswa as $data) {
        if (strtolower($data['nama']) === strtolower($nama)) {
            $hasilPencarian[] = $data;
        }
    }   
    return $hasilPencarian;
}

if (isset($_POST['submit'])) {
    $namaCari = $_POST['nama'];
    if (!empty($namaCari)) {
        $hasilPencarian = nama($siswa, $namaCari);
    } else {
        $hasilPencarian = umur($siswa);
    }
}
 if (isset($hasilPencarian)) : ?>
    <h2>Hasil Pencarian:</h2>
    <ul>
        <?php foreach ($hasilPencarian as $siswa) : ?>
            <li>
                Nama: <?php echo $siswa['nama']; ?><br>
                Umur: <?php echo $siswa['umur']; ?><br>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
