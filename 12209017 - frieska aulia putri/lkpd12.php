<?PHP
$jam;
$menit;
$detik;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAKTU</title>
</head>
<style>
    body {
        background-color:#FFC7EA;
    }

    .card {
        background-color:#D8B4F8;
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
            <h1>KETERANGAN WAKTU</h1>
    <form action="" method="post">
        <div class="isi">
            <label for="hours">Masukkan Jam</label>
            <input type="number" name="hours" id="hours" required>
            <br>
            <label for="minutes">Masukkan Menit</label>
            <input type="number" name="minutes" id="minutes" required>
            <br>
            <label for="seconds">Masukkan Detik</label>
            <input type="number" name="seconds" id="seconds" required>
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
</div>
</section>

</body>

</html>

<?PHP
if (isset($_POST['submit'])) {
    $jam = $_POST['hours'];
    $menit = $_POST['minutes'];
    $detik = $_POST['seconds'];

    $detik += 1;

    if ($detik >= 60) {
        $menit += 1;
        $detik = 00;
    } else if ($menit >= 60) {
        $jam += 1;
        $menit = 00;
        $detik = 00;
    } else if ($jam >= 24) {
        $jam = 00;
        $menit = 00;
        $detik = 00;
    }

    echo $jam . " Jam " . $menit . " Menit " . $detik . " Detik ";
}
?>