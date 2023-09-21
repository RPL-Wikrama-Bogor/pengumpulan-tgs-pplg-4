
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        form {
            margin: 0 auto;
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        table {
            width: 100%;
        }
        table td {
            padding: 8px;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
<body>

<h1>RENTALIN</h1>

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
                        <option value="Beat">Beat</option>
                        <option value="Vario">Vario</option>
                        <option value="Vespa">Vespa</option>
                        <option value="Nmax">Nmax</option>

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
                    <td colspan="3" style="text-align:center;">
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
    private $Beat,
            $Vario,
            $Vespa,
            $Harley;
    public  $nama,
            $waktu,
            $jenis,
            $Member;

    function __construct() {
        $this->motor = 0.1;
    }

    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4){
        $this->Beat = $tipe1;
        $this->Vario = $tipe2;
        $this->Vespa = $tipe3;
        $this->Nmax = $tipe4;
    }

    public function getHarga() {
        $data["Beat"] = $this->Beat;
        $data["Vario"] = $this->Vario;
        $data["Vespa"] = $this->Vespa;
        $data["Nmax"] = $this->Nmax;
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
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Hasil Peminjaman</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                }
                .result {
                    text-align: center;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    padding: 20px;
                    max-width: 400px;
                    margin: 0 auto;
                }
            </style>
        </head>
        <body>
            <div class="result">
                <h1>Hasil Peminjaman</h1>
                <p><strong>' . $this->nama . '</strong> meminjam motor bertipe <strong>' . $this->jenis . '</strong></p>
                <p>Dengan waktu: ' . $this->waktu . ' hari</p>';

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
$proses->setHarga(600000, 1500000, 1800000, 190000);
if (isset($_POST['submit'])) {
    $proses->waktu = $_POST['waktu'];
    $proses->jenis = $_POST['jenis'];
    $proses->nama = $_POST['nama'];
    $proses->Member = isset($_POST['Member']);

    $proses->cetakPeminjaman();
}
?>
