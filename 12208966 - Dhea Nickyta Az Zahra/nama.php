<?php 
$siswa = [
    [
        'nama' => 'Azalia Khanza hafifah',
        'nis' => 12208935,
        'rombel' => 'PPLG XI-4',
        'rayon' => 'cibedug 2',
        'umur' => 16,
    ],

    [
        'nama' => 'Khayla Rizka Aulia',
        'nis' => 12209083,
        'rombel' => 'PPLG XI-4',
        'rayon' => 'ciawi 4',
        'umur' => 17,
    ],

    [
        'nama' => 'Fanny Diah',
        'nis' => 12208998,
        'rombel' => 'PPLG XI-4',
        'rayon' => 'tajur 4',
        'umur' => 16,
    ],

    [
        'nama' => 'Frieska Aulia putri',
        'nis' => 12209017,
        'rombel' => 'PPLG XI-4',
        'rayon' => 'cicurug 1',
        'umur' => 16,
    ],

    [
        'nama' => 'Annisa Aulia Wahyudi',
        'nis' => 12208902,
        'rombel' => 'PPLG XI-4',
        'rayon' => 'Ciawi 4',
        'umur' => 17,
    ],

    [
        'nama' => 'Dhea Nickyta Az Zahra',
        'nis' => 12208966,
        'rombel' => 'PPLG XI-4',
        'rayon' => 'Tajur 2',
        'umur' => 16,
    ]
    ];


//fungsi nyari siswa yang 17+
function cariUsiaLebihDari17($siswa){
    $hasilCari = [];
    foreach ($siswa as $data){
        if ($data["umur"] >= 17){
            $hasilCari[] = $data;
        }
    }
    return $hasilCari;
}
function cariBerdasarkanNama($siswa, $namaCari){
    $hasilPencarian = [];
    foreach($siswa as $data){
        if ($data["nama"] == $namaCari){
            $hasilPencarian[] = $data;
    }
}
return $hasilPencarian;
}
if (isset($_POST["cariUsia"])){
    $hasilPencarian = cariUsiaLebihDari17($siswa);
}elseif (isset($_POST["cariNama"])) {
    $namaCari = $_POST["namaCari"];
    $hasilPencarian = cariBerdasarkanNama($siswa, $namaCari);
    usort($hasilPencarian, function($a, $b) {
        return $b["umur"] - $a["umur"];
    });
} else {
    $hasilPencarian = $siswa;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>cari siswa</h1>
    <form method="post">
        <label>cari siswa yang lebih dari 17 tahun:</label>
        <input type="submit" name="cariUsia" value="cari">
    </form>
    <form method="post">
        <label>cari siswa berdasarkan nama:</label>
        <input type="text" name="namaCari">
        <input type="submit" name="cariNama" value="Cari">
    </form>
    <h2>Hasil Pencarian:</h2>
    <ul>
        <?php foreach ($hasilPencarian as $siswa) : ?>
            <li><?= $siswa["nama"] ?> : (Usia: <?= $siswa["umur"] ?> tahun) : <?= $siswa['nis'] ?> : <?= $siswa['rombel'] ?> : <?= $siswa['rayon'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>