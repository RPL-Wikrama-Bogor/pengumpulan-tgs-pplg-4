<!DOCTYPE html>
<html>
<head>
    <title>Kasir Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 20px 0;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            width: 50%;
            margin: 20px auto;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        label {
            font-weight: bold;
        }

        select, input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .result {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            width: 50%;
            margin: 20px auto;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <h1>Kasir Sederhana</h1>
    <form method="post" action="">
        <label for="namaMakanan">Nama Makanan:</label>
        <select name="namaMakanan" id="namaMakanan">
            <option value="nasi goreng">Nasi Goreng</option>
            <option value="mie goreng">Mie Goreng</option>
            <option value="kwetiau">Kwetiau</option>
        </select>
        <br><br>
        <label for="jumlahMakanan">Jumlah Makanan:</label>
        <input type="number" name="jumlahMakanan" id="jumlahMakanan" min="1">
        <br><br>
        <label for="namaMinuman">Nama Minuman:</label>
        <select name="namaMinuman" id="namaMinuman">
            <option value="es jeruk">Es Jeruk</option>
            <option value="teh manis">Teh Manis</option>
        </select>
        <br><br>
        <label for="jumlahMinuman">Jumlah Minuman:</label>
        <input type="number" name="jumlahMinuman" id="jumlahMinuman" min="1">
        <br><br>
        <input type="submit" name="submit" value="Proses Pesanan">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $menuMakanan = $_POST['namaMakanan'];
        $jumlahMakanan = $_POST['jumlahMakanan'];
        $menuMinuman = $_POST['namaMinuman'];
        $jumlahMinuman = $_POST['jumlahMinuman'];

        $daftarMenu = array(
            'nasi goreng' => 15000,
            'mie goreng' => 10000,
            'kwetiau' => 15000,
            'es jeruk' => 5000,
            'teh manis' => 5000
        );

        $totalMakanan = $daftarMenu[$menuMakanan] * $jumlahMakanan;
        $totalMinuman = $daftarMenu[$menuMinuman] * $jumlahMinuman;
        $totalHarga = $totalMakanan + $totalMinuman;

        if (($jumlahMakanan + $jumlahMinuman) >= 5) {
            $diskon = 0.1 * $totalHarga;
            $totalHarga -= $diskon;
        } else {
            $diskon = 0;
        }

        echo "<div class='result'>";
        echo "<h2>Detail Pesanan:</h2>";
        echo "<table>";
        echo "<tr><th>Menu</th><th>Jumlah</th><th>Total Harga</th></tr>";
        echo "<tr><td>$menuMakanan</td><td>$jumlahMakanan</td><td>Rp " . number_format($totalMakanan, 0, ',', '.') . "</td></tr>";
        echo "<tr><td>$menuMinuman</td><td>$jumlahMinuman</td><td>Rp " . number_format($totalMinuman, 0, ',', '.') . "</td></tr>";
        echo "<tr><th colspan='2'>Subtotal</th><td>Rp " . number_format($totalHarga, 0, ',', '.') . "</td></tr>";
        echo "<tr><th colspan='2'>Diskon (10%)</th><td>Rp " . number_format($diskon, 0, ',', '.') . "</td></tr>";
        echo "<tr><th colspan='2'>Total Harga</th><td>Rp " . number_format($totalHarga, 0, ',', '.') . "</td></tr>";
        echo "</table>";
        echo "</div>";
    }
    ?>
</body>
</html>
