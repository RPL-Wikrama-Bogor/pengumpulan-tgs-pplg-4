<?php
    class Motor {
        protected $diskon;
                
        private $cruiser,
                $sport,
                $naked,
                $scooter;
        public  $waktu,
                $members = ["annisa", "aulia", "wahyudi"],
                $nama,
                $jenis;

        function __construct() {
            $this->diskon = 0.05;
        }

        public function setHarga($motor1, $motor2, $motor3, $motor4) {
            $this->cruiser = $motor1;
            $this->sport = $motor2;
            $this->naked = $motor3;
            $this->scooter = $motor4;
        }

        public function getHarga() {
            $data["cruiser"] = $this->cruiser;
            $data["sport"] = $this->sport;
            $data["naked"] = $this->naked;
            $data["scooter"] = $this->scooter;
            return $data;
        }

        public function getData() {
            $data["nama"] = $this->nama;
            $data["waktu"] = $this->waktu;
            return $data;
        }

        
    }

    class Sewa extends Motor {

        public function hargaSewa() {
            $dataHarga = $this->getHarga();
            $hargaSewa = $this->waktu * $dataHarga [$this->jenis];
            $hargaDiskon = $hargaSewa * $this->diskon;
            $hargaBayar = $hargaSewa - $hargaDiskon;
            return $hargaBayar;
        }

        public function hargaRental(){
            $harga = $this->getHarga();
            $hargaSewa = $this->waktu * $harga [$this->jenis];
            return $hargaSewa;
        }

        public function hargaMotor() {
            $dataHarga = $this->getHarga();
            $hargaBeli = $dataHarga [$this->jenis];
            return $hargaBeli;
        }
    

        public function cetakData() {
        echo "<center>";
        echo "--------------------------------------------------------------------------------------------------" . "<br>";
        echo "$this->nama "; 
        if (in_array($this->nama, $this->members)) {
            echo "berstatus sebagai member mendapatkan diskon sebesar 5%" ."<br>";
            echo "Jenis motor yang dirental adalah " . $this->jenis ." selama " . "$this->waktu" . " hari"."<br>";
            echo "Harga rental per-harinya : Rp " . number_format($this->hargaMotor(), 0, '', '.') . "<br>";
            echo "Besar yang harus dibayarkan adalah " .  number_format($this->hargaSewa(), 0, '', '.');
        } else {
            echo "menyewa ";
            echo "Jenis motor yang dirental adalah " . $this->jenis ." selama " . "$this->waktu" . " hari"."<br>";
            echo "harga rental per-harinya : Rp ". number_format($this->hargaMotor(), 0, '', '.') . "<br>";
            echo "Besar yang harus dibayarkan adalah " . number_format($this->hargaRental(), 0, '', '.') . "<br>";
        }
        echo "<br>--------------------------------------------------------------------------------------------------";
        
    }
}
?>

<?php
    $proses = new Sewa();
    $proses->setHarga(900000, 1200000, 800000, 100000);

    if (isset($_POST['submit'])) {
        $proses->waktu = $_POST['waktu'];
        $proses->nama = $_POST['nama'];
        $proses->jenis = $_POST['jenis'];
        $proses->cetakData();
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
    <center>
    <h1>Rental Motor</h1>
    <form action="" method="post">
    <table>
    <tr>
        <td>Nama Pelanggan</td>
        <td> :</td>
        <td>
            <input type="text" name="nama">
        </td>
    </tr>
    <tr>
        <td>Lama Waktu Rental (per hari) </td>
        <td>:</td>
        <td>
            <input type="text" name="waktu">
        </td>
    </tr>
    <tr>
        <td>Nama Pelanggan</td>
        <td>:</td>
        <td>
            <select name="jenis">
                <option value="cruiser">Cruiser</option>
                <option value="sport">Sport Bike</option>
                <option value="naked">Naked Bike</option>
                <option value="scooter">Scooter</option>
            </select>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
            <input type="submit" name="submit" value="cek">
        </td>
    </tr>
    </table>
    </form>
</body>
</html>