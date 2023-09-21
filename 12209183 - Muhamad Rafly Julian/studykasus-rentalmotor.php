<?php 

class RentalMotor {
    protected $motor;
    private $Beat,
            $Vario,
            $Vespa,
            $Harley;
    public  $nama,
            $waktu,
            $jenis;

    function __construct() {
        $this->motor = 0.1;
    }

    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4){
        $this->Beat = $tipe1;
        $this->Vario = $tipe2;
        $this->Vespa = $tipe3;
        $this->Harley = $tipe4;
    }

    public function getHarga() {
        $data["Beat"] = $this->Beat;
        $data["Vario"] = $this->Vario;
        $data["Vespa"] = $this->Vespa;
        $data["Harley"] = $this->Harley;
        return $data;
    }
}
    class Pinjam extends RentalMotor {
        public function hargaPinjam() {
            $dataharga = $this->getHarga();
            $hargapinjam = $this->waktu * $dataharga
            [$this->jenis];
            
            if ($this->Member) {
                $hargapinjam *= 0.95;
            };
            return $hargapinjam;
        }
    

    public function cetakPeminjaman() {
        echo "<center>";
        echo
        "---------------------------------------------" .
        "<br>";
        echo "Anda meminjam motor bertipe " .
        $this->jenis . "<br>";
        echo "Dengan waktu : "  . $this->waktu . " hari
        <br>";
        if ($this->Member) {
            echo "Anda adalah member, Anda mendapatkan diskon 5%.<br>";
        }
        echo "Total yang harus anda bayar Rp. " .
        number_format($this->hargaPinjam(), 0, '', '.') .
        "<br>";
        echo 
        "---------------------------------------------";
        echo "</center>";
    }
}
?>

<?php

$proses = new Pinjam;
$proses->setHarga(50000, 100000, 150000, 200000, 250000);
if (isset($_POST['submit'])) {
    $proses->waktu = $_POST['waktu'];
    $proses->jenis = $_POST['jenis'];
    $proses->nama = $_POST['nama'];
    $proses->Member = isset($_POST['Member']);


    $proses->cetakPeminjaman();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>
<body>
<form action="" method="post">
        <table>
            <tr>
                <td>Nama Pelanggan</td>
                    <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>

            <tr>
                <td>Lama Waktu Rental (per hari)</td>
                    <td>:</td>
                <td>
                    <input type="number" name="waktu" id="waktu">
                </td>
            </tr>
            
            <tr>
                <td>Jenis Motor</td>
                    <td>:</td>

                <td>
                    <select name="jenis" id="jenis_motor">
                        <option value="Beat">Beat</option>
                        <option value="Vario">Vario</option>
                        <option value="Vespa">Vespa</option>
                        <option value="Harley">Harley</option>

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
                    <td><button type="submit" name="submit">Pinjam</button></td>
                </tr>
        </table>
    </form>
</body>
</html>