<!DOCTYPE html>
<html>

<head>
    <title>Pembelian Bahan Bakar</title>
</head>

<body>
    <div style="text-align: center;">
        <h1>Pembelian Bahan Bakar</h1>
        <form action="" method="post">
            <label for="jumlah">Masukkan Jumlah liter:</label>
            <input type="number" name="jumlah" required><br><br>
            <label for="jenis">Pilih tipe bahan bakar:</label>
            <select name="jenis" required>
                <option value="Shell Super">Shell Super</option>
                <option value="Shell V-Power">Shell V-Power</option>
                <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
                <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
            </select><br><br>
            <input type="submit" name="submit" value="Beli">
        </form>
    </div>
    <?php

    class Shell
    {
        protected $harga;
        protected $jenis;
        protected $ppn;

        public function __construct($jenis, $harga)
        {
            $this->jenis = $jenis;
            $this->harga = $harga;
            $this->ppn = 0.1; // PPN 10%
        }

        public function hitungTotal($jumlahLiter)
        {
            $total = ($this->harga * $jumlahLiter) * (1 + $this->ppn);
            return $total;
        }

        public function getJenis()
        {
            return $this->jenis;
        }
    }

    class Beli extends Shell
    {
        protected $jumlahLiter;

        public function __construct($jenis, $harga, $jumlahLiter)
        {
            parent::__construct($jenis, $harga);
            $this->jumlahLiter = $jumlahLiter;
        }

        public function tampilkanTransaksi()
        {
            $totalBayar = $this->hitungTotal($this->jumlahLiter);
            echo "<div style='text-align: center;'>"; 
            echo "<br> ========================= <br>";
            echo "Anda membeli bahan bakar minyak tipe: " . $this->getJenis() . "<br>";
            echo "Dengan Jumlah: " . $this->jumlahLiter . " liter<br>";
            echo "Total yang harus anda bayar: Rp. " . number_format($totalBayar, 2);
            echo "<br> ========================= <br>";
            echo "</div>"; 
        }
    }

    if (isset($_POST['submit'])) {
        $jumlahLiter = $_POST['jumlah'];
        $jenis = $_POST['jenis'];

        switch ($jenis) {
            case 'Shell Super':
                $harga = 15420;
                break;
            case 'Shell V-Power':
                $harga = 16130;
                break;
            case 'Shell V-Power Diesel':
                $harga = 18310;
                break;
            case 'Shell V-Power Nitro':
                $harga = 16510;
                break;
            default:
                $harga = 0;
                break;
        }

        if ($harga > 0) {
            $transaksi = new Beli($jenis, $harga, $jumlahLiter);
            $transaksi->tampilkanTransaksi();
        } else {
            echo "Pilih tipe bahan bakar yang valid.";
        }
    }

    ?>

</body>

</html>