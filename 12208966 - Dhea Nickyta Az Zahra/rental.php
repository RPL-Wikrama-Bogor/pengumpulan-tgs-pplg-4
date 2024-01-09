<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental</title>
</head>
<body>
    <center>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <h1>RENTAL MOTOR</h1>
                </td>
            </tr>
            <tr>
                <td>
                    Nama Pelanggan 
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="text" name="nama">
                </td>
            </tr>
            <tr>
                <td>
                    Lama Waktu Rental (Per-hari)
                </td>
                <td>
                    :
                </td>
                <td>
                    <input type="number" name="JHari">
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Motor
                </td>
                <td>
                    :
                </td>
                <td>
                    <select name="jenis" id="">
                        <option value="Sport">Sport</option>
                        <option value="Retro">Retro</option>
                        <option value="Dual-Sport">Dual-Sport</option>
                        <option value="Bebek">Bebek</option>
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
    </center>
</body>
</html>

<?php
    class sewa {
        protected $DMember;
        private $Sport,
                $Retro,
                $DualSport,
                $Bebek;
        public  $JHari,
                $nama,
                $member = ['azalia', 'dhea', 'annisa', 'frieska'],
                $jenis;
    
    
        function __construct () {
            $this->DMember = 0.05;
        }
        

    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4) {
        $this->Sport = $tipe1;
        $this->Retro = $tipe2;
        $this->DualSport = $tipe3;
        $this->Bebek = $tipe4;
    }

    public function getHarga(){
        $data["Sport"] = $this->Sport;
        $data["Retro"] =  $this->Retro;
        $data["Dual-Sport"] = $this->DualSport;
        $data["Bebek"] = $this->Bebek;
        return $data;
    }
}

    class harga extends sewa {
        public function hargaMember(){
            $dataHarga = $this->getHarga();
            $hargaSewa = $this->JHari * $dataHarga[$this->jenis];
            $diskon = $hargaSewa * $this->DMember;
            $hargaBayar = $hargaSewa - $diskon;
            return $hargaBayar;
        }

        public function hargaAsli(){
            $dataHarga = $this->getHarga();
            $hargaBeli = $dataHarga [$this->jenis];
            return $hargaBeli;
        }
        
        public function hargaSewa(){
            $harga = $this->getHarga();
            $hargaSewa = $this->JHari * $harga[$this->jenis];
            return $hargaSewa;

        }
        public function cetakPembelian() {
            echo "<center>";
            echo
            "----------------------------------------------------------------------------------------" . "<br>";
            echo "$this->nama";
            if(in_array($this->nama, $this->member)) {
                echo " berstatus sebagai member mendapatkan diskon sebesar 5% <br>";
                echo "Jenis motor yang dirental adalah " . " $this->jenis " . "selama ". "$this->JHari " . " hari <br>";
                echo "Harga rental per-hari : " . number_format($this->hargaAsli(), 0, '', '.') . "<br>";
                echo "Besar yang harus dibayarkan adalah Rp " . 
                number_format($this->hargaMember(), 0, '', '.') . "<br>";
            }
            else {
                echo " berstatus sebagai member mendapatkan diskon sebesar 5% <br>";
                echo "Jenis motor yang dirental adalah " . " $this->jenis " . "selama ". "$this->JHari " . " hari <br>";
                echo "Harga rental per-hari : " . number_format($this->hargaAsli(), 0, '', '.') . "<br>";
                echo "Besar yang harus dibayarkan adalah Rp " . 
                number_format($this->hargaSewa(), 0, '', '.') . "<br>";
            }

            echo
            "----------------------------------------------------------------------------------------" . "<br>";
            echo "</center>";
        }

    }

?>

<?php

$proses = new harga();
$proses->setHarga(75000, 95000, 105000, 45000);
if (isset($_POST['submit'])) {
    $proses->JHari = $_POST['JHari'];
    $proses->nama = $_POST['nama'];
    $proses->jenis = $_POST['jenis'];
    
    $proses->cetakPembelian();
}
?>