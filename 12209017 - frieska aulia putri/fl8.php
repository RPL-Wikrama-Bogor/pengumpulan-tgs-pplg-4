<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JARAK</title>
</head>
<style>
    body {
        background-color:#435334;
    }

    .card {
        background-color:#9EB384;
        border-radius: 10px;
        max-width: 90%;
        text-align: center;
        padding: 50px 140px;
        margin: 125px 400px;
    }
    input{
        border-radius: 25px;
        margin:5px;
    }
</style>

<body>
<section class="konform">
        <div class="card">
            <h1> WAKTU</h1>
    <form action="" method="post">
        <div class="isi">
            <label for="kecepatan">Masukkan kecepatan</label>
            <input type="number" name="kecepatan" id="kecepatan" required>
            <br>
            <label for="jarak">Masukkan Jarak</label>
            <input type="number" name="jarak" id="jarak" required>
         
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
</div>
</section>

</body>

</html>
<?php
$kecepatan;
$jarak;
$waktu;
if (isset($_POST['submit'])) {
    $kecepatan = $_POST['kecepatan'];
    $jarak= $_POST['jarak'];
    $waktu = $kecepatan / $jarak;
    echo "waktu yang ditempuh: " ,$waktu ,"detik";
}
?>