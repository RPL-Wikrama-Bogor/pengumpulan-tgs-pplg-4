<?php

    class Shell {
        protected $ppn;
        private $SSuper,
                $SVPower,
                $SVPowerDiesel,
                $SVPowerNitro;
        public $jumlah;
        public $jenis;

        function __construct() {
            $this->ppn = 0.1;
        }

        public function setHarga($tipe1, $tipe2, $tipe3, $tipe4){
            $this->SSuper = $tipe1;
            $this->SVPower = $tipe2;
            $this->SVPowerDiesel = $tipe3;
            $this->SVPowerNitro = $tipe4;
        }

        public function getHarga() {
            $data["SSuper"] = $this->SSuper;
            $data["SVPower"] = $this->SVPower;
            $data["SVPowerDiesel"] = $this->SVPowerDiesel;
            $data["SVPowerNitro"] = $this->SVPowerNitro;
            return $data;
        }
    }

    class Beli extends Shell {
        public function hargaBeli() {
            $dataharga = $this->getHarga();
            $hargabeli = $this->jumlah * $dataharga
            [$this->jenis];
            $hargaPPN = $hargabeli * $this->ppn;
            $hargabayar = $hargabeli + $hargaPPN;
            return $hargabayar;
        }

        public function cetakPembelian() {
            echo "<center>";
            echo
            "---------------------------------------------" .
            "<br>";
            echo "Anda membeli bahan bakar minyak tipe " .
            $this->jenis . "<br>";
            echo "Dengan jumlah : "  . $this->jumlah . " Liter
            <br>";
            echo "Total yang harus anda bayar Rp. " .
            number_format($this->hargaBeli(), 0, '', '.') .
            "<br>";
            echo 
            "---------------------------------------------";
            echo "</center>";
        }
    }  
?>


<?php

$proses = new Beli;
$proses->setHarga(17000, 16000, 17250, 18000, 19000);
if (isset($_POST['submit'])) {
    $proses->jumlah = $_POST['liter'];
    $proses->jenis = $_POST['jenis'];

    $proses->cetakPembelian();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan bakar</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Masukkan Jumlah liter</td>
                    <td>:</td>
                <td>
                    <input type="number" name="liter" id="liter">
                </td>
            </tr>
            
            <tr>
                <td>Pilih tipe bahan bakar</td>
                    <td>:</td>

                <td>
                    <select name="jenis" id="jenis_bahan_bakar">
                        <option value="SSuper">Shell Super</option>
                        <option value="SVPower">Shell V-Power</option>
                        <option value="SVPowerDiesel">Shell Power Diesel</option>
                        <option value="SVPowerNitro">Shell Power Nitro</option>

                    </select>
                </td>
            <tr>
                <tr>
                    <td><button type="submit" name="submit">beli</button></td>
                </tr>
        </table>
    </form>
</body>
</html>