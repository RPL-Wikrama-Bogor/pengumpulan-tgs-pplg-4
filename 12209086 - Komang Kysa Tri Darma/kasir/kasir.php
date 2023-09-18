<?php
$daftarMenu = [
        1 =>[
            "menu" => "nasigoreng",
            "harga" => 15000
        ],
        2 =>[
            "menu" => "miegoreng",
            "harga" => 10000
        ],
        3 =>[
            "menu" => "kwetiaw",
            "harga" => 15000
        ],
        4 =>[
            "menu" => "esjeruk",
            "harga" => 5000
        ],
        5 =>[
            "menu" => "tehmanis",
            "harga" => 5000
        ],
    ];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Pilihan Makanan</title>
</head>
<body>
    <?php
foreach ($daftarMenu as $item) {
    $menu = $item["menu"];
    $harga = $item["harga"];
    echo "<li>$menu - Harga Makanan: Rp $harga</li>";
}
    ?>
    <h1>Silakan Pilih Makanan:</h1>
    <form method="post" action="">
        <label for="makanan">Pilih Makanan:</label>
        <select name="makanan" id="makanan">
            <option value="nasigoreng">Nasi Goreng - Rp 15,000</option>
            <option value="miegoreng">Mie Goreng - Rp 10,000</option>
            <option value="kwetiaw">Kwetiaw - Rp 15,000</option>
        </select>
        <br><br>
        <label for="jumlah1">Jumlah Pembelian Makanan</label>
        <input type="number" name="jumlah1">
        <br><br>
        <label for="minuman">Pilih minuman:</label>
        <select name="minuman" id="minuman">
            <option value="esjeruk">Es Jeruk - Rp 5,000</option>
            <option value="tehmanis">Teh Manis - Rp 2,000</option>
        </select>
        <br><br>
        <label for="jumlah">Jumlah Pembelian Makanan</label>
        <input type="number" name="jumlah2">
        
        <input type="submit" value="Pesan">
    </form>
</body>
</html>
 
<?php
if ($_POST) {
    // Mendapatkan pilihan makanan dari formulir
    $harga_makanan = $daftarMenu[$_POST['menu_makanan']]['harga'];
    $harga_minuman = $daftarMenu[$_POST['menu_minuman']]['harga'];
    $jumlah1 = $_POST["jumlah1"];
    $jumlah2 = $_POST["jumlah2"];
    $diskon;

    // Daftar makanan dan harganya dalam bentuk array asosiatif
    

    // Mencari harga makanan berdasarkan pilihan pengguna
    $harga_makanan = null;
    $harga_minuman = null;
    foreach ($daftarMenu as $item) {
        if ($item["menu"] === $makanan) {
            $harga_makanan = $item["harga_makanan"];
        }
        if ($item["menu"] === $minuman) {
            $harga_minuman = $item["harga_minuman"];
        }
    }

    $harga_makanan = $harga_makanan * $jumlah1;
    $harga_minuman = $harga_minuman * $jumlah2;
    $total = $jumlah1 + $jumlah2;
    // Memeriksa apakah pilihan makanan valid
    if ($harga_makanan !== null) {
        echo "Anda memesan $makanan berjumlah $jumlah1 dengan harga Rp $harga_makanan <br>";
    } else {
        echo "Pilihan makanan tidak valid.";
    }
    if ($harga_minuman !== null) {
        echo "Anda memesan $minuman berjumlah $jumlah2 dengan harga Rp $harga_minuman <br>";
    } else {
        echo "Pilihan makanan tidak valid.";
    }
    if($total >= 5){
        $keseluruhan = $harga_makanan + $harga_minuman;
        $diskon = $keseluruhan * 10/100;
        $result = $keseluruhan - $diskon;
        echo "diskon $result";
    }
}
?>