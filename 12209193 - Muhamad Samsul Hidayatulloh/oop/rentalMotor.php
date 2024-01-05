<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>
<body>
    <center>
    <h1>Rental Motor</h1>
    <form method="post">
        <label for="nama">Nama Pelanggan :</label>
        <input type="text" name="nama" required><br>
        <label for="waktu">Lama Waktu Rental :</label>
        <input type="number" name="waktu" required><br>

        <label for="tipe">Tipe motor :</label>
        <select name="tipe" required>
            <option value="Aerox">Aerox</option>
            <option value="Scoopy">Scoopy</option>
            <option value="Beatstret">Beatstret</option>
            <option value="Vario">Vario</option>
        </select><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    class rental {
        public $harga;
        public $jenis;
        public $waktu;
        private $member = ['samsul', 'catur', 'komang', 'frieska', 'azalia'];
    
        public function __construct($harga, $jenis, $waktu) {
            $this->harga = $harga;
            $this->jenis = $jenis;
            $this->waktu = $waktu;
        }
    
        public function pajak() {
            return 10000; 
        }
    
        public function hitung() {
            $pajak = $this->pajak();
            $total = $this->harga * $this->waktu + $pajak;
    
            if (in_array(strtolower($this->jenis), $this->member)) {
                $diskon = 0.05 * $total;
                $total -= $diskon;
            }
    
            return $total;
        }
    }    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $waktu = $_POST["waktu"];
        $tipe = $_POST["tipe"];
        $harga_motor = 0;
    
        switch ($tipe) {
            case "Aerox":
                $harga_motor = 55000;
                break;
            case "Scoopy":
                $harga_motor = 65000;
                break;
            case "Beatstret":
                $harga_motor = 70000;
                break;
            case "Vario":
                $harga_motor = 80000;
                break;
            default:
            
                echo "Tipe motor tidak valid.";
                break;
        }
    
        
        $rental = new rental($harga_motor, $nama, $waktu);
        $total_biaya = $rental->hitung();

        echo "Total Biaya Rental Untuk $nama <br> Dengan Jenis Motor : ($tipe) <br> Selama $waktu Hari Adalah: Rp. " . number_format($total_biaya, 2);
    }
    ?>
    </center>
</body>
</html>