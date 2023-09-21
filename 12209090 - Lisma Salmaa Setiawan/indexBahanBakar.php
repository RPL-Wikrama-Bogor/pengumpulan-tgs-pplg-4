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

    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4) {
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
        $dataHarga = $this->getHarga();
        $hargaBeli = $this->jumlah * $dataHarga
        [$this->jenis];
        $hargaPPN = $hargaBeli * $this->ppn;
        $hargaBayar = $hargaBeli + $hargaPPN;
        return $hargaBayar;
    }

    public function cetakPembelian() {
        echo "<center>";
        echo "----------------------------------------------" . "<br>";
        echo "Anda membeli bahan bakar minyak tipe " . $this->jenis . "<br>";
        echo "Dengan jumlah : " . $this->jumlah . " Liter <br>";
        echo "Total yang harus anda bayar Rp. " . number_format($this->hargaBeli(), 0, '', '.') . "<br>";
        echo "----------------------------------------------";
        echo "</center>";
    }
}

?>

<?php
$proses = new Beli;
$proses->setHarga(17000, 16000, 17250, 18000, 19000);
if(isset($_POST['submit'])) {
    $proses->jumlah = $_POST['liter'];
    $proses->jenis = $_POST['jenis'];

    $proses->cetakPembelian();
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar Shell</title>
</head>
<body>
   
        <table>
            <form action="" method="post">
                <tr>
                    <td>Masukkan Jumlah Liter :</td>
                    <td>
                        <input type="number" name="liter" required>
                    </td>
                </tr>
                <tr>
                    <td>Pilih Tipe Bahan Bakar :</td>
                    <td>
                        <select name="jenis" required>
                            <option value="SSuper">Shell Super</option>
                            <option value="SVPower">Shell V-Power</option>
                            <option value="SVPowerDiesel">Shell V-Power Diesel</option>
                            <option value="SVPowerNitro">Shell V-Power Nitro</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Beli" name="submit"></td>
                </tr>
            </form>
        </table>
   
</body>
</html>