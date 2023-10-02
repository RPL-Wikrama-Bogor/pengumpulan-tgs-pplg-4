<?php
$pegawai;
$golongan;
$tanggal;
$bulan;
$tahun;
$no_urutan;
$tanggal_lahir;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: white;
        }
        .card{
            background-color: aqua;
            border-radius: 5px;
            max-width: 100%;
            text-align: center;
            padding: 50px 140px;
            margin: 125px 400px;
        }
        
    </style>
</head>

<body>
    <section class="konform">
        <div class="card">
            <h1>informasi pegawai</h1>
            <form action="" method="post">
                <div class="isi">
                    <label for="num">Masukan Nomor Pegawai</label>
                    <br>
                    <input type="string" name="num" id="num" required>

                    <button type="submit" name="submit">Kirim</button>
            </form>
        </div>
    </section>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $pegawai = $_POST['num'];

    $pegawai = strval($pegawai);

    if ($pegawai < 11) {
        echo "no pegawai tidak sesuai";
    }
    $golongan = substr($pegawai, 0, 1);
    $tanggal = substr($pegawai, 1, 2);
    // $bulan = substr($pegawai, 3, 1);
    $bulan = substr($pegawai, 3, 2);
    $tahun = substr($pegawai, 5, 4);
    $no_urutan = substr($pegawai, 9, 2);

    if ($bulan == "01") {
        $bulan = "januari ";
    } else if ($bulan == "02") {
        $bulan = "Februari ";
    } else if ($bulan == "03") {
        $bulan = "Maret ";
    } else if ($bulan == "04") {
        $bulan = "April ";
    } else if ($bulan == "05") {
        $bulan = "Mei ";
    } else if ($bulan == "06") {
        $bulan = "Juni ";
    } else if ($bulan == "07") {
        $bulan = "Juli ";
    } else if ($bulan == "08") {
        $bulan = "Agustus ";
    } else if ($bulan == "09") {
        $bulan = "September ";
    } else if ($bulan == "10") {
        $bulan = "Oktober ";
    } else if ( $bulan == "11")  {
        $bulan = "November ";
    } else {
        $bulan = "Desember";
    }
    
        
    
    
    $tanggal_lahir = $tanggal . " " . $bulan . " " . $tahun;
    
    echo "No Pegawai :" . $pegawai . "<br>";
    echo "Nomor Golongan :" . $golongan . "<br>";
    echo "Tanggal lahir :" . $tanggal_lahir . "<br>";
    echo "Nomor Urutan :" . $no_urutan . "<br>";
}
?>