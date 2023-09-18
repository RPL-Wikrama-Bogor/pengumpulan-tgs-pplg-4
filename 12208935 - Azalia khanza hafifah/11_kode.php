<?php
$nb = array(
     "JANUARI",
     "FEBRUARI",
     "MARET",
     "APRIL",
     "MEI",
     "JUNI",
     "JULI",
     "AGUSTUS",
     "SEPTEMBER",
     "OKTOBER",
     "NOVEMBER",
    "DESEMBER"
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kd = $_POST["kode_pegawai"];

    $g = substr($kd, 0, 1);
    $t = substr($kd, 1, 8);
    $n = substr($kd, -2);

    $b = substr($t, 2, 2)-1;
    $th = substr($t, 4);

    $hb = isset($nb[$b]) ? $nb[$b] : "Bulan Tidak Valid";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kode Pegawai</title>
</head>
<style>
    body {
        background-color: lightsteelblue;
    }

    .card {
        background-color: white;
        border-radius: 5px;
        max-width: 100%;
        text-align: center;
        padding: 50px 140px;
        margin: 125px 400px;
    }
    </style>

<body>
<div class="card">
    <h2>Masukkan Kode Pegawai</h2>
    <form method="post" action="">
        <input type="text" name="kode_pegawai">
        <input type="submit" value="kirim">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
        <h2>Hasil</h2>
        <p>Nomor Golongan: <?php echo $g; ?></p>
        <p>Tanggal Lahir: <?php echo substr($t, 0, 2) . " " . $hb . " " . $th; ?></p>
        <p>Nomor Urut: <?php echo $n; ?></p>
    <?php endif; ?>
</div>
</body>
</html>