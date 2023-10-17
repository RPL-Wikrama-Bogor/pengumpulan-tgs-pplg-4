<?php
class DataBahanBakar {
    private $HargaSSuper;
    private $HargaSVPower;
    private $HargaSVPowerDiesel;
    private $HargaSVPowerNitro;

    public $jenisYangDipilih;
    public $totalLiter;

    protected $totalPembayaran;

    public function setHarga($valSSuper, $valSVPower, $valSVPowerDiesel, $valSVPowerNitro){
        $this->HargaSSuper = $valSSuper;
        $this->HargaSVPower = $valSVPower;
        $this->HargaSVPowerDiesel = $valSVPowerDiesel;
        $this->HargaSVPowerNitro = $valSVPowerNitro;
    }

    public function getHarga() {
        $semuaDataSolar = [
            "SSuper" => $this->HargaSSuper,
            "SVPower" => $this->HargaSVPower,
            "SVPowerDiesel" => $this->HargaSVPowerDiesel,
            "SVPowerNitro" => $this->HargaSVPowerNitro
        ];
        return $semuaDataSolar;
    }
}

class Pembelian extends DataBahanBakar {
    public function totalHarga() {
        $harga = $this->getHarga();
        $this->totalPembayaran = $harga[$this->jenisYangDipilih] * $this->totalLiter;
    }

    public function cetakBukti() {
        echo "------------------------------------------------<br>";
        echo "Jenis Bahan Bakar: " . $this->jenisYangDipilih . "<br>";
        echo "Total Liter: " . $this->totalLiter . "<br>";
        echo "Harga Bayar: " . number_format($this->totalPembayaran, 0, ',', '.') . "<br>";
        echo "-----------------------------------------------<br>";
    }
}
?>

    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <div style="display: flex;">
        <label for="liter">Masukkan Jumlah Liter Pembelian Anda :</label>
        <input type="number" min="0" name="liter" id="liter">
    </div>
    <div style="display: flex;">
        <label for="jenis">Pilih Jenis Bahan Bakar Anda :</label>
        <select name="jenis" required>
            <option value="SSuper">Shell Super</option>
            <option value="SVPower">Shell V-Power</option>
            <option value="SVPowerNitro">Shell V-Power Nitro</option>
        </select>
    </div>
    <button type="submit" name="beli">Beli Bahan Bakar</button>
</form>

<?php
if(isset($_POST['beli'])) {
    $logic = new Pembelian();
    $logic->setHarga(10000, 15000, 18000, 20000);
    $logic->jenisYangDipilih = ($_POST['jenis']);
    $logic->totalLiter = ($_POST['liter']);
    $logic->totalHarga();
    $logic->cetakBukti();
}
?>
</body>
    </html>
