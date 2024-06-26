<?php
$siswa = [
    [
        "nama" => "naura",
        "nis" => "12219225",
        "rombel" => "PPLG XI-5",
        "rayon" => "Sukasari 1",
        "umur" => 17,
    ],
    [
        "nama" => "Septian",
        "nis" => "12209250",
        "rombel" => "PPLG XI-1",
        "rayon" => "Cicurug 3",
        "umur" => 18,
    ],
    [
        "nama" => "nabila",
        "nis" => "1221980",
        "rombel" => "PPLG xi-5",
        "rayon" => "Cisarua 4",
        "umur" => 14,
    ],
    [
        "nama" => "agista",
        "nis" => "12209780",
        "rombel" => "PPLG Xi 5",
        "rayon" => "cisarua 4",
        "umur" => 18,
    ],
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
</body>
</html>
