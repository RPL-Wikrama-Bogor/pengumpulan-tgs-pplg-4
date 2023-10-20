<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="tas">
    <h1>RENTAL MOTOR</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    nama pelanggan
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
                    lama waktu rental
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
                        <option value="Yamaha">Yamaha</option>
                        <option value="Vario">Vario</option>
                        <option value="Ninja">Ninja</option>
                    </select>
                </td>
            </tr>
           <tr>
            <td></td>
            <td></td>
           <td>
                <input type="submit" name="rental" value="rental">
            </td>
           </tr>
        </table>
    </form>
    </div>

</body>
</html>

<?php 
    class Motor {
        private $hargaAerox,
                $hargaYamaha,
                $hargaVario,
                $hargaNinja;
        private $listMember = ['jisung', 'jeno', 'jaemin'];
        
        public  $motorYangDipilih,
                $waktuRental,
                $namaPelanggan;
                
        protected $totalPembayaran,
                  $diskon;


        function __construct() 
        {
            $this->diskon = 0.05;
        }

    
        public function setHarga($ty1,$ty2,$ty3,$ty4) {
            $this->hargaAerox = $ty1;
            $this->hargaYamaha = $ty2;
            $this->hargaVario = $ty3;
            $this->hargaNinja = $ty4;
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
            $DataMotor["Aerox"] = $this->hargaAerox;
            $DataMotor["Yamaha"] = $this->hargaYamaha;
            $DataMotor["Vario"] = $this->hargaVario;
            $DataMotor["Ninja"] = $this->hargaNinja;
            return $DataMotor;
        }
    }

    class Rental extends Motor {
        public function totalHargaRental() {
            $hargaMotor = $this->getHarga();
            $hargaRental = $this->waktuRental * $hargaMotor[$this->motorYangDipilih];
            return $hargaRental;
        }

        public function hargaDiskon() {
            $hargaMotor = $this->getHarga();
            $hargaRental = $this->waktuRental * $hargaMotor[$this->motorYangDipilih];
            $diskon = $hargaRental * $this->diskon;
            $totalDiskon = $hargaRental - $diskon;
            return $totalDiskon;
        }

        public function cetakRental() {
            $hargaMotor = $this->getHarga();

            if (in_array($this->getListNama(), $this->getlistMember())) {
                echo "-------------------------------------------------------------------------------------- <br>";
                echo "Nama Pelanggan: " .ucfirst($this->getListNama()) . "<br>";
                echo "Jenis Motor yang di sewa adalah " .($this->motorYangDipilih) . " selama " .$this->waktuRental .  " hari" . "<br>";
                echo "Harga Sewa Per Hari: Rp. " .number_format($hargaMotor[$this->motorYangDipilih], 0, ',', '.')  . "<br>";
                echo "Mendapatkan Diskon Sebesar 5% <br>";
                echo "besar Yang Harus Dibayar adalah: Rp. " . number_format($this->hargaDiskon(), 0, ',', '.') . "<br>";
                echo "------------------------------------------------------------------------------------- <br>";
          }else {
                echo "------------------------------------------------------------------------------------------<br>";
                echo "Nama Pelanggan: " .ucfirst($this->getListNama()) . "<br>";
                echo "Jenis Motor Yang Disewa adalah " .($this->motorYangDipilih) . " selama " .$this->waktuRental . " hari" . "<br>";
                echo "Harga Sewa Per Hari: Rp. " .number_format($hargaMotor[$this->motorYangDipilih], 0, ',', '.')  . "<br>";
                echo "Tidak Ada Diskon untuk Pelanggan yang bukan member <br>";
                echo "besar Yang Harus Dibayar adalah: Rp. " . number_format($this->totalHargaRental(), 0, ',', '.') . "<br>";
                echo "------------------------------------------------------------------------------------------ <br>";
            }

    } 
}
?>

<?php
$proces = new Rental();
$proces->setHarga(50000, 60000, 70000, 80000);

if (isset($_POST['rental'])) {
    $proces->namaPelanggan = $_POST['nama'];
    $proces->waktuRental = $_POST['waktu'];
    $proces->motorYangDipilih = $_POST['jenis'];

    $proces->totalHargaRental();
    $proces->hargaDiskon();
    $proces->cetakRental();
}