<!DOCTYPE html>
<html>

<head>
    <title>Shell Ciawi</title>
    <style>
        .result-table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            font-size: 14px;
        }

        .result-table th, .result-table td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        .card {
            margin-top: 50px;
            background-color: rgba(0, 0, 0, 0.5) !important;
            padding: 20px; 
        }

        body {
            background: url(shell.png) no-repeat;
            background-size: cover;
        }

        h1 {
            text-align: center;
            color: #ffff !important;
            font-family: Lucida;
        }

        h3 {
            text-align: center;
            color: #ffff !important;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        label {
            color: #ffff;
        }

        img {
            width: 200px;
            margin-left: 70px;
        }

        .namalogo{
            font-family: Courier;
            color: #ffff;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1>Selamat datang</h1>
    <h3>Silahkan masukkan pesanan anda</h3>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="">
                        <img src="logoshell.png" alt="">
                        <h1 class="namalogo">Shell</h1>
                        <br>
                        <label for="jumlah_liter">Masukkan Jumlah liter</label>
                        <input type="number" name="jumlah_liter" id="jumlah_liter" required><br><br>
                        <label for="tipe_bahan_bakar">Pilih Tipe Bahan Bakar</label><br>
                        <select name="tipe_bahan_bakar" id="tipe_bahan_bakar">
                            <option value="Super">Shell Super</option>
                            <option value="V-Power">Shell V-Power</option>
                            <option value="V-Power Diesel">Shell V-Power Diesel</option>
                            <option value="V-Power Nitro">Shell V-Power Nitro</option>
                        </select><br><br>
                        <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    class Shell
    {
        protected $harga = [
            'Super' => 15420,
            'V-Power' => 16130,
            'V-Power Diesel' => 18310,
            'V-Power Nitro' => 16510,
        ];
        protected $jumlah;
        protected $tipe;
        protected $ppn = 0.10;

        public function __construct($jumlah, $tipe)
        {
            $this->jumlah = $jumlah;
            $this->tipe = $tipe;
        }

        public function hitungTotal()
        {
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

    class Beli extends Shell
    {
        public function buatBuktiTransaksi()
        {
            $result = $this->hitungTotal();
            if ($result) {
                echo "<h3>Detail Pesanan Anda:</h3>";
                echo "<table class='result-table'>";
                echo "<tr><th>Deskripsi</th><th>Nilai</th></tr>";
                echo "<tr><td>Tipe Bahan Bakar</td><td>" . $result['tipe'] . "</td></tr>";
                echo "<tr><td>Jumlah Liter</td><td>" . $result['jumlah'] . " liter</td></tr>";
                echo "<tr><td>Total Harga</td><td>Rp " . number_format($result['total'], 2) . "</td></tr>";
                echo "<tr><td>Total Harga + PPN</td><td>Rp " . number_format(($result['total'] + $result['totalPPN']), 2) . "</td></tr>";
                echo "</table>";
            } else {
                echo "<p>Tipe bahan bakar tidak valid</p>";
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