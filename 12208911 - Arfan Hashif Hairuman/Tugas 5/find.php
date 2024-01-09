<?php
$siswa =  [[
    "nama" => "Fema",
    "nis" => 11907165,
    "rombel" => "PPLG-XII-2",
    "rayon" => "Cicurug-3",
    "umur" => 18
],[
    "nama" => "Putri",
    "nis" => 11907155,
    "rombel" => "PPLG-X-9",
    "rayon" => "Ciawi 1",
    "umur" => 16
],[
    "nama" => "Putra",
    "nis" => 11908912,
    "rombel" => "PPLG-XI-11",
    "rayon" => "Cicurug-10",
    "umur" => 17
],[
    "nama" => "Rifki",
    "nis" => 11907165,
    "rombel" => "PPLG-XI-7",
    "rayon" => "Tajur-5",
    "umur" => 18
],[
    "nama" => "Revan",
    "nis" => 11902365,
    "rombel" => "PPLG-X-11",
    "rayon" => "Tajur-1",
    "umur" => 16
],[
    "nama" => "Remon",
    "nis" => 11906365,
    "rombel" => "PPLG-XII-7",
    "rayon" => "Tajur-9",
    "umur" => 18
],[
    "nama" => "Devian",
    "nis" => 11906535,
    "rombel" => "PPLG-XI-12",
    "rayon" => "Tajur-5",
    "umur" => 17
]];




$nama = null;

$umurFilter = isset($_GET['umurFilter']) ? $_GET['umurFilter'] : 0;
$siswa17 = [];

if ($umurFilter >= 17) {
    foreach ($siswa as $data) {
        if ($data['umur'] >= 17) {
            $siwa17[] = $data;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Siswa</title>
</head>
<body>

    <ul>
        <li>
            <a href="?umurFilter=17">Cari yang berusia lebih atau sama dengan 17 tahun</a>
        </li>
        <li>
            <form action="" method="POST">
                <label for="">Cari bedasarkan nama: </label>
                <input type="text" name="nama">
                <input type="submit" name="cari" value="Cari">
            </form>
        </li>
    </ul>

    <?php if (isset($_POST['cari'])) {
        $namaCari = $_POST['nama'];
        foreach ($siswa as $data) {
            if ($data['nama'] === $namaCari) {
                $nama = $data;
                break;
            }
        }
    }

    if ($nama !== null) {?>
        <div class="show-age">
            <p><?= $nama['nama']; ?> : <?= $nama['nis']?> : <?= $nama['rombel']?> : <?= $nama['rayon']?></p>
        </div>
    <?php } ?>

    <?php if (!empty($siwa17)) { ?>
        <div class="show-age">
            <ol>
                <?php foreach ($siwa17 as $siswa) { ?>
                    <li>
                        Nama: <?php echo $siswa['nama'] . " : " .  $siswa['umur']; ?><br>
                    </li>
                <?php } ?>
            </ol>
        </div>
    <?php } ?>

</body>
</html>
