<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
    <head>
        <title>Toko Sederhana</title>
    </head>
    <body>
        <div class="kotak">
            
            <h1>Daftar Menu</h1>
      
            
            <?php
    // Daftar menu makanan dan minuman beserta harganya
    $menu = array(
        "makanan" => array(
            "Nasi Goreng Ayam" => 25000,
            "Ayam Geprek" => 20000,
            "Ayam Bakar" => 18000,
            "Sate Kambing" => 15000,
            "Nasi Goreng Sosis" => 20000
        ),
        "minuman" => array(
            "Es Teh Manis" => 4000,
            "Es Jeruk" => 5000,
            "Kopi Hitam" => 6000,
            "Jus Alpukat" => 8000,
            "Jus Jambu" => 8000
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
                $diskon += 10; // Diskon $10 per jenis
            }
        }
        
        // Menghitung total belanjaan setelah diskon
        $total_setelah_diskon = $total_harga - ($total_harga * $diskon/100);
        
        // Menampilkan detail pesanan
        echo "<h2>Detail Pesanan:</h2>";
        foreach ($pesanan as $jenis => $items) {
            echo "<h3>$jenis:</h3>";
            echo "<ul>";
            foreach ($items as $nama => $jumlah) {
                $harga = $menu[$jenis][$nama];
                echo "<li>$nama (Jumlah: $jumlah, Harga: Rp" . number_format($harga, ) . ")</li>";
            }
            echo "</ul>";
        }
        
        // Menampilkan total belanjaan, diskon, dan total belanjaan setelah diskon
        echo "<h2>Total Belanjaan Keseluruhan:</h2>";
        echo "Total Belanjaan Sebelum Diskon: Rp" . number_format($total_harga, 3) . "<br>";
        // bukan Rp tapi % 
        echo "Diskon: Rp" . number_format($diskon,) . "<br>";
        echo "Total Belanjaan Setelah Diskon: Rp" . number_format($total_setelah_diskon, 3) . "<br>";
    }
    ?>

    <h2>Pilih Makanan dan Minuman:</h2>
    <form method="post">
        <label for="makanan_pilihan">Pilih Makanan:</label>
        <select name="makanan_pilihan" id="makanan_pilihan">
            <option value="">-- Pilih Makanan --</option>
            <?php
            foreach ($menu["makanan"] as $nama => $harga) {
                echo "<option value='$nama'>$nama (Harga: Rp" . number_format($harga, 2) . ")</option>";
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
                echo "<option value='$nama'>$nama (Harga: Rp" . number_format($harga, 2) . ")</option>";
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