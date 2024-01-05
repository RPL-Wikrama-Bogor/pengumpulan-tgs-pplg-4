<!DOCTYPE html>
<html>
<head>
    <title>Pembelian Bahan Bakar Shell</title>
</head>
<body>
    <center>
    <h1>Form Pembelian Bahan Bakar Shell</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="jenis">Pilih Jenis Bahan Bakar:</label>
        <select name="jenis" id="jenis">
            <option value="Super">Shell Super</option>
            <option value="V-Power">Shell V-Power</option>
            <option value="V-Power Diesel">Shell V-Power Diesel</option>
            <option value="V-Power Nitro">Shell V-Power Nitro</option>
        </select><br>

        <label for="jumlah">Jumlah Liter:</label>
        <input type="number" name="jumlah" id="jumlah" required><br>

        <input type="submit" value="Hitung Total Harga">
    </form>

    <?php
    class PembelianBahanBakar
    {
        private $hargaBahanBakar = [
            'Super' => 15420.00,
            'V-Power' => 16130.00,
            'V-Power Diesel' => 18310.00,
            'V-Power Nitro' => 16510.00,
        ];
        private $ppn = 0.10;

        public function hitungTotalHarga($jenis, $jumlah)
        {
            if (array_key_exists($jenis, $this->hargaBahanBakar)) {
                $hargaPerLiter = $this->hargaBahanBakar[$jenis];
                $totalHargaSebelumPPN = $hargaPerLiter * $jumlah;
                $ppnHarga = $totalHargaSebelumPPN * $this->ppn;
                $totalHargaSetelahPPN = $totalHargaSebelumPPN + $ppnHarga;
                return [
                    'jenis' => $jenis,
                    'harga' => $hargaPerLiter,
                    'jumlah' => $jumlah,
                    'ppn' => $ppnHarga,
                    'total' => $totalHargaSetelahPPN,
                ];
            } else {
                return "Jenis bahan bakar tidak valid.";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jenisBahanBakar = $_POST["jenis"];
        $jumlahLiter = $_POST["jumlah"];

        $pembelian = new PembelianBahanBakar();
        $hasilPembelian = $pembelian->hitungTotalHarga($jenisBahanBakar, $jumlahLiter);

        if (is_array($hasilPembelian)) {
            echo '<div class="output">';
            echo "Jenis Bensin: " . $hasilPembelian['jenis'] . "<br>";
            echo "Harga Bensin per Liter: Rp. " . number_format($hasilPembelian['harga'], 2) . "<br>";
            echo "Jumlah Bensin (Liter): " . $hasilPembelian['jumlah'] . "<br>";
            echo "Jumlah PPN (10%): Rp. " . number_format($hasilPembelian['ppn'], 2) . "<br>";
            echo "Total Harga (termasuk PPN 10%): Rp. " . number_format($hasilPembelian['total'], 2);
            echo '</div>';
        } else {
            echo '<div class="error">';
            echo $hasilPembelian;
            echo '</div>';
        }
    }
    ?>
    </center>
</body>
</html>
