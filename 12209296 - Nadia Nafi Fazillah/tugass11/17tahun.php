<?php
$siswa = [
    [
        "nama" => "Fema",
        "nis" => "129345",
        "rombel" => "PPLG XI-6",
        "rayon" => "Sukasari 1",
        "umur" => 17,
    ],
    [
        "nama" => "Marsha",
        "nis" => "129909",
        "rombel" => "PPLG XI-1",
        "rayon" => "Cisarua 8",
        "umur" => 15,
    ],
    [
        "nama" => "Aulia",
        "nis" => "1261313",
        "rombel" => "PPLG XI-7",
        "rayon" => "Ciawi 7",
        "umur" => 13,
    ],
    [
        "nama" => "Putra",
        "nis" => "126307",
        "rombel" => "PPLG XI-3",
        "rayon" => "Wikrama 5",
        "umur" => 18,
    ],
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
    <title>17 Tahun</title>
</head>
<body>
    <div class="card">
    <h1>Pencarian siswa</h1>
    <form method="post">
        <label>Siswa yang lebih dari 17 tahun:</label>
        <input type="submit" name="cariUsia" value="cari">
    </form>
    <br>
    <form method="post">
        <label>Siswa berdasarkan nama:</label>
        <input type="text" name="namaCari">
        <input type="submit" name="cariNama" value="Cari">
    </form>
    <p><strong>Hasil Pencarian</strong></p>
    <ul>
        <?php foreach ($hasilPencarian as $siswa) : ?>
            <li><?= $siswa["nama"] ?>: <?= $siswa["umur"] ?> tahun , nis: <?= $siswa['nis'] ?>, rombel : <?= $siswa['rombel'] ?>, rayon : <?= $siswa['rayon'] ?></li>
        <?php endforeach; ?>
    </ul>
    </div>


    <style>
        .card{
            background-color: #F9DEC9;
        border-radius: 10px;
        max-width: 100%;
        text-align: center;
        padding: 70px 120px;
        margin: 100px 400px;
    }
        
    </style>
</body>
</html>