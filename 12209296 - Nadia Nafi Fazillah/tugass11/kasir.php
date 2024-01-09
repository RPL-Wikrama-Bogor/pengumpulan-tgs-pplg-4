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

        .total {
            font-weight: bold;
        }
        .kotak{
            background-color: #E4F1FF;
            border-radius: 15px;
            outline : auto;
            max-width: 100%;
            text-align: center;
            padding: 30px 70px;
            margin: 30px 400px;
            margin-top: 5%;
        }
        .inpt{
            margin-top: 15%;
            padding: 10px;
            border-radius: 30%
        }
        h1{
            text-align: center;
        }
        .menu{
            background-color: #E4F1FF;
            border-radius: 15px;
            outline : auto;
            max-width: 100%;
            padding: 20px 20px;
            margin: 100px 400px;
            margin-top: 5%;
        }
        h2{
            text-align : center;
        }
        


       
    </style>
</head>
<body>
    <h1>Kasir Sederhana</h1>

    <div class="menu">
        <h2>Daftar Menu Makanan</h2>
        <ul>
            <li>Nasi Goreng : Rp 15.000</li>
            <li>Mie Goreng  : Rp 10.000</li>
            <li>Kwetiaw     : Rp 15.000</li>
            <li>Toge Goreng : Rp 10.000</li>
            <li>Bakso       : Rp 10.000</li>
        </ul>

    <h2>Daftar Menu Minuman</h2>
        <ul>
            <li>Es Jeruk    : Rp 10.000</li>
            <li>Teh Manis   : Rp 5000</li>
            <li>Wedang Wahe : Rp 10.000</li>
            <li>Jus Buah    : Rp 10.000</li>
        </ul>

    </div>
    <?php

    // Daftar menu dalam bentuk array asosiatif
    $menu = array(
        "nasi_goreng" => array("Nama" => "Nasi Goreng", "Harga" => 15000),
        "mie_goreng" => array("Nama" => "Mie Goreng", "Harga" => 10000),
        "kwetiau" => array("Nama" => "Kwetiau", "Harga" => 15000),
        "toge_goreng" => array("Nama" => "toge goreng", "Harga" => 10000),
        "bakso" => array("Nama" => "bakso", "Harga" => 10000)
    );
    $minum = array(
        "es_jeruk" => array("Nama" => "Es Jeruk", "Harga" => 10000),
        "teh_manis" => array("Nama" => "Teh Manis", "Harga" => 5000),
        "wedang_jahe" => array("Nama" => "wedang jahe", "Harga" => 10000),
        "jus_buah" => array("Nama" => "jus buah", "Harga" => 10000)
    );

    // Inisialisasi variabel
    $namaMakanan = "";
    $jumlahMakanan = 0;
    $namaMinuman = "";
    $jumlahMinuman = 0;

    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $namaMakanan = $_POST["nama_makanan"];
        $jumlahMakanan = intval($_POST["jumlah_makanan"]);
        $namaMinuman = $_POST["nama_minuman"];
        $jumlahMinuman = intval($_POST["jumlah_minuman"]);
    }

    // Validasi kunci menu yang dipilih
    if (array_key_exists($namaMakanan, $menu) && array_key_exists($namaMinuman, $minum)) {   
        // Hitung total harga
        $totalHarga = ($menu[$namaMakanan]["Harga"] * $jumlahMakanan) + ($minum[$namaMinuman]["Harga"] * $jumlahMinuman);

        // Diskon setiap pembelian 5
        $diskon = 0;
        $totalItem = $jumlahMakanan + $jumlahMinuman;
        if ($totalItem >= 5) {
            $diskon = 0.10 * $totalHarga;
        }
    } else {
        // Pesan kesalahan jika kunci menu tidak valid
        $totalHarga = 0;
        $diskon = 0;
    }
    ?> 
     <div class="kotak">
    <form method="post">
        <h2>Pesan Makanan</h2>
        <label for="nama_makanan">Nama Makanan:</label>
        <select name="nama_makanan" id="nama_makanan">
            <?php foreach ($menu as $key => $item): ?>
                <option value="<?php echo $key; ?>"><?php echo $item["Nama"]; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="jumlah_makanan">Jumlah Makanan:</label>
        <input type="number" name="jumlah_makanan" id="jumlah_makanan" min="0">
        <br>

        <h2>Pesan Minuman</h2>
        <label for="nama_minuman">Nama Minuman:</label>
        <select name="nama_minuman" id="nama_minuman">
            <?php foreach ($minum as $key => $item): ?>
                <option value="<?php echo $key; ?>"><?php echo $item["Nama"]; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="jumlah_minuman">Jumlah Minuman:</label>
        <input type="number" name="jumlah_minuman" id="jumlah_minuman" min="0">
        <br>
        
        <input class="inpt" type="submit" value="Pesan">
    </form>
   
    
    <?php if ($totalHarga > 0): ?>
        <h2>Struk Pesanan</h2>
        <table>
            <tr>
                <th>Item</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Total</th>
            </tr>
            <tr>
                <td><?php echo $menu[$namaMakanan]["Nama"]; ?></td>
                <td><?php echo $jumlahMakanan; ?></td>
                <td><?php echo $menu[$namaMakanan]["Harga"]; ?></td>
                <td><?php echo $menu[$namaMakanan]["Harga"] * $jumlahMakanan; ?></td>
            </tr>
            <tr>
                <td><?php echo $minum[$namaMinuman]["Nama"]; ?></td>
                <td><?php echo $jumlahMinuman; ?></td>
                <td><?php echo $minum[$namaMinuman]["Harga"]; ?></td>
                <td><?php echo $minum[$namaMinuman]["Harga"] * $jumlahMinuman; ?></td>
            </tr>
            <tr class="total">
                <td colspan="3">Total : </td>
                <td><?php echo $totalHarga; ?></td>
            </tr>
            <tr class="total">
                <td colspan="3">Diskon (10%) : </td>
                <td><?php echo $diskon; ?></td>
            </tr>
            <tr class="total">
                <td colspan="3">Total Bayar : </td>
                <td><?php echo $totalHarga - $diskon; ?></td>
            </tr>
        </table>
    <?php endif; ?>
    </div>
</body>
</html>