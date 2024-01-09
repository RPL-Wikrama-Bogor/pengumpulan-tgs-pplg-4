
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=tabl, initial-scale=1.0">
    <title> Motor</title>
</head>
<body>
    <h2>RENTAL MOTOR</h2>
    <form action="" method="post">
    <table>
        <tr>
            <td>Nama Pelanggan</td>
            <td>:</td>
            <td>
                <input type="teks" name="nama" id="$nama">
            </td>
        </tr>

        <tr>
            <td>Lama Waktu dirental (per hari)</td>
            <td>:</td>
            <td>
                <input type="teks" name="waktu" id="waktu">
            </td>
        </tr>

        <tr>
            <td>Jenis Motor</td>
            <td>:</td>
            <td>
                <select name="jenis" id="jemis_motor">
                    <option value="Vario">Vario</option>
                    <option value="Yamaha">Yamaha</option>
                    <option value="Beat">Beat</option>
                    <option value="Nmax">Nmax </option>
                </select>
            </td>
        </tr>
        <tr>

            <td></td>
            <td></td>
            <td><button type="submit" name="submit">submit</button></td>
            
        </tr>
    </table>
    </form>
 

</body>
</html>

<?php
    class motor {
        protected $diskon;
        private $Vario,
                $Yamaha,
                $Beat,
                $Nmax;
        
        private $nama = ['Frieska','Farisi','Rony'];
        public $hari ;
        public $pelanggan ;
        public $jenis;
            public $harga;
      
        function _construct() {
            $this->diskon = 0.05;
        }
        
        public function getnama() {
            return $this->nama;
        }

        public function setpelanggan($pelanggan) {
            $this->pelanggan= $pelanggan;
        }

        public function getpelanggan(){
            return $this->pelanggan;
        }

        public function setharga($tipe1, $tipe2, $tipe3, $tipe4) {

            $this->Vario = $tipe1;
            $this->Yamaha = $tipe2;
            $this->Beat = $tipe3;
            $this->Nmax = $tipe4;
        }

        public function getHarga() {
            $data["Vario"] = $this->Vario;
            $data["Yamaha"] = $this->Yamaha;
            $data["Beat"] = $this->Beat;
            $data["Nmax"] = $this->Nmax;
            return $data;
        }
    }
    
class Beli extends motor {
    public function price(){
        $dataHarga = $this->getHarga();
        $price = $this->hari * $dataHarga[$this->jenis];
        $hargaBayar = $price;
        return $hargaBayar;
    }
    public function hargaDiskon() {
        $dataharga = $this->getHarga();
        $hargabayar = $this->hari * $dataharga[$this->jenis];
        $diskon = $hargabayar * $this->diskon;
        $hargaDiskon = $hargabayar - $diskon;
        return $hargaDiskon;
    }


public function cetakPembelian() {
    $dataharga= $this->getHarga();
    if (in_array($this->getpelanggan(), $this->getnama())) {
        echo "------------------------------------- <br>";
        echo "Nama Pelanggan: " .ucfirst($this->getpelanggan()) . "<br>";
        echo "Jenis Motor Yang dirental: " .ucfirst($this->jenis ) . "<br>";
        echo "Harga rental Per Hari: Rp. " .number_format($dataharga[$this->jenis], 0, ',', '.')  . "<br>";
        echo "Lama Waktu yang dirental (per hari): " .$this->hari . "<br>";
        echo "Berstatus sebagai member dan mendapatkan Diskon Sebesar 5% <br>";
        echo "Besar Harga yang harus dibayar: Rp. " . number_format($this->hargaDiskon(), 0, ',', '.') . "<br>";
        echo "------------------------------------- <br>";
} else {
    echo "------------------------------------- <br>";
    echo "Nama Pelanggan: " .ucfirst($this->getpelanggan()) . "<br>";
    echo "Jenis Motor Yang dirental: " .ucfirst($this->jenis ) . "<br>";
    echo "Harga rental Per Hari: Rp. " .number_format($dataharga[$this->jenis], 0, ',', '.')  . "<br>";
    echo "Lama Waktu yang dirental (per hari): " .$this->hari . "<br>";
    echo "Tidak mendapatkan diskon karena bukan member <br>";
    echo "Besar Harga yang harus dibayar: Rp. " . number_format($this->price(), 0, ',', '.') . "<br>";
    echo "------------------------------------- <br>";
}

} 
}
?>
   <?php
  $proses = new Beli;
  $proses->setharga(50000000, 15000000, 87000000, 17500000);
  if (isset($_POST['submit'])) {
      $proses->hari = $_POST['waktu'];
      $proses-> jenis = $_POST['jenis'];
      $proses->pelanggan = $_POST ['nama'];
  
      $proses->cetakPembelian();
  }
?>