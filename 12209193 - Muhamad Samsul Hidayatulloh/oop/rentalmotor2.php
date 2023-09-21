<?php
class RentalMotor {
    private $namaPelanggan;
    private $jenisMotor;
    private $lamaRental;
    private $isMember;

    public function __construct() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->namaPelanggan = $_POST['namaPelanggan'];
            $this->jenisMotor = $_POST['jenisMotor'];
            $this->lamaRental = (int)$_POST['lamaRental'];
            $this->isMember = isset($_POST['member']);
        }
    }

    public function hitungTotalBayar() {
        // Harga motor per jenis
        $hargaMotor = [
            "Vario" => 100000,
            "Aerok" => 150000,
            "Scoopy" => 80000,
            "Beat" => 90000
        ];

        // Menghitung total bayar
        $totalBayar = $hargaMotor[$this->jenisMotor] * $this->lamaRental;

        // Diskon 5% jika pelanggan adalah member
        if ($this->isMember) {
            $totalBayar *= 0.95;
            return [
                'namaPelanggan' => "Nama Member: " . $this->namaPelanggan,
                'statusMember' => "Status Member: Member",
                'totalBayar' => "Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.')
            ];
        } else {
            return [
                'namaPelanggan' => "Nama Pelanggan: " . $this->namaPelanggan,
                'statusMember' => "Status Member: Bukan Member",
                'totalBayar' => "Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.')
            ];
        }
    }
}

$rentalMotor = new RentalMotor();
?>
<!DOCTYPE html>
<html>
<head>
    <center>
    <title>Form Rental Motor</title>
</head>
<body>
    <h1>Form Rental Motor</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="namaPelanggan">Nama Pelanggan:</label>
        <input type="text" id="namaPelanggan" name="namaPelanggan" required><br><br>

        <label for="jenisMotor">Jenis Motor:</label>
        <select id="jenisMotor" name="jenisMotor">
            <option value="Vario">Vario</option>
            <option value="Aerok">Aerok</option>
            <option value="Scoopy">Scoopy</option>
            <option value="Beat">Beat</option>
        </select><br><br>

        <label for="lamaRental">Lama Waktu Rental (hari):</label>
        <input type="number" id="lamaRental" name="lamaRental" required><br><br>

        <input type="checkbox" id="member" name="member"> Member<br><br>

        <input type="submit" name="hitungTotal" value="Hitung Total Bayar">
    </form>

    <h2>Output:</h2>
    <?php
    if (isset($_POST['hitungTotal'])) {
        $hasilRental = $rentalMotor->hitungTotalBayar();
        echo $hasilRental['namaPelanggan'] . "<br>" . $hasilRental['statusMember'] . "<br>" . $hasilRental['totalBayar'];
    }
    ?>
    </center>
</body>
</html>
