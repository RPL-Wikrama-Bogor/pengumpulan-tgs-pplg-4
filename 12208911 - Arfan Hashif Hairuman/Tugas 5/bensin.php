<?php
class Shell
{
    public $Shell = [
        [
            'nama' => 'Shell Super',
            'harga' => 15420
        ],
        [
            'nama' => 'Shell V-Power',
            'harga' => 16130
        ],
        [
            'nama' => 'Shell V-Power Diesel',
            'harga' => 18310
        ],
        [
            'nama' => 'Shell V-Power Nitro',
            'harga' => 16510
        ]
    ];

    public function dropdown() {
        $options = '';

        foreach ($this->Shell as $station) {
            $options .= '<option value="' . $station['nama'] . '">' . $station['nama'] . '</option>';
        }

        return $options;
    }
}

class Beli extends Shell {
    public $liter;
    public $tipe;
    public $total;

    public function __construct($liter, $tipe) {
        $this->tipe = $tipe;
        $this->liter = $liter;
    }

    public function totalBensin() {
        foreach ($this->Shell as $station) {
            if ($station['nama'] === $this->tipe) {
                $this->total = $station['harga'] * $this->liter;
                return $this->total;
            }
        }
    }

    public function printNota() {
        echo "<center>----------------------------------------------------------------</center>";
        echo "<br>";
        echo "<center> Anda membeli bahan bakar dengan tipe: " . $this->tipe ."</center>";
        echo "<br>";
        echo "<center> Dengan Jumlah: " . $this->liter . " Liter" . "</center>";
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
    <title>Shell</title>
</head>
<body>
<form action="" method="POST">
    <label for="liter">Liter: </label>
    <input type="number" id="liter" name="liter">
    <br>
    <br>
    <label for="dropdown">Pilih Varian:</label>
    <select id="dropdown" name="dropdown">
        <?php $s = new Shell(); echo $s->dropdown(); ?>
    </select>
    <input type="submit" value="Bayar" name="terbayar">
</form>

<?php
if (isset($_POST['terbayar'])) {
    $banyak = $_POST['liter'];
    $pilihan = $_POST['dropdown'];
    $bayar = new Beli($banyak, $pilihan);
    $total = $bayar->totalBensin();
    $bayar->printNota();
}
?>
</body>
</html>
