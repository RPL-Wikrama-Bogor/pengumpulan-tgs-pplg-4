<?php
$daftarMenu = [
    1 => [
        'Menu' => 'Nasi Goreng',
        'Harga' => 15000,
    ],
    2 => [
        'Menu' => 'Mie Goreng',
        'Harga' => 10000,
    ],
    3 => [
        'Menu' => 'Kwetiaw',
        'Harga' => 15000,
    ],
    4 => [
        'Menu' => 'Es Jeruk',
        'Harga' => 5000,
    ],
    5 => [
        'Menu' => 'Teh Manis',
        'Harga' => 2000,
    ],
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .menu-box {
            background-color: white;
            border-radius: 15px;
            outline : auto;
            text-align: center;
            padding: 50px 90px;
            margin: 145px 400px;
            width: 200px;
        }

        .box {
            /* width: 400px;
            margin: 0 auto;
            border: 1px solid #000;
            padding: 10px; */
              background-color: white;
            border-radius: 15px;
            outline : auto;
             text-align: center;
            padding: 50px 90px;
            margin: 145px 400px;
            width: 200px;

        }

        .boxoutput {
            /* width: 400px;
            margin: 0 auto;
            border: 1px solid #000;
            padding: 10px; */
            background-color: white;
            border-radius: 15px;
            outline : auto;
             text-align: center;
            padding: 50px 90px;
            margin: 145px 400px;
            width: 200px;

        }

        .menu-item {
            margin-bottom: 10px;
        }
    </style>
    <title>Kasir Sederhana</title>
</head>

<body>
    <div class="menu-box">
        <h1 style="text-align: center;">Daftar Menu</h1>
        <?php
        foreach ($daftarMenu as $nomor => $menu) {
            echo '<div class="menu-item">';
            echo "<strong>$nomor. Menu:</strong> {$menu['Menu']} <br>";
            echo "<strong>Harga:</strong> {$menu['Harga']} <br>";
            echo '</div>';
        }
        ?>
    </div>
    <br>

    <div class="box">
        <form action="" method="post">
            <label for="makanan">Pilih Makanan :</label>
            <select name="menu_makanan">
                <option selected></option>
                <?php
                $menuSubset = [1, 2, 3];
                foreach ($menuSubset as $nomor) {
                    if (isset($daftarMenu[$nomor])) {
                        $menu = $daftarMenu[$nomor];
                        echo "<option value='$nomor'>{$menu['Menu']}</option>";
                    }
                }
                ?>
            </select>
            <br>
            <br>
            <label for="jumlah_makanan">Jumlah Pembelian Makanan :</label>
            <input type="number" name="jumlah_makanan" min="0">
            <br>
            <br>
            <label for="makanan">Pilih Minuman :</label>
            <select name="menu_minuman">
                <option selected></option>
                <?php
                $menuSubset = [4, 5];
                foreach ($menuSubset as $nomor) {
                    if (isset($daftarMenu[$nomor])) {
                        $menu = $daftarMenu[$nomor];
                        echo "<option value='$nomor'>{$menu['Menu']}</option>";
                    }
                }
                ?>
            </select>
            <br>
            <br>
            <label for="jumlah_minuman">Jumlah Pembelian Minuman :</label>
            <input type="number" name="jumlah_minuman" min="0">
            <br>
            <br>
            <input type="submit" name="submit" value="Hitung Total">
        </form>
    </div>
    <br>
    <div class="boxoutput">
        <?php
        if (isset($_POST['submit'])) {
            $menuMakanan = isset($_POST['menu_makanan']) ? $daftarMenu[$_POST['menu_makanan']]['Menu'] : '';
            $menuMinuman = isset($_POST['menu_minuman']) ? $daftarMenu[$_POST['menu_minuman']]['Menu'] : '';
            $jumlahMakanan = isset($_POST['jumlah_makanan']) ? (int)$_POST['jumlah_makanan'] : 0;
            $jumlahMinuman = isset($_POST['jumlah_minuman']) ? (int)$_POST['jumlah_minuman'] : 0;

            $hargaMakanan = $daftarMenu[$_POST['menu_makanan']]['Harga'];
            $hargaMinuman = $daftarMenu[$_POST['menu_minuman']]['Harga'];

            $totalHargaMakanan = $jumlahMakanan * $hargaMakanan;
            $totalHargaMinuman = $jumlahMinuman * $hargaMinuman;

            $totalHarga = $totalHargaMakanan + $totalHargaMinuman;

      

            if (($jumlahMakanan + $jumlahMinuman) > 5) {
                $diskon = $totalHarga * 0.10; // Diskon 10%
                $totalHarga -= $diskon;
            }

            echo "<strong>Menu Makanan yang Dipesan:</strong> $menuMakanan <br>";
            echo "<strong>Menu Minuman yang Dipesan:</strong> $menuMinuman <br>";
            echo "<strong>Jumlah Makanan yang Dibeli:</strong> $jumlahMakanan <br>";
            echo "<strong>Jumlah Minuman yang Dibeli:</strong> $jumlahMinuman <br>";
            echo "<strong>Harga Makanan Sebelum Diskon:</strong> $totalHargaMakanan <br>";
            echo "<strong>Harga Minuman Sebelum Diskon:</strong> $totalHargaMinuman <br>";
            echo "<strong>Total Harga Setelah Diskon:</strong> $totalHarga";
        }
        ?>
    </div>


    </div>
</body>

</html>