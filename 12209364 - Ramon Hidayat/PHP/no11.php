<?php

    $nop; //nomor pegawai
    $nogol;//nomor golongan
    $tanggal;
    $bulan;
    $tahun;
    $urutan;
    $tl;//tanggal lahir
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css"/>
    <title>Soal-11</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Kode Pegawai</h1>
                <form action="" method="post">
                    <div class="input-group">
                        <input type="number" name="nop" class="form-control" placeholder="Masukkan No Pegawai (Wajib 11 Angka!)" aria-label="Masukkan No Pegawai (Wajib 11 Angka!)" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="submit" name="submit">Kirim!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>



<?php
    // Cek apakah button dgn name submit di klik
    if (isset($_POST['submit'])) {
        $nop = $_POST['nop'];
        
        $nop = strval($nop);

        if ($nop < 11) {
            echo "No Pegawai Tidak Sesuai";
        } else {
            $nogol = substr($nop, 0, 1);
            $tanggal = substr($nop, 1, 2);
            // $bulan = substr($nop, 3, 1);
            $bulan = substr($nop, 3, 2);
            $tahun = substr($nop, 5, 4);
            $urutan = substr($nop, 9, 2);

            if($bulan == "01") {
                $bulan = "Januari";
            } else if($bulan == "02") {
                $bulan = "Februari";
            } else if($bulan == "03") {
                $bulan = "Maret";
            } else if($bulan == "04") {
                $bulan = "April";
            } else if($bulan == "05") {
                $bulan = "Mei";
            } else if($bulan == "06") {
                $bulan = "Juni";
            } else if($bulan == "07") {
                $bulan = "Juli";
            } else if($bulan == "08") {
                $bulan = "Agustus";
            } else if($bulan == "09") {
                $bulan = "September";
            } else if($bulan == "10") {
                $bulan = "Oktober";
            } else if($bulan == "11") {
                $bulan = "November";
            } else {
                $bulan = "Desember";
            } 

            $tl = $tanggal . " " . $bulan . " " . $tahun;
            echo"<br>";
            echo "<center>Kode Pegawai : " . $nop . "<br>No Golongan : " . $nogol . "<br>Tanggal Lahir : " . $tl . "<br>No Urutan : " . $urutan . "</center>";
        }
         
    }
?>