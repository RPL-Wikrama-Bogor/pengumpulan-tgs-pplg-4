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
        if ($this->lamaWaktu < 2) {
            $this->total = $this->lamaWaktu * $this->harga / 0.95;
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
            case "Vario 150":
                $this->harga = 500000;
                break;
            case "Beat Streat":
                $this->harga = 500000;
                break;
            case "Aerox":
                $this->harga = 500000;
                break;
            case "Supra X":
                $this->harga = 300000;
                break;
            case "Mio":
                $this->harga = 300000;
                break;
            case "NmaX":
                $this->harga = 500000;
                break;
            case "KLX":
                $this->harga = 600000;
                break;
            default:
                $this->harga = 0;
        }
    }

    public function getHasil() {
        if ($this->total > 0 && $this->lamaWaktu <= 2) {
            return "<table>
                        <tr><th>Jenis Motor : {$this->jenis}</th></tr>
                        <tr><th>Lama Rental {$this->lamaWaktu} Hari</th></tr>
                        <tr><th>Harga Rental per Hari : Rp ". number_format($this->harga, 0, ',', '.') ."</th></tr>
                        <tr><th>Total Harga : Rp ". number_format($this->harga, 0, ',', '.') ."</br></th></tr>
                    </table>";
        } else {
            return "<h2>{$this->nama}, kamu merental lebih dari 2 hari, kamu berhak mendapatkan diskon 5%</h2>
                    <p>Jenis motor yang dirental adalah {$this->jenis} Selama {$this->lamaWaktu} hari</p>
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
    <h1>Rental Motor</h1>
    <p> NOTE!! Jika menyewa dengan jangka waktu lebih dari 2 hari, Akan mendapatkan diskon 5%</p> 
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
                        <option value="Vario 150">Vario 150</option>
                        <option value="Beat Street">Beat Street</option>
                        <option value="Aerox">Aerox</option>
                        <option value="Supra X">Supra X</option>
                        <option value="Mio">Mio</option>
                        <option value="NmaX">NmaX</option>
                        <option value="KLX">KLN</option>
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