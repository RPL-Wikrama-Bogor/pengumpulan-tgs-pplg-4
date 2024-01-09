<!DOCTYPE html>
<html>
<head>
    <title>Kasir Sederhana</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Kasir Sederhana</h1>

    <?php
    $menu = array(
        "nasi_goreng" => array("Nama" => "Nasi Goreng", "Harga" => 15000),
        "mie_goreng" => array("Nama" => "Mie Goreng", "Harga" => 10000),
        "kwetiau" => array("Nama" => "Kwetiau", "Harga" => 15000),
        "es_jeruk" => array("Nama" => "Es Jeruk", "Harga" => 5000),
        "teh_manis" => array("Nama" => "Teh Manis", "Harga" => 5000)
    );

    // Inisialisasi variabel
    $namaMakanan = "";
    $jumlahMakanan = 0;
    $namaMinuman = "";
    $jumlahMinuman = 0;
    $totalHarga = 0;
    $diskon = 0;

   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $namaMakanan = $_POST["nama_makanan"];
        $jumlahMakanan = intval($_POST["jumlah_makanan"]);
        $namaMinuman = $_POST["nama_minuman"];
        $jumlahMinuman = intval($_POST["jumlah_minuman"]);

        if (array_key_exists($namaMakanan, $menu) && array_key_exists($namaMinuman, $menu)) {   
           
            $totalHarga = ($menu[$namaMakanan]["Harga"] * $jumlahMakanan) + ($menu[$namaMinuman]["Harga"] * $jumlahMinuman);
           
            $diskon = 0;
            $totalItem = $jumlahMakanan + $jumlahMinuman;
            if ($totalItem >= 5) {
                $diskon = 0.10 * $totalHarga;
            }
        } else {
           
            echo "Menu yang dipilih tidak valid.";
            $totalHarga = 0;
            $diskon = 0;
        }
    }
    ?>

    <!-- pisahkan makanan dan minuman -->
    <form method="post">
        <h2>Menu Makanan</h2>
        <label for="nama_makanan">Nama Makanan / Minuman:</label>
        <select name="nama_makanan" id="nama_makanan">
            <?php foreach ($menu as $key => $item): ?>
                <option value="<?php echo $key; ?>"><?php echo $item["Nama"]; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="jumlah_makanan">Jumlah Makanan / Minuman:</label>
        <input type="number" name="jumlah_makanan" id="jumlah_makanan" min="0">
        <br>

        <h2>Menu Minuman</h2>
        <label for="nama_minuman">Nama Minuman / Makanan:</label>
        <select name="nama_minuman" id="nama_minuman">
            <?php foreach ($menu as $key => $item): ?>
                <option value="<?php echo $key; ?>"><?php echo $item["Nama"]; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="jumlah_minuman">Jumlah Minuman / Makanan:</label>
        <input type="number" name="jumlah_minuman" id="jumlah_minuman" min="0">
        <br>
      
        <input type="submit" value="Pesan">
    </form>

    <?php if ($totalHarga > 0): ?>
        <h2>Struk Pembayaran</h2>
        <table>
            <tr>
                <th>Item</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td><?php echo $menu[$namaMakanan]["Nama"]; ?></td>
                <td><?php echo $jumlahMakanan; ?></td>
                <td><?php echo $menu[$namaMakanan]["Harga"]; ?></td>
                <td><?php echo $menu[$namaMakanan]["Harga"] * $jumlahMakanan; ?></td>
            </tr>
            <tr>
                <td><?php echo $menu[$namaMinuman]["Nama"]; ?></td>
                <td><?php echo $jumlahMinuman; ?></td>
                <td><?php echo $menu[$namaMinuman]["Harga"]; ?></td>
                <td><?php echo $menu[$namaMinuman]["Harga"] * $jumlahMinuman; ?></td>
            </tr>
            <tr class="total">
                <td colspan="3">Total</td>
                <td><?php echo $totalHarga; ?></td>
            </tr>
            <tr class="total">
                <td colspan="3">Diskon (20%)</td>
                <td><?php echo $diskon; ?></td>
            </tr>
            <tr class="total">
                <td colspan="3">Total Bayar</td>
                <td><?php echo $totalHarga - $diskon; ?></td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>