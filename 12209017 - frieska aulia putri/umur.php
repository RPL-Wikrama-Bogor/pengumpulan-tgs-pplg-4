<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cari umur</title>
</head>
<?php
   
 $siswa = [
    [
        'nama' => "Frieska",
        'umur' => 18 ,
        'rayon' => "Cicurug 1",
        'rombel' => "PPLG XI-4",
        'nis' => 12209017,
    ],
    [
        'nama' => "Aulia",
        'umur' => 16 ,
        'rayon' => "Cicurug 3 ",
        'rombel' => "PPLG XI-3",
        'nis' => 12209117,
    ],
    [
    'nama' => "Nabila",
        'umur' => 17 ,
        'rayon' => "Ciawi 2",
        'rombel' => "DKV XI-1",
        'nis' => 12207896,
    ],
    [
        'nama' => "Salma",
        'umur' => 18 ,
        'rayon' => "Ciawi 4",
        'rombel' => "PPLG XI-4",
        'nis' => 12208953,
    ],
    [
        'nama' => "Paul",
        'umur' => 16 ,
        'rayon' => "Cibedug 2",
        'rombel' => "PPLG XI-4",
        'nis' => 12201456,
    ],
    [
        'nama' => "Rony",
        'umur' => 17,
        'rayon' => "Wikrama 5",
        'rombel' => "PPLG XI-7",
        'nis' => 12209870,
    ]
    ];
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
            <label>Cari siswa yang lebih dari 17 tahun:</label>
            <input type="submit" name="cariUsia" value="cari">
        </form>
        <form method="post">
            <label>Cari siswa berdasarkan nama:</label>
            <input type="text" name="namaCari">
            <input type="submit" name="cariNama" value="Cari">
        </form>
        <ul>
            <?php foreach ($hasilPencarian as $siswa) : ?>
                <li><?= $siswa["nama"] ?> : (Usia: <?= $siswa["umur"] ?> tahun) : <?= $siswa['nis'] ?> : <?= $siswa['rombel'] ?> : <?= $siswa['rayon'] ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
    </html>

