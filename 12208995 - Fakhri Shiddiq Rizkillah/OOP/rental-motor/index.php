<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rental Motor</title>
</head>
<body>
<form action="" method="post">
    <div class="kotak">
        <h1>RENTAL AJAH</h1>
        <table>
            <tr>
                <td>nama Pelanggan</td>
                    <td>:</td>
                <td>
                    <input type="text" name="namaLangganan" id="namaLangganan">
                </td>
            </tr>

            <tr>
                <td>Lama waktu Rental (per hari)</td>
                    <td>:</td>
                <td>
                    <input type="number" name="waktuPinjaman" id="waktuPinjaman">
                </td>
            </tr>
            
            <tr>
                <td>jenis Motor</td>
                    <td>:</td>
                    <td>
                    <select name="jenisMotor" id="jenisMotor_Motor">
                        <option value="AEROX">AEROX</option>
                        <option value="Vario">Vario</option>
                        <option value="Vesmet">Vesmet</option>
                        <option value="Scoopy">Scoopy</option>

                    </select>
                </td>
            </tr>

            <tr>
                <td>Member</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="Member" id="Member">
                </td>
            </tr>
                <tr>
                    <td><button type="submit" name="submit">submit</button></td>
                </tr>
        </table>
        </div>
        <div class="kotak1">
    </form>
    
    
<?php 

class RentalMotor {
    protected $Motor;
    private $AEROX,
            $Vario,
            $Vesmet,
            $Scoopy;
    public  $namaLangganan,
            $waktuPinjaman,
            $jenisMotor;

    function __construct() {
        $this->Motor = 0.1;
    }

    public function setHarga($Motor1, $Motor2, $Motor3, $Motor4){
        $this->AEROX = $Motor1;
        $this->Vario = $Motor2;
        $this->Vesmet = $Motor3;
        $this->Scoopy = $Motor4;
    }

    public function getHarga() {
        $data["AEROX"] = $this->AEROX;
        $data["Vario"] = $this->Vario;
        $data["Vesmet"] = $this->Vesmet;
        $data["Scoopy"] = $this->Scoopy;
        return $data;
    }
}
    class Pinjam extends RentalMotor {
        public function hargaPinjam() {
            $dataharga = $this->getHarga();
            $hargapinjam = $this->waktuPinjaman * $dataharga
            [$this->jenisMotor];
            
            if ($this->Member) {
                $hargapinjam *= 0.95;
            };
            return $hargapinjam;
        }
    

    public function cetakPeminjaman() {
        echo "<center>";
        echo
        "------------------------------------------------------------" .
        "<br>";
        if ($this->Member) {
            echo "Anda berstatus sebagai Member mendapatkan "."<br>";
            echo "diskon sebesar 5%"."<br>";
        }
        echo "jenis motor yang dirental adalah " .
        $this->jenisMotor . "<br>";
        echo "selama "  . $this->waktuPinjaman . " hari
        <br>";
        echo "besar yang harus dibayarkan adalah Rp. " .
        number_format($this->hargaPinjam(), 0, '', '.') .
        "<br>";
        echo 
        "------------------------------------------------------------";
        echo "</center>";
    }
}
?>

<?php

$proses = new Pinjam;
$proses->setHarga(120000, 260000, 150000, 200000, 250000);
if (isset($_POST['submit'])) {
    $proses->waktuPinjaman = $_POST['waktuPinjaman'];
    $proses->jenisMotor = $_POST['jenisMotor'];
    $proses->namaLangganan = $_POST['namaLangganan'];
    $proses->Member = isset($_POST['Member']);


    $proses->cetakPeminjaman();
}
?>
</div>
</body>
</html>

