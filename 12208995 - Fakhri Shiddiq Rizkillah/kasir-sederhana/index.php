<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="style.css">
<head>
    <title>Kasir</title>
</head>
<body>
    
 <div class="kotak">
    
    <h1>Kasir Sederhana</h1>
        
        <h2>Daftar Menu</h2>
        <ol>
        <li>Menu : Nasi Goreng<br>
            harga : 15.000
        </li>
        <li>Menu : Mie Goreng<br>
        harga : 12.000
        </li>
        <li>Menu : Ayam Bakar<br>
            harga : 18.000
        </li>
        <li>Menu : Sate Ayam<br>
            harga : 15.000
        </li>
        <li>Menu : Nasi Padang<br>
        harga :20.000
        </li>
    </ol>
</div>
<div class="kotak1">
    
    <?php
    // Daftar menu makanan dan minuman beserta harganya
    $menu = array(
        "makanan" => array(
            "Nasi Goreng" => 15000,
            "Mie Goreng" => 12000,
            "Ayam Bakar" => 18000,
            "Sate Ayam" => 15000,
            "Nasi Padang" => 20000
        ),
        "minuman" => array(
            "Es Teh" => 5000,
            "Es Jeruk" => 6000,
            "Kopi" => 7000,
            "Lemonade" => 8000,
            "Soda" => 5500
        )
    );

    // Inisialisasi variabel untuk menyimpan pesanan
    $pesanan = array();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data dari formulir
        $makanan_pilihan = $_POST["makanan_pilihan"];
        $jumlah_makanan = $_POST["jumlah_makanan"];
        $minuman_pilihan = $_POST["minuman_pilihan"];
        $jumlah_minuman = $_POST["jumlah_minuman"];

        // Menambahkan pilihan makanan ke dalam pesanan
        if (!empty($makanan_pilihan) && $jumlah_makanan > 0) {
            $pesanan["makanan"][$makanan_pilihan] = $jumlah_makanan;
        }

        // Menambahkan pilihan minuman ke dalam pesanan
        if (!empty($minuman_pilihan) && $jumlah_minuman > 0) {
            $pesanan["minuman"][$minuman_pilihan] = $jumlah_minuman;
        }

        // Menghitung total item yang dipesan
        $total_item = 0;
        foreach ($pesanan as $jenis => $items) {
            $total_item += array_sum($items);
        }

        // Menghitung total harga pesanan
        $total_harga = 0;
        foreach ($pesanan as $jenis => $items) {
            foreach ($items as $nama => $jumlah) {
                $harga = $menu[$jenis][$nama];
                $total_harga += $harga * $jumlah;
            }
        }

        // Menentukan diskon jika pembelian mencapai 5 item atau lebih dari satu jenis
        $diskon = 0;
        foreach ($pesanan as $jenis => $items) {
            if (array_sum($items) >= 5) {
                $diskon += 10; 
            }
        }

        // Menghitung total belanjaan setelah diskon
        // gak mungkin total harga hanya dikurang diskon yang belum dikalikan.
        $total_setelah_diskon = $total_harga - ($total_harga * $diskon/100);

        // Menampilkan detail pesanan
        echo "<h2>Detail Pesanan:</h2>";
        foreach ($pesanan as $jenis => $items) {
            echo "<h3>$jenis:</h3>";
            echo "<ul>";
            foreach ($items as $nama => $jumlah) {
                $harga = $menu[$jenis][$nama];
                echo "<li>$nama (Jumlah: $jumlah, Harga: Rp." . number_format($harga, 0) . ")</li>";
            }
            echo "</ul>";
        }

        // Menampilkan total belanjaan, diskon, dan total belanjaan setelah diskon
       // ...

// Menentukan diskon jika pembelian mencapai 5 item atau lebih dari satu jenis
$diskon = 0;
foreach ($pesanan as $jenis => $items) {
    if (array_sum($items) >= 5) {
        $diskon += 10; 
    }
}


$diskon = $total_harga * $diskon/100;


echo "<h2>Total Belanjaan Keseluruhan:</h2>";
echo "Total Belanjaan Sebelum Diskon: Rp." . number_format($total_harga, 0, ",", ".") . "<br>";
echo "Diskon: Rp." . number_format($diskon, 0, ",", ".") . "<br>";
echo "Total Belanjaan Setelah Diskon: Rp." . number_format($total_setelah_diskon, 0, ",", ".") . "<br>";

    }
    ?>

    <h2>Pilih Makanan dan Minuman:</h2>
    <form method="post">
        <label for="makanan_pilihan">Pilih Makanan:</label>
        <select name="makanan_pilihan" id="makanan_pilihan">
            <option value="">-- Pilih Makanan --</option>
            <?php
            foreach ($menu["makanan"] as $nama => $harga) {
                echo "<option value='$nama'>$nama (Harga: Rp." . number_format($harga, 0) . ")</option>";
            }
            ?>
        </select><br>
        
        <label for="jumlah_makanan">Jumlah Makanan:</label>
        <input type="number" name="jumlah_makanan" min="0"><br>
        
        <label for="minuman_pilihan">Pilih Minuman:</label>
        <select name="minuman_pilihan" id="minuman_pilihan">
            <option value="">-- Pilih Minuman --</option>
            <?php
            foreach ($menu["minuman"] as $nama => $harga) {
                echo "<option value='$nama'>$nama (Harga: Rp." . number_format($harga, 0) . ")</option>";
            }
            ?>
        </select><br>
        
        <label for="jumlah_minuman">Jumlah Minuman:</label>
        <input type="number" name="jumlah_minuman" min="0"><br>
        
        <input type="submit" value="Pesan">
    </form>
</div>
</body>
</html>