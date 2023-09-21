<?php

    class Shell {
        protected $ppn;
        private $SSuper,
                $SVPower,
                $SVpowerDiesel,
                $SVPowerNitro;
        public  $jumlah,
                $jenis;

        
        function __construct() {
            $this->ppn = 0.1;
        }

        public function setHarga($tipe1,$tipe2,$tipe3,$tipe4){
            $this->SSuper = $tipe1;
            $this->SVPower = $tipe2;
            $this->SVpowerDiesel = $tipe3;
            $this->SVPowerNitro = $tipe4;
        }

        public function getHarga() {
            $data["SSuper"] = $this->SSuper;
            $data["SVPower"] = $this->SVPower;
            $data["SVpowerDiesel"] = $this->SVpowerDiesel;
            $data["SVPowerNitro"] = $this->SVPowerNitro;
            return $data;
        }

    }

    class Beli extends Shell {
            public function hargaBeli() {
                $dataHarga = $this->getHarga();
                $hargaBeli = $this->jumlah * $dataHarga
                [$this->jenis];
                $hargaPPN = $hargaBeli * $this->ppn;
                $hargaBayar = $hargaBeli + $hargaPPN;
                return $hargaBayar;
            }
        

        public function cetakData() {
            echo "<center>";
            echo "---------------------------------------------------------------------". "<br>";
            echo "Anda membeli bahan bakar minyak dengan tipe " . $this->jenis . "<br>";
            echo "Dengan jumlah : " . $this->jumlah . "Liter <br>";
            echo "total yang harus anda bayar Rp. " . 
            number_format($this->hargaBeli(), 0, '', '.') . "<br>";
            echo "----------------------------------------------------------------------";
            echo "</center>";
        }
    }
?>

<?php

$proses = new Beli();
$proses->setHarga(17000, 16000, 17250, 19000);
if (isset($_POST['submit'])) {
    $proses->jumlah = $_POST['liter'];
    $proses->jenis = $_POST['jenis'];

    $proses->cetakData();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
</head>
<body>
    <center>
    <form action="" method="post">
        <table>
        <tr>
            <td>Masukan Jumlah Liter</td>
            <td>:</td>
            <td>
                <input type="number" name="liter" id="liter">
            </td>
        </tr>
        <tr>
            <td>Pilih Tipe Bahan Bakar</td>
            <td>:</td>
            <td>
                <select name="jenis" id="jenis">
                    <option value="SSuper">Shell Super</option>
                    <option value="SVPower">Shell V-Power</option>
                    <option value="SVpowerDiesel">Shell V-Power Diesel</option>
                    <option value="SVPowerNitro">Shell V-Power Nitro</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="submit" value="beli">
            </td>
        </tr>
    </table>
    </form>
    
</body>
</html>