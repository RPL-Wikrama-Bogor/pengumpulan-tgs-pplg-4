<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menghitung jumlah keuntungan</h1>
    <form method="post" action="">
        Tiket VIP <br><input type="number" name="vip"><br>
        Tiket Eksekutif <br><input type="number" name="eks"><br>
        Tiket Ekonomi <br><input type="number" name="eko"><br>
        <br><input type="submit" value="submit" name="submit" >
    </form>
</body>
</html>

<?php
    
    if(isset($_POST['submit'])) {
        $jumlah_tiket_vip = $_POST['vip'];
        $jumlah_tiket_eks = $_POST['eks'];
        $jumlah_tiket_eko = $_POST['eko'];

        // $keuntungan_vip = 0;
        // $keuntungan_eks = 0;
        // $keuntungan_eko = 0;

        if ( $jumlah_tiket_vip >= 35 ) {
            $keuntungan_vip = $jumlah_tiket_vip * 25 / 100;

        } elseif ( $jumlah_tiket_vip >= 20 && $jumlah_tiket_vip < 35 ) {
            $keuntungan_vip = $jumlah_tiket_vip * 15 / 100;

        } else {
            $keuntungan_vip = $jumlah_tiket_vip *5 / 100;
        }

        // tiket eksekusif
        if ( $jumlah_tiket_eks >= 40 ) {
            $keuntungan_eks = $jumlah_tiket_eks * 20 / 100;

        } elseif ( $jumlah_tiket_eks >= 20 && $jumlah_tiket_eks < 40 ) {
            $keuntungan_eks = $jumlah_tiket_eks * 10 / 100;

        } else {
            $keuntungan_eks = $jumlah_tiket_eks *2 / 100;
        }

        // tiket ekonomi
        $keuntungan_eko = $jumlah_tiket_eko * 7 / 100 ;

        $total_tiket = $jumlah_tiket_vip + $jumlah_tiket_eks + $jumlah_tiket_eko;
        $total_keuntungan = $keuntungan_eks + $jumlah_tiket_eks + $jumlah_tiket_eko;

        echo "<h2> Hasil Perhitungan : </h2>";
        echo "keuntungan tiket VIP".$keuntungan_vip ."<br>";
        echo "keuntungan tiket eksekutif". $keuntungan_eks ."<br>";
        echo "keuntungan tiket ekonomi".$keuntungan_eko ."<br>";
        echo "total tiket terjual:". $total_tiket ."<br>";
        echo "tital keuntungan keseluruhan:".$total_keuntungan;
    
    }