<?php
    class Motor {
        protected $diskon;
                
        private $HondaBeat,
                $YamahaGear,
                $HondaVario,
                $NmaxConnected;
        public  $waktu,
                $members = ["nana", "na jaemin", "jaemin"],
                $nama,
                $jenis;

        function __construct() {
            $this->diskon = 0.05;
        }

        public function setHarga($motor1, $motor2, $motor3, $motor4) {
            $this->HondaBeat = $motor1;
            $this->YamahaGear = $motor2;
            $this->HondaVario = $motor3;
            $this->NmaxConnected = $motor4;
        }

        public function getHarga() {
            $data["HondaBeat"] = $this->HondaBeat;
            $data["YamahaGear"] = $this->YamahaGear;
            $data["HondaVario"] = $this->HondaVario;
            $data["NmaxConnected"] = $this->NmaxConnected;
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
        <h1>Rental Motor</h1>
        <table>
            <form action="" method="post">
                <tr>
                    <td>Nama Pelanggan :</td>
                    <td>
                        <input type="name" name="nama"> 
                    </td>
                </tr>

                    <tr>
                        <td>Lama Waktu Rental (per hari) :</td>
                        <td>
                       <input type="text" name="waktu">
                        </td>
                    </tr>
                    <tr>
                    <td>Jenis Motor :</td>
                    <td>
                        <select name="jenis" required>
                            <option value="HondaBeat">BEAT 110 CC</option>
                            <option value="YamahaGear">GEAR 125 CC</option>
                            <option value="HondaVario">VARIO 125 CC</option> 
                            <option value="NmaxConnected">NEW NMAX 155 CC</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="submit" name="submit"></td>
                </tr>
            </form>
        </table>


</body>
</html>