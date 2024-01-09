<!DOCTYPE html>
<html>
<head>
    <title> Keuntungan Penjualan Tiket Bioskop</title>
</head>
<body>
    <h1>Hitung Keuntungan Penjualan Tiket Bioskop</h1>
    <form method="post" action="">
        Jumlah tiket VIP terjual: <input type="text" name="tiket_vip"><br>
        Jumlah tiket Eksekutif terjual: <input type="text" name="tiket_eksekutif"><br>
        Jumlah tiket Ekonomi terjual: <input type="text" name="tiket_ekonomi"><br>
        <input type="submit" name="submit" value="Hitung Keuntungan">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Harga tiket
        $harga_tiket = 100; 

        // Input jumlah tiket terjual per kelas
        $jumlah_tiket_VIP = intval($_POST['tiket_vip']);
        $jumlah_tiket_Eksekutif = intval($_POST['tiket_eksekutif']);
        $jumlah_tiket_Ekonomi = intval($_POST['tiket_ekonomi']);

        // Hitung keuntungan per kelas
        if ($jumlah_tiket_VIP >= 35) {
            $keuntungan_VIP = $jumlah_tiket_VIP * $harga_tiket * 0.25;
        } elseif ($jumlah_tiket_VIP >= 20) {
            $keuntungan_VIP = $jumlah_tiket_VIP * $harga_tiket * 0.15;
        } else {
            $keuntungan_VIP = $jumlah_tiket_VIP * $harga_tiket * 0.05;
        }

        if ($jumlah_tiket_Eksekutif >= 40) {
            $keuntungan_Eksekutif = $jumlah_tiket_Eksekutif * $harga_tiket * 0.20;
        } elseif ($jumlah_tiket_Eksekutif >= 20) {
            $keuntungan_Eksekutif = $jumlah_tiket_Eksekutif * $harga_tiket * 0.10;
        } else {
            $keuntungan_Eksekutif = $jumlah_tiket_Eksekutif * $harga_tiket * 0.02;
        }

        $keuntungan_Ekonomi = $jumlah_tiket_Ekonomi * $harga_tiket * 0.07;

        // Hitung keuntungan total
        $keuntungan_total = $keuntungan_VIP + $keuntungan_Eksekutif + $keuntungan_Ekonomi;

        // Menampilkan hasil
        echo "Keuntungan kelas VIP: $keuntungan_VIP<br>";
        echo "Keuntungan kelas Eksekutif: $keuntungan_Eksekutif<br>";
        echo "Keuntungan kelas Ekonomi: $keuntungan_Ekonomi<br>";
        echo "Keuntungan total: $keuntungan_total<br>";
        echo "Jumlah tiket VIP terjual: $jumlah_tiket_VIP<br>";
        echo "Jumlah tiket Eksekutif terjual: $jumlah_tiket_Eksekutif<br>";
        echo "Jumlah tiket Ekonomi terjual: $jumlah_tiket_Ekonomi<br>";
    }
    ?>
</body>
</html>