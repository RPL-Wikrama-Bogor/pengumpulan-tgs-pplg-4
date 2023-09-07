<!DOCTYPE html>
<html>
<head>
    <title>Kasir Sederhana</title>
</head>
<body>
    <h1>Kasir Sederhana</h1>

    <?php
    $menu = array(
        "makanan" => array(
            "Nasi Goreng" => 12000,
            "Mie Goreng" => 10000,
            "Ayam Bakar" => 15000,
            "Sate Ayam" => 12000,
            "Nasi Padang" => 16000
        ),
        "minuman" => array(
            "Es Teh" => 4000,
            "Es Jeruk" => 5000,
            "Kopi" => 6000,
            "Lemonade" => 7000,
            "Soda" => 4500
        )
    );

    $pesanan = array();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($_POST["pesanan"] as $jenis => $items) {
            foreach ($items as $nama => $jumlah) {
                if (!empty($jumlah) && $jumlah > 0) {
                    $pesanan[$jenis][$nama] = $jumlah;
                }
            }
        }

        $total_harga = 0;
        foreach ($pesanan as $jenis => $items) {
            foreach ($items as $nama => $jumlah) {
                $harga_rupiah = $menu[$jenis][$nama];
                $total_harga += $harga_rupiah * $jumlah;
            }
        }

        $diskon = ($total_harga >= 50000) ? 0.1 * $total_harga : 0;
        $total_setelah_diskon = $total_harga - $diskon;

        echo "<h2>Detail Pesanan:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Jenis</th><th>Nama</th><th>Jumlah</th><th>Harga (Rp)</th></tr>";

        foreach ($pesanan as $jenis => $items) {
            foreach ($items as $nama => $jumlah) {
                $harga_rupiah = $menu[$jenis][$nama];
                echo "<tr>";
                echo "<td>$jenis</td>";
                echo "<td>$nama</td>";
                echo "<td>$jumlah</td>";
                echo "<td>" . number_format($harga_rupiah * $jumlah, 0, ',', '.') . "</td>";
                echo "</tr>";
            }
        }

        echo "</table>";

        echo "<h2>Total Belanjaan Keseluruhan:</h2>";
        echo "Total Belanjaan Sebelum Diskon: Rp " . number_format($total_harga, 0, ',', '.') . "<br>";
        echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
        echo "Total Belanjaan Setelah Diskon: Rp " . number_format($total_setelah_diskon, 0, ',', '.') . "<br>";
    }
    ?>

    <h2>Pilih Makanan dan Minuman:</h2>
    <form method="post">
        <?php
        foreach ($menu as $jenis => $items) {
            echo "<h3>$jenis</h3>";
            foreach ($items as $nama => $harga) {
                echo "<label for='pesanan[$jenis][$nama]'>$nama (Harga: Rp " . number_format($harga, 0, ',', '.') . "):</label>";
                echo "<input type='number' name='pesanan[$jenis][$nama]' min='0'><br>";
            }
        }
        ?>
        <input type="submit" value="Pesan">
    </form>
</body>
</html>