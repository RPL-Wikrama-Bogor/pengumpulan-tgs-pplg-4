<?php
class RentalMotor {
    private $nama;
    private $lamaWaktu;
    private $jenis; 
    private $harga;
    private $total;

    public function __construct($nama, $lamaWaktu, $jenis) {
        $this->nama = $nama;
        $this->lamaWaktu = intval($lamaWaktu);
        $this->jenis = $jenis;
        $this->harga = $this->calculateHarga();
        $this->total = $this->calculateTotal();
    }

    private function calculateHarga() {
        switch ($this->jenis) {
            case "ZX-25R":
                return 1000000;
            case "H2-R":
                return 10000000;
            case "Vario":
                return 70000;
            case "Scoopy":
                return 50000;
            case "CBR-1000RR":
                return 7000000;
            case "R1-M":
                return 7500000;
            case "Ducati Panigale":
                return 9000000;
            default:
                return 0;
        }
    }

    private function calculateTotal() {
        if ($this->lamaWaktu > 2) {
            return $this->lamaWaktu * $this->harga * 0.95;
        } else {
            return $this->lamaWaktu * $this->harga;
        }
    }

    public function getNama() {
        return $this->nama;
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function getLamaWaktu() {
        return $this->lamaWaktu;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function getTotal() {
        return $this->total;
    }
}

$nama = "";
$lamaWaktu = 0;
$jenis = "";
$total = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama_pelanggan"];
    $lamaWaktu = $_POST["lama_rental"];
    $jenis = $_POST["jenis_motor"];
}

$calculator = new RentalMotor($nama, $lamaWaktu, $jenis);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor Barokah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            background: url(bc.jpg) no-repeat;
            background-size: cover;
        }

        h1 {
            text-align: center;
            color: #ffff;
            font-family: Arial;
        }

        form {
            color: #ffff;
        }

        .card {
            margin-top: 50px;
            background-color: rgba(0, 0, 0, 0.5) !important;
            padding: 20px;
        }

        img {
            border-radius: 80px;
            border: solid white;
            margin-left: 110px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
        }

        table,
        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h2{
            color: #ffff;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Form Rental Motor Barokah</h1>
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <img src="profilrental.jpg" alt="">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <br>
                    <label for="nama_pelanggan">Nama pelanggan</label>
                    <input type="text" name="nama_pelanggan" id="nama_pelanggan" required><br><br>

                    <label for="lama_rental">Lama Waktu Rental (per hari)</label>
                    <input type="number" name="lama_rental" id="lama_rental" required><br><br>

                    <label for="jenis_motor">Jenis Motor</label>
                    <select name="jenis_motor" id="jenis_motor" required>
                        <option value="ZX-25R">ZX-25R</option>
                        <option value="H2-R">H2-R</option>
                        <option value="Vario">Vario</option>
                        <option value="Scoopy">Scoopy</option>
                        <option value="CBR-1000RR">CBR-1000RR</option>
                        <option value="R1-M">R1-M</option>
                        <option value="Ducati Panigale">Ducati Panigale</option>
                    </select><br><br>

                    <button type="submit" class="btn btn-primary">Hitung</button>
                </form>
            </div>
        </div>
    </div>
                <?php
               if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($calculator->getTotal() > 0) {
                    echo "<h2>$nama berstatus sebagai Member mendapatkan diskon 5%</h2>";
                    echo "<table>";
                    echo "<tr><th>Jenis Motor</th><th>Lama Rental (hari)</th><th>Harga Rental per Hari</th><th>Total Harga</th></tr>";
                    echo "<tr><td>$jenis</td><td>$lamaWaktu</td><td>Rp " . number_format($calculator->getHarga(), 0, ',', '.') . "</td><td>Rp " . number_format($calculator->getTotal(), 0, ',', '.') . "</td></tr>";
                    echo "</table>";
                } else {
                    echo "<h2>$nama berstatus sebagai Member mendapatkan diskon 5%</h2>";
                    echo "<p>Jenis motor yang dirental adalah $jenis Selama $lamaWaktu hari</p>";
                    echo "<p>Harga Rental per harinya Rp " . number_format($calculator->getHarga(), 0, ',', '.') . "</p>";
                    echo "<p>Besar yang harus dibayarkan Rp " . number_format($calculator->getTotal(), 0, ',', '.') . "</p>";
                }
            }
            
                ?>
</body>

</html>
