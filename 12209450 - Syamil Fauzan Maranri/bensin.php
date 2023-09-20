<!DOCTYPE html>
<html>
<head>
    <title>Beli bensin di Ciawi</title>
</head>
<body>
    <h1>Belanja Bahan Bakar</h1>
    <form method="POST" action="">
        <label for="jumlah_liter">Masukkan Jumlah liter</label>
        <input type="number" name="jumlah_liter" id="jumlah_liter" required><br><br>

        <label for="tipe_bahan_bakar">Pilih Tipe Bahan Bakar</label>
        <select name="tipe_bahan_bakar" id="tipe_bahan_bakar">
            <option value="Super">Shell Super</option>
            <option value="V-Power">Shell V-Power</option>
            <option value="V-Power Diesel">Shell V-Power Diesel</option>
            <option value="V-Power Nitro">Shell V-Power Nitro</option>
        </select><br><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    class Shell {
        protected $harga = [
            'Super' => 15420,
            'V-Power' => 16130,
            'V-Power Diesel' => 18310,
            'V-Power Nitro' => 16510,
        ];
        protected $jumlah;
        protected $tipe;
        protected $ppn = 0.10;

        public function __construct($jumlah, $tipe) {
            $this->jumlah = $jumlah;
            $this->tipe = $tipe;
        }

        public function hitungTotal() {
            if (array_key_exists($this->tipe, $this->harga)) {
                $hargaSatuan = $this->harga[$this->tipe];
                $total = $hargaSatuan * $this->jumlah;
                $totalPPN = $total * $this->ppn;
                return [
                    'tipe' => $this->tipe,
                    'jumlah' => $this->jumlah,
                    'total' => $total,
                    'totalPPN' => $totalPPN,
                ];
            } else {
                return false; 
            }
        }
    }

    class Beli extends Shell {
        public function buatBuktiTransaksi() {
            $result = $this->hitungTotal();
            if ($result) {
                echo "Anda membeli bahan bakar minyak tipe " . $result['tipe'] . "<br>";
                echo "Dengan jumlah " . $result['jumlah'] . " liter<br>";
                echo "Total yang harus dibayarkan Rp " . ($result['total'] + $result['totalPPN']) . "<br>";
            } else {
                echo "Tipe bahan bakar tidak valid";
            }
        }
    }

    if (isset($_POST['hitung'])) {
        $jumlahLiter = $_POST['jumlah_liter'];
        $tipeBahanBakar = $_POST['tipe_bahan_bakar'];

        $beli = new Beli($jumlahLiter, $tipeBahanBakar);
        $beli->buatBuktiTransaksi();
    }
    ?>
</body>
</html>
