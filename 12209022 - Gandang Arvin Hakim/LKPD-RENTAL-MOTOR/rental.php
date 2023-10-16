<?php

class RentalMotor {
    private $nama;
    private $lamaWaktu;
    private $jenis;
    private $harga;
    private $total;

    public function _a_construct() {
        $this->nama = "";
        $this->lamaWaktu = 0;
        $this->jenis = "";
        $this->harga = 0;
        $this->total = 0;
    }

    public function hitungTotal() {
        if ($this->lamaWaktu > 2) {
            $this->total = $this->lamaWaktu * $this->harga * 0.95;
        } else {
            $this->total = $this->lamaWaktu * $this->harga;
        }
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setLamaWaktu($lamaWaktu) {
        $this->lamaWaktu = intval($lamaWaktu);
    }

    public function setJenis($jenis) {
        $this->jenis = $jenis;
        switch ($jenis) {
            case "kawasaki":
                $this->harga = 100000;
                break;
            case "honda":
                $this->harga = 250000;
                break;
            case "yamaha":
                $this->harga = 500000;
                break;
            case "supra":
                $this->harga = 200000;
                break;
            case "BMW":
                $this->harga = 430000;
                break;
            case "scoopy":
                $this->harga = 500000;
                break;
            case "alva":
                $this->harga = 300000;
                break;
            default:
                $this->harga = 0;
        }
    }

    public function getHasil() {
        if ($this->total > 0 && $this->lamaWaktu <= 2) {
            return "<table>
                        <tr><th>Jenis Motor</th><th>Lama Rental (hari)</th><th>Harga Rental per Hari</th><th>Total Harga</th></tr>
                        <tr><td>{$this->jenis}</td><td>{$this->lamaWaktu}</td><td>Rp " . number_format($this->harga, 0, ',', '.') . "</td><td>Rp " . number_format($this->total, 0, ',', '.') . "</td></tr>
                    </table>";
        } else {
            return "<h2>{$this->nama}, kamu merental lebih dari 2 hari, kamu berhak mendapatkan diskon 5%</h2>
                    <h3>Jenis motor yang dirental adalah {$this->jenis} Selama {$this->lamaWaktu} hari</h3>
                    <p>Harga Rental per harinya Rp " . number_format($this->harga, 0, ',', '.') . "</p>
                    <p>Besar yang harus dibayarkan Rp " . number_format($this->total, 0, ',', '.') . "</p>";
        }
    }
}

$rentalMotor = new RentalMotor();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rentalMotor->setNama($_POST["nama_pelanggan"]);
    $rentalMotor->setLamaWaktu($_POST["lama_rental"]);
    $rentalMotor->setJenis($_POST["jenis_motor"]);
    $rentalMotor->hitungTotal();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>

<body>
    <h1>Selamat Datang Di Rental Motor</h1>
    
    <h4>Member Benefit :</h4>
    
    <p>Akan mendapatkan diskon 5% jika menyewa dengan jangka waktu lebih dari 2 hari</p> 
    <div>
        <div>
            <div>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <br>
                    <label for="nama_pelanggan">Nama pelanggan</label>
                    <input type="text" name="nama_pelanggan" id="nama_pelanggan" required><br><br>

                    <label for="lama_rental">Lama Waktu Rental (per hari)</label>
                    <input type="number" name="lama_rental" id="lama_rental" required>
                    
                    <br><br>

                    <label for="jenis_motor">Nama Motor</label>
                    <select name="jenis_motor" id="jenis_motor" required>
                        <option value="kawasaki">kawasaki</option>
                        <option value="honda">Honda</option>
                        <option value="yamaha">Yamaha</option>
                        <option value="supra">Supra</option>
                        <option value="BMW">BMW</option>
                        <option value="scoopy">Scoopy</option>
                        <option value="alva">Alva</option>
                    </select>
                    
                    <br><br>

                    <button type="submit">Hitung</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo $rentalMotor->getHasil();
    }
    ?>
</body>

</html>
