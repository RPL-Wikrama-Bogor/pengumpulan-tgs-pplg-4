<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>
<body>

<center>
<h1>rental</h1>

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
                    <input type="number" name="waktu" id="waktu" required>
                </td>
            </tr>
            
            <tr>
                <td>Jenis Motor</td>
                    <td>:</td>

                <td>
                    <select name="jenis" id="jenis_motor">
                        <option value="astrea">astrea</option>
                        <option value="supra">supra</option>
                        <option value="legenda">legenda</option>
                        <option value="karisma">karisma</option>

                    </select>
                </td>
            <tr>

            <tr>
                <td>Member</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="Member" id="Member">
                </td>
            </tr>

                <tr>
                    <td>
                        <button type="submit" name="submit">Pinjam</button>
                    </td>
                </tr>
        </table>
    </form>
</body>
</html>

<?php 

class RentalMotor {
    protected $motor;
    private $astrea,
            $supra,
            $legenda,
            $karisma;
    public  $nama,
            $waktu,
            $jenis,
            $Member;

    function __construct() {
        $this->motor = 0.1;
    }

    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4){
        $this->astrea = $tipe1;
        $this->supra = $tipe2;
        $this->legenda = $tipe3;
        $this->karisma = $tipe4;
    }

    public function getHarga() {
        $data["astrea"] = $this->astrea;
        $data["supra"] = $this->supra;
        $data["legenda"] = $this->legenda;
        $data["karisma"] = $this->karisma;
        return $data;
    }
}
    class Pinjam extends RentalMotor {
        public function hargaPinjam() {
            $dataharga = $this->getHarga();
            $hargapinjam = $this->waktu * $dataharga[$this->jenis];
        
            
            if ($this->Member) {
                $hargapinjam *= 0.95;
            }

            return $hargapinjam;
        }
    

        public function cetakPeminjaman() {
            echo "<center>";
            echo $this->nama . " meminjam motor bertipe " .
            $this->jenis . "<br>";
            echo "Dengan waktu : "  . $this->waktu . " hari
            <br>";

        if ($this->Member) {
            echo "Anda adalah member, Anda mendapatkan diskon 5%.<br>";
        }
        
        echo "Total yang harus anda bayar Rp. " .
        number_format($this->hargaPinjam(), 0, '', '.') .
        "<br>";
        echo "</center>";
    }
}
?>

<?php

$proses = new Pinjam;
$proses->setHarga(30000, 15000, 18000, 19000);
if (isset($_POST['submit'])) {
    $proses->waktu = $_POST['waktu'];
    $proses->jenis = $_POST['jenis'];
    $proses->nama = $_POST['nama'];
    $proses->Member = isset($_POST['Member']);

    $proses->cetakPeminjaman();
}
?>