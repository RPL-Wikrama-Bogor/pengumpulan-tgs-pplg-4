<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            margin-top: 20px;
        }

        h2, h3 {
            margin-top: 20px;
        }

        p {
            text-align: center;
            margin-top: 10px;
        }
    </style>
    <title>Kasir Sederhana</title>
</head>
<body>
    <h1>Toko Rafly</h1>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Menu</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Inisialisasi daftar menu dan harga
                $daftar_menu = [
                    'Nasi Goreng' => 15000,
                    'Mie Goreng' => 10000,
                    'Bakso' => 15000,
                    'Mie Ayam' => 15000,
                    'Mie Ayam Bakso' => 20000,
                    'Es Teh' => 5000,
                    'Es Teh Manis' => 7000,
                    'Es Jeruk' => 8000,
                ];

                // Tampilkan daftar menu dalam tabel
                foreach ($daftar_menu as $menu => $harga) {
                    echo "<tr>";
                    echo "<td>$menu</td>";
                    echo "<td>Rp$harga</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <form method="post">
            <label for="menu">Pilih Menu:</label>
            <select name="menu" id="menu">
                <?php
                // Tampilkan pilihan menu berdasarkan daftar menu
                foreach ($daftar_menu as $menu => $harga) {
                    echo "<option value='$menu'>$menu - Rp$harga</option>";
                }
                ?>
            </select>
            <input type="submit" name="tambah" value="Tambah ke Keranjang">
        </form>

        <?php
        // Inisialisasi keranjang belanja (gunakan session untuk menyimpan data antar permintaan)
        session_start();

        if (!isset($_SESSION['keranjang'])) {
            $_SESSION['keranjang'] = [];
        }

        if (isset($_POST['tambah'])) {
            $menu = $_POST['menu'];
            if (array_key_exists($menu, $daftar_menu)) {
                $_SESSION['keranjang'][] = $menu;
            }
        }

        // Fungsi untuk menghitung total harga belanja
        function hitung_total_harga($keranjang, $daftar_menu) {
            $total_harga = 0;

            foreach ($keranjang as $menu) {
                $total_harga += $daftar_menu[$menu];
            }

            // Berikan diskon 10% jika jumlah menu mencapai 5 atau lebih
            $jumlah_menu = count($keranjang);
            if ($jumlah_menu >= 5) {
                $diskon = 0.10 * $total_harga;
                $total_harga -= $diskon;
                echo "<p>Diskon 10% diterapkan pada pembelian ini!</p>";
            }

            return $total_harga;
        }

        // Tampilkan keranjang belanja
        echo "<h2>Keranjang Belanja</h2>";
        echo "<table>";
        echo "<thead><tr><th>Menu</th><th>Harga</th></tr></thead>";
        echo "<tbody>";
        foreach ($_SESSION['keranjang'] as $menu) {
            echo "<tr>";
            echo "<td>$menu</td>";
            echo "<td>Rp{$daftar_menu[$menu]}</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

        // Tampilkan total harga
        $total_harga = hitung_total_harga($_SESSION['keranjang'], $daftar_menu);
        echo "<h3>Total Harga: Rp$total_harga</h3>";
        ?>

        <form method="post">
            <input type="submit" name="selesai" value="Selesai Belanja">
        </form>

        <?php
        // Proses selesai belanja
        if (isset($_POST['selesai'])) {
            session_destroy();
            echo "<p>Terima kasih telah berbelanja!</p>";
        }
        ?>
    </div>
</body>
</html>
