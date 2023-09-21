<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
    <title>Form Beli Bensin</title>
</head>
<body>
    <h1>Form Beli Bensin</h1>
    <form method="post">
        <label for="jenis_bensin">Jenis Bensin:</label>
        <select id="jenis_bensin" name="jenis_bensin">
            <option value="Shell Super">Shell Super</option>
            <option value="Shell V-Power">Shell V-Power</option>
            <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
        </select><br>

        <label for="jumlah_liter">Jumlah Liter yang Dibeli:</label>
        <input type="number" id="jumlah_liter" name="jumlah_liter" required><br>

        <input type="submit" value="Beli">
    </form>
<center>
<?php
class Shell {
    protected $jenis;
    protected $harga;
    protected $ppn;
    
    public function __construct($jenis, $harga, $ppn) {
        $this->jenis = $jenis;
        $this->harga = $harga;
        $this->ppn = $ppn;
    }
    
    public function getJenis() {
        return $this->jenis;
    }
    
    public function getHarga() {
        return $this->harga;
    }
    
    public function getPpn() {
        return $this->ppn;
    }
    
    public function totalHarga($jumlah) {
        $subtotal = $this->harga * $jumlah;
        $ppnAmount = $subtotal * ($this->ppn / 100);
        $total = $subtotal + $ppnAmount;
        return $total;
    }
}

class Beli extends Shell {
    private $jumlah;
    
    public function __construct($jenis, $harga, $ppn, $jumlah) {
        parent::__construct($jenis, $harga, $ppn);
        $this->jumlah = $jumlah;
    }
    
    public function buktiTransaksi() {
        $subtotal = $this->harga * $this->jumlah;
        $ppnAmount = $subtotal * ($this->ppn / 100);
        $total = $subtotal + $ppnAmount;
        
        echo "Jenis Bensin: " . $this->jenis . "<br>";
        echo "Harga per Liter: Rp. " . number_format($this->harga, 2, ',', '.') . "<br>";
        echo "Jumlah Liter yang Dibeli: " . $this->jumlah . " liter<br>";
        echo "Subtotal: Rp. " . number_format($subtotal, 2, ',', '.') . "<br>";
        echo "PPN ({$this->ppn}%): Rp. " . number_format($ppnAmount, 2, ',', '.') . "<br>";
        echo "Total Harga: Rp. " . number_format($total, 2, ',', '.') . "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Data harga dan PPN
    $hargaShellSuper = 15420.00;
    $hargaShellVPower = 16130.00;
    $hargaShellVPowerDiesel = 18310.00;
    $hargaShellVPowerNitro = 16510.00;
    $ppn = 10;

    // Membaca input dari pengguna
    $jenisBensin = $_POST["jenis_bensin"];
    $jumlahLiter = $_POST["jumlah_liter"];

    // Membuat objek Shell berdasarkan jenis bensin yang dipilih
    $bensin = null;
    switch ($jenisBensin) {
        case "Shell Super":
            $bensin = new Beli("Shell Super", $hargaShellSuper, $ppn, $jumlahLiter);
            break;
        case "Shell V-Power":
            $bensin = new Beli("Shell V-Power", $hargaShellVPower, $ppn, $jumlahLiter);
            break;
        case "Shell V-Power Diesel":
            $bensin = new Beli("Shell V-Power Diesel", $hargaShellVPowerDiesel, $ppn, $jumlahLiter);
            break;
        case "Shell V-Power Nitro":
            $bensin = new Beli("Shell V-Power Nitro", $hargaShellVPowerNitro, $ppn, $jumlahLiter);
            break;
    }

    // Menampilkan bukti transaksi
    if ($bensin) {
        echo "<div class='transaction-result'>";
        echo "<h2>Bukti Transaksi:</h2>";
        $bensin->buktiTransaksi();
        echo "</div>";
    } else {
        echo "Jenis bensin tidak valid.";
    }
}    
?>

</body>
</html>
