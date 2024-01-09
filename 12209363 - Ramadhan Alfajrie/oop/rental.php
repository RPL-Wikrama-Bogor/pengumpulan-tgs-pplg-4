<!DOCTYPE html>
<html>
<head>
    <title>Rental Motor</title>
</head>
<body>
<h1>Rental Motor</h1>
<form method="POST" action="">
    <label for="nama">Nama Pembeli:</label>
    <input type="text" name="nama" id="nama" required><br>

    <label for="jenis_motor">Jenis Motor:</label>
    <select name="jenis_motor" id="jenis_motor">
        <option value="scoopy">scoopy</option>
        <option value="beat">beat</option>
        <option value="mio">mio</option>
    </select><br>

    <label for="lama_sewa">Lama Sewa (hari):</label>
    <input type="number" name="lama_sewa" id="lama_sewa" required><br>

    <input type="submit" value="Proses">
</form>

<?php
class Motor {
    private $jenis;
    private $hargaPerHari;

    public function __construct($jenis, $hargaPerHari) {
        $this->jenis = $jenis;
        $this->hargaPerHari = $hargaPerHari;
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function hitungBiaya($lamaSewa) {
        $diskon = 0;
        if ($lamaSewa > 2) {
            $diskon = 0.05; // Diskon 5% jika peminjaman lebih dari 2 hari
        }

        $biaya = $this->hargaPerHari * $lamaSewa;
        $biaya -= $biaya * $diskon;

        return $biaya;
    }
}

class PenyewaanMotor {
    private $nama;
    private $motor;
    private $lamaSewa;

    public function __construct($nama, Motor $motor, $lamaSewa) {
        $this->nama = $nama;
        $this->motor = $motor;
        $this->lamaSewa = $lamaSewa;
    }

    public function tampilkanInformasiRental() {
        $biaya = $this->motor->hitungBiaya($this->lamaSewa);

        echo "<h2>Informasi Rental Motor</h2>";
        echo "<p>Nama Pembeli: {$this->nama}</p>";
        echo "<p>Jenis Motor: {$this->motor->getJenis()}</p>";
        echo "<p>Lama Sewa: {$this->lamaSewa} hari</p>";
        echo "<p>Total Biaya: Rp " . number_format($biaya, 0, ',', '.') . "</p>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $jenis_motor = $_POST["jenis_motor"];
    $lama_sewa = (int)$_POST["lama_sewa"];

    // Menentukan harga berdasarkan jenis motor
    $harga_motor = 0;
    switch ($jenis_motor) {
        case 'scoopy':
            $harga_motor = 150000;
            break;
        case 'beat':
            $harga_motor = 120000;
            break;
        case 'mio':
            $harga_motor = 100000;
            break;
        default:
            $harga_motor = 0; // Harga default jika jenis tidak dikenali
            break;
    }

    $motor = new Motor($jenis_motor, $harga_motor);
    $penyewaanMotor = new PenyewaanMotor($nama, $motor, $lama_sewa);
    $penyewaanMotor->tampilkanInformasiRental();
}
?>
</body>
</html>