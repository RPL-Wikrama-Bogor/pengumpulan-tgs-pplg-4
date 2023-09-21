<?php
class DataBahanBakar {
    private $HargaPertamax;
    private $HargaPertalite;
    private $HargaPremium;

    public $jenisYangDipilih;
    public $totalLiter;

    protected $totalPembayaran;

    public function setHarga($valPertamax, $valPertalite, $valPremium){
        $this->HargaPertamax = $valPertamax;
        $this->HargaPertalite = $valPertalite;
        $this->HargaPremium = $valPremium;
    }

    public function getHarga() {
        $semuaDataSolar = [
            "Pertamax" => $this->HargaPertamax,
            "Pertalite" => $this->HargaPertalite,
            "Premium" => $this->HargaPremium
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
        echo "Jenis Bahan Bakar : " . $this->jenisYangDipilih . "<br>";
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
    <center>
        <br><br><br><br><br>
        <form action="" method="post">
            <label for="liter">Masukkan Jumlah Liter Pembelian Anda :</label>
            <input type="number" min="0" name="liter" id="liter"><br><br>
            <label for="jenis">Pilih Jenis Bahan Bakar Anda :</label>
            <select name="jenis" required><br>
                <option value="Pertamax">Pertamax</option>
                <option value="Pertalite">Pertalite</option>
                <option value="Premium">Premium</option>
            </select><br><br>
            <button type="submit" name="beli">Beli Bahan Bakar</button>
        </form>

        <br><br>
        <?php
        if(isset($_POST['beli'])) {
            $logic = new Pembelian();
            $logic->setHarga(20000, 15000, 28500);
            $logic->jenisYangDipilih = ($_POST['jenis']);
            $logic->totalLiter = ($_POST['liter']);
            $logic->totalHarga();
            $logic->cetakBukti();
        }
        ?>
    </center>
</body>
</html>
