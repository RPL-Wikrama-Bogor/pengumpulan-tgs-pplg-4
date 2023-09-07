<!DOCTYPE html>
<html>
<head>
    <title>MENU DAN HARGA</title>
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
        .kotak{
            background-color: white;
            border-radius: 15px;
            outline : auto;
            max-width: 100%;
            text-align: center;
            padding: 30px 70px;
            margin: 30px 400px;
            margin-top: 5%;
        }
        .inpt{
            margin:25px;
            padding: 10px;
            width:80px;
            border-radius: 40px;
            border:none;
            background-color:#FFC6AC;
           
        }
        h1{
            text-align: center;
        }
        .menu{
            background-color: white;
            border-radius: 15px;
            outline : auto;
            max-width: 100%;
            padding: 20px 20px;
            margin: 60px 400px;
            margin-top: 5%;
        }
        h2{
            text-align : center;
        } 
    </style>
</head>
<body>
    <h1>DAFTAR MENU</h1>

    <div class="menu">
        <h2>Menu Makanan</h2>
        <ul>
            <li>Nasi Goreng    : Rp 15.000</li>
            <li>Mie Goreng     : Rp 15.000</li>
            <li>Kwetiaw Goreng : Rp 15.000</li>
            <li>Pangsit Goreng : Rp 10.000</li>
            <li>Mie Ayam       : Rp 10.000</li>
        </ul>

        <h2>Aneka Minuman</h2>
        <ul>
            <li>Es Jeruk       : Rp 5.000</li>
            <li>Teh Manis      : Rp 5.000</li>
            <li>Lemon Tea      : Rp 5.000</li>
            <li>Aneka Jus Buah : Rp 10.000</li>
        </ul>
    </div>
    <?php

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

    $namaMakanan = "";
    $jumlahMakanan = 0;
    $namaMinuman = "";
    $jumlahMinuman = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $namaMakanan = $_POST["nama_makanan"];
        $jumlahMakanan = intval($_POST["jumlah_makanan"]);
        $namaMinuman = $_POST["nama_minuman"];
        $jumlahMinuman = intval($_POST["jumlah_minuman"]);
    }

  
    if (array_key_exists($namaMakanan, $menu) && array_key_exists($namaMinuman, $minum)) {   
      
        $totalHarga = ($menu[$namaMakanan]["Harga"] * $jumlahMakanan) + ($minum[$namaMinuman]["Harga"] * $jumlahMinuman);

        $diskon = 0;
        $totalItem = $jumlahMakanan + $jumlahMinuman;
        if ($totalItem >= 5) {
            $diskon = 0.10 * $totalHarga;
        }
    } else {
        $totalHarga = 0;
        $diskon = 0;
    }
    ?> 
     <div class="kotak">
    <form method="post">
        <h2>Order Makanan</h2>
        <label for="nama_makanan">Nama Makanan:</label>
        <select name="nama_makanan" id="nama_makanan">
        <option disabled hidden selected> --pilih--</option>
            <?php foreach ($menu as $key => $item): ?>
                <option value="<?php echo $key; ?>"><?php echo $item["Nama"]; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="jumlah_makanan">Jumlah Makanan:</label>
        <input type="number" name="jumlah_makanan" id="jumlah_makanan" min="0">
        <br>

        <h2>Order Minuman</h2>
        <label for="nama_minuman">Nama Minuman:</label>
        <select name="nama_minuman" id="nama_minuman">
        <option disabled hidden selected> --pilih--</option>
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
        <h2>Payment Receipt</h2>
        <table>
            <tr>
                <th>Menu</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>total</th>
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
                <td colspan="3">Total</td>
                <td><?php echo $totalHarga; ?></td>
            </tr>
            <tr class="total">
                <td colspan="3">Diskon (10%)</td>
                <td><?php echo $diskon; ?></td>
            </tr>
            <tr class="total">
                <td colspan="3">Total Harga</td>
                <td><?php echo $totalHarga - $diskon; ?></td>
            </tr>
        </table>
    <?php endif; ?>
    </div>
</body>
</html>