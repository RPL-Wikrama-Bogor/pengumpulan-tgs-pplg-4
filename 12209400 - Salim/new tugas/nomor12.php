<?PHP
$Jam;
$Menit;
$Detik;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: grey;
    }

    .card {
        background-color: white;
        border-radius: 5px;
        max-width: 100%;
        text-align: center;
        padding: 50px 140px;
        margin: 200px 400px;
        
       
    }

   
</style>

<body>
<section class="konform">
        <div class="card">
            <h1>WAKTU TERKINI</h1>
    <form action="" method="post">
        <div class="isi">
            <label for="hours">Masukan Jam</label>
            <input type="number" name="jam" id="jam" required>
            <br>
            <label for="minutes">Masukan Menit</label>
            <input type="number" name="menit" id="menit" required>
            <br>
            <label for="seconds">Masukan Detik</label>
            <input type="number" name="detik" id="detik" required>
        </div>
        <button type="submit" name="submit">Kirim</button>
    </form>
</div>
</section>

</body>

</html>

<?PHP
if (isset($_POST['submit'])) {
    $Jam = $_POST['jam'];
    $Menit = $_POST['menit'];
    $Detik = $_POST['detik'];

    $Detik += 1;

    // 2 Jam 60 Menit 60 Detik harusnya 3 jam 0 menit
    if ($Detik >= 60) {
        $Menit += 1;
        $detik = 00;
    } else if ($menit >= 60) {
        $Jam += 1;
        $Menit = 00;
        $Detik = 00;
    } else if ($jam >= 24) {
        $Jam = 00;
        $Menit = 00;
        $Detik = 00;
    }

    echo $Jam . " Jam " . $Menit . " Menit " . $Detik . " Detik ";
}
?>