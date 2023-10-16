<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>RENTAL MOTOR</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    Nama Pelanggan
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <td>
                    Lama Waktu Rental
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="number" name="waktu" id="waktu">
                </td>
            </tr>
            <tr>
                <td>
                    jenis motor
                </td>
                <td>
                    :
                </td>
                <td>
                    <select name="jenis" id="">
                        <option value="Aerox">Aerox</option>
                        <option value="Vespa">Vespa</option>
                        <option value="Scooter">Scooter</option>
                        <option value="Vario">Vario</option>
                    </select>
                </td>
            </tr>
           <tr>
            <td></td>
            <td></td>
           <td>
                <input type="submit" name="submit" value="submit">
            </td>
           </tr>
        </table>
    </form>

    <?php


$proces = new Rental();
$proces->setHarga(150000, 175000, 50000, 87000);

if (isset($_POST['submit'])) {
    $proces->namaPelanggan = $_POST['nama'];
    $proces->waktuRental = $_POST['waktu'];
    $proces->motorYangDipilih = $_POST['jenis'];

    $proces->totalHargaRental();
    $proces->hargaDiskon();
    $proces->cetakRental();
}
?>
</body>
</html>

<?php 
    class Motor {
        private $hargaAerox;
        private $hargaVespa;
        private $hargaScooter;
        private $hargaVario;
        private $listMember = ['azalia', 'dhea', 'friska'];
        
        public $motorYangDipilih;
        public $waktuRental;
        public $namaPelanggan;
        
        protected $totalPembayaran;
        protected $diskon;

        protected $pajak;

        function __construct() 
        {
            $this->diskon = 0.05;
        }

    
        public function setHarga($Aerox,$Vespa,$Scooter,$Vario) {
            $this->hargaAerox = $Aerox;
            $this->hargaVespa = $Vespa;
            $this->hargaScooter = $Scooter;
            $this->hargaVario = $Vario;
        }

        public function getlistMember() {
            return $this->listMember;
        }

        public function setListNama($nama) {
            $this->namaPelanggan = $nama;
        }

        public function getListNama() {
            return $this->namaPelanggan;
        }

        public function getHarga(){
            $semuaDataMotor["Aerox"] = $this->hargaAerox;
            $semuaDataMotor["Vespa"] = $this->hargaVespa;
            $semuaDataMotor["Scooter"] = $this->hargaScooter;
            $semuaDataMotor["Vario"] = $this->hargaVario;
            return $semuaDataMotor;
        }


    }

    class Rental extends Motor {
        public function totalHargaRental() {
            $hargaMotor = $this->getHarga();
            $hargaRental = $this->waktuRental * $hargaMotor[$this->motorYangDipilih];
            $hargaRental;
            return $hargaRental;
        }

        public function hargaDiskon() {
            $hargaMotor = $this->getHarga();
            $hargaRental = $this->waktuRental * $hargaMotor[$this->motorYangDipilih];
            $diskon = $hargaRental * $this->diskon;
            $totalDiskon = $hargaRental - $diskon ;
            return $totalDiskon;
        }

        public function cetakRental() {
            $hargaMotor = $this->getHarga();

            if (in_array($this->getListNama(), $this->getlistMember())) {
                echo "------------------------------------- <br>";
                echo "Nama Pelanggan: " .ucfirst($this->getListNama()) . "<br>";
                echo "Jenis Motor Yang Disewa: " .($this->motorYangDipilih) . "<br>";
                echo "Harga Sewa Per Hari: Rp. " .number_format($hargaMotor[$this->motorYangDipilih], 0, ',', '.')  . "<br>";
                echo "Waktu Peminjaman : " .$this->waktuRental ."hari". "<br>";
                echo "Mendapatkan Diskon Sebesar 5% <br>";
                echo "Total Harga Yang Harus Dibayar Setelah Diskon yaitu Rp. " . number_format($this->hargaDiskon(), 0, ',', '.') . "<br>";
                echo "------------------------------------- <br>";
        } else {
            echo "------------------------------------- <br>";
            echo "Nama Pelanggan: " .ucfirst($this->getListNama()) . "<br>";
            echo "Jenis Motor Yang Disewa: " .($this->motorYangDipilih) . "<br>";
            echo "Harga Sewa Per Hari: Rp. " .number_format($hargaMotor[$this->motorYangDipilih], 0, ',', '.')  . "<br>";
            echo "Waktu Peminjaman " .$this->waktuRental . " ". "hari" . "<br>";
            echo "Tidak ada Diskon, anda bukan Member <br>";
            echo "Total Harga Yang Harus Dibayar yaitu Rp. " . number_format($this->totalHargaRental(), 0, ',', '.') . "<br>";
            echo "------------------------------------- <br>";
        }

    } 
}
?>