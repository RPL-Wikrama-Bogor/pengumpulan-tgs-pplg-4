<?php

    class Shell {
        protected $ppn;
        private $SSuper,
                $SVPower,
                $SVPowerDiesel,
                $SVPowerNitron;
        public $jumlah;
        public $jenis;

        function _construct() {
            $this->ppn = 0.1;
        }

        public function setHarga($tipe1, $tipe2, $tipe3, $tipe4) {

            $this->SSuper = $tipe1;
            $this->SVPower = $tipe2;
            $this->SVPowerDiese = $tipe3;
            $this->SVPowerNitron = $tipe4;
        }

        public function getHarga() {
            $data["SSuper"] = $this->SSuper;
            $data["SVPower"] = $this->SVPower;
            $data["SVPowerDiese"] = $this->SVPowerDiese;
            $data["SVPowerNitron"] = $this->SVPowerNitron;
            return $data;
        }
    }
    
    class Beli extends Shell {
        public function hargaBeli(){
            $dataHarga = $this->getHarga();
            $hargaBeli = $this->jumlah * $dataHarga [$this->jenis];
            $hargaPPN = $hargaBeli * $this->ppn;
            $hargaBayar = $hargaBeli + $hargaPPN;
            return $hargaBayar;
        }

        public function cetakPembelian() {
            echo "<center>";
            echo"--------------------------------------" . "<br>";
            echo"Anda membeli bahan bakar minyak tipe " . $this->jenis . "<br>";
            echo"Dengan jumlah : " . $this->jumlah ." Liter <br>";
            echo"Total yang harus anda bayar Rp. " . number_format($this->hargaBeli(), 0, '', '.'). "<br>";
            echo "-------------------------------------";
            echo"</center>";
        }
    }
?>

<?php

    $proses = new Beli;
    $proses->setHarga(17000, 16000, 17250, 18000, 19000);
    if (isset($_POST['submit'])) {
        $proses->jumlah = $_POST['liter'];
        $proses-> jenis = $_POST['jenis'];

        $proses->cetakPembelian();
    }

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=tabl, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <table>
        <tr>
            <td>Masukkan Jumlah Liter</td>
            <td>:</td>
            <td>
                <input type="number" name="liter" id="liter">
            </td>
        </tr>

        <tr>
            <td>Pilih bahan bakar</td>
            <td>:</td>
            <td>
                <select name="jenis" id="jemis_bahan_bakar">
                    <option value="SSuper">Shell Supper</option>
                    <option value="SVPower">Shell V-Power</option>
                    <option value="SVPowerDiesel">Shell V-Power Diesel</option>
                    <option value="SVPowerNitro">Shell V-Power Nitro</option>
                </select>
            </td>
        </tr>
        <tr>

            <td></td>
            <td></td>
            <td><button type="submit" name="submit">beli</button></td>
            
        </tr>
    </table>
    </form>
    

</body>
</html>