<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'db_rental_motor';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

class Motor {
    public $Member = ['Ujang', 'Budi', 'Deva', 'Rangga', 'Nana', 'Dewi'];
    public $Motor = [];
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;

        $sql = "SELECT tipe, harga FROM motor";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $this->Motor[] = [
                    'tipe' => $row['tipe'],
                    'harga' => $row['harga']
                ];
            }
        } else {
            echo "No records found.";
        }
    }

    public function dropdown() {
        $options = '';

        foreach ($this->Motor as $station) {
            $options .= '<option value="' . $station['tipe'] . '">' . $station['tipe'] . '</option>';
        }

        return $options;
    }

    public function getHargaByTipe($tipe) {
        foreach ($this->Motor as $station) {
            if ($station['tipe'] === $tipe) {
                return $station['harga'];
            }
        }
        return 0;
    }
}
class Rental extends Motor {
    public $hari;
    public $pelanggan;
    public $tipe;
    public $total;
    public $perHari;
    private $conn;

    public function __construct($conn, $pelanggan, $hari, $tipe) {
        parent::__construct($conn);
        $this->tipe = $tipe;
        $this->hari = $hari;
        $this->pelanggan = $pelanggan;
    }

    public function isMember($namaPelanggan) {
        return in_array($namaPelanggan, $this->Member);
    }

    public function harga($tipeMotor) {
        $harga = $this->getHargaByTipe($tipeMotor);
        $this->perHari = $harga;
        return $harga;
    }

    public function totalHarga() {
        $hargaAwal = $this->getHargaByTipe($this->tipe) * $this->hari;
        $diskon = $this->isMember($this->pelanggan) ? 10000 : 0;
        $this->total = $hargaAwal - $diskon;
        return $this->total;
    }

    public function printNota() {
        echo "<center>----------------------------------------------------------------</center>";
        echo "<br>";
        echo "<center> Atas nama: " . $this->pelanggan ."</center>";
        echo "<br>";
        echo "<center> Anda merental Motor dengan tipe: " . $this->tipe ."</center>";

        $harga = $this->harga($this->tipe);
        echo "<br>";
        echo "<center> Harga per-hari nya: " . $harga ."</center>";

        echo "<br>";
        echo "<center> Dengan durasi: " . $this->hari . " Hari" . "</center>";
        echo "<br>";
        echo "<center> Total yang harus dibayar: " . $this->total * 1.1 . "</center>";
        echo "<br>";
        echo "<center>----------------------------------------------------------------</center>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental</title>
</head>
<body>
<form action="" method="POST">
    <label for="pelanggan">Pelanggan: </label>
    <input type="text" id="pelanggan" name="pelanggan" min="1">
    <br>
    <br>
    <label for="dropdown">Pilih motor:</label>
    <select id="dropdown" name="dropdown">
        <?php $s = new Motor($conn); echo $s->dropdown(); ?>
    </select>
    <br>
    <br>
    <label for="Hari">Hari: </label>
    <input type="number" id="hari" name="hari" min="1">
    <br>
    <br>
    <input type="submit" value="Bayar" name="terbayar">
    <br>
    <br>
    <br>
    <br>
    <form action="" method="POST">
        <label for="updateTipe">Tipe Motor:</label>
        <select id="updateTipe" name="updateTipe">
            <?php $s = new Motor($conn); echo $s->dropdown(); ?>
        </select>
        <br>
        <br>
        <label for="newPrice">Harga Baru:</label>
        <input type="number" id="newPrice" name="newPrice" min="1">
        <br>
        <br>
        <input type="submit" value="Update Harga" name="updateHarga">
    </form>
</form>

<?php
if (isset($_POST['terbayar'])) {
    $banyak = $_POST['hari'];
    $pilihan = $_POST['dropdown'];
    $nama = $_POST['pelanggan'];
    $bayar = new Rental($conn, $nama, $banyak, $pilihan);
    $total = $bayar->totalHarga();
    $harga = $bayar->harga($pilihan);
    $bayar->printNota();
}

if (isset($_POST['updateHarga'])) {
    $tipeToUpdate = $_POST['updateTipe'];
    $newPrice = $_POST['newPrice'];

    $updateSql = "UPDATE motor SET harga = $newPrice WHERE tipe = '$tipeToUpdate'";
    if ($conn->query($updateSql) === TRUE) {
        echo "Harga untuk tipe $tipeToUpdate berhasil diperbarui.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
</body>
</html>
