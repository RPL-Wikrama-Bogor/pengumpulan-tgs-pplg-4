<?php
class Motor {

    public $Member = ['Ujang', 'Budi', 'Deva', 'Rangga', 'Nana', 'Dewi'];

    public $Motor = [
        [
            'nama' => 'Scoopy',
            'harga' => 90420
        ],
        [
            'nama' => 'Vario',
            'harga' => 101300
        ],
        [
            'nama' => 'Aerox',
            'harga' => 103100
        ],
        [
            'nama' => 'Mio',
            'harga' => 80200
        ],
        [
            'nama' => 'XSR',
            'harga' => 110700
        ]
    ];

    public function dropdown() {
        $options = '';

        foreach ($this->Motor as $station) {
            $options .= '<option value="' . $station['nama'] . '">' . $station['nama'] . '</option>';
        }

        return $options;
    }
}

class Rental extends Motor {
    public $hari;
    public $pelanggan;
    public $tipe;
    public $total;

    public function __construct($pelanggan,$hari, $tipe) {
        $this->tipe = $tipe;
        $this->hari = $hari;
        $this->pelanggan = $pelanggan;
    }

    public function isMember($namaPelanggan) {
        return in_array($namaPelanggan, $this->Member);
    }

    public function totalHarga() {
        foreach ($this->Motor as $station) {
            if ($station['nama'] === $this->tipe) {
                $hargaAwal = $station['harga'] * $this->hari;
                $diskon = $this->isMember($this->pelanggan) ? 10000 : 0;
                $this->total = $hargaAwal - $diskon;
                return $this->total;
            }
        }
    }

    public function printNota() {
        echo "<center>----------------------------------------------------------------</center>";
        echo "<br>";
        echo "<center> Atas nama: " . $this->pelanggan ."</center>";
        echo "<br>";
        echo "<center> Anda merental Motor dengan tipe: " . $this->tipe ."</center>";
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
        <input type="text" id="pelanggan" name="pelanggan" min="1" required>
        <br>
        <br>
        <label for="dropdown">Pilih motor:</label>
        <select id="dropdown" name="dropdown" required>
            <?php $s = new Motor(); echo $s->dropdown(); ?>
        </select>
        <br>
        <br>
        <label for="Hari">Hari: </label>
        <input type="number" id="hari" name="hari" min="1" required>
        <br>
        <br>
        <input type="submit" value="Bayar" name="terbayar">
    </form>

    <?php
    if (isset($_POST['terbayar'])) {
        $banyak = $_POST['hari'];
        $pilihan = $_POST['dropdown'];
        $nama = $_POST['pelanggan'];
        $bayar = new Rental($nama, $banyak, $pilihan);
        $total = $bayar->totalHarga();
        $bayar->printNota();
    }
    ?>
    </body>
    </html>