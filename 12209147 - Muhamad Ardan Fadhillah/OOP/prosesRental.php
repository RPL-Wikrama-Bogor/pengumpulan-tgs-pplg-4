<?php
class Motor {
    public $namaPelanggan ;
    protected $pajak,$member=['Ihsan','Arfan','Asari','Asep'];
    private $honda,
            $harley,
            $ducati,
            $bmw;
    public $jumlah;
    public $jenis;

    function __construct() {
        $this->pajak = 15000;
    }

    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4) {
        $this->honda = $tipe1;
        $this->harley = $tipe2;
        $this->ducati = $tipe3;
        $this->bmw = $tipe4;
    }

    public function getHarga() {
        $data["matic"] = $this->honda;
        $data["kopling"] = $this->harley;
        $data["sport"] = $this->ducati;
        $data["matic"] = $this->bmw;
        return $data;
    }
    
}

class Beli extends Motor {

    public function hargaMember(){
        $dataHarga = $this->getHarga();
        $hargaBeli = $dataHarga[$this->jenis];
        $hargaTotal = $hargaBeli * $this->jumlah;       
        if(in_array($this->namaPelanggan,$this->member)){
            $hargaDiskon =
            $hargaTotal * 0.05;
            $hargaMember =$hargaTotal - $hargaDiskon + $this->pajak;
            return $hargaMember;    
        }
        else{
            $hargaBayar = $hargaTotal +
            $this->pajak;
            return $hargaBayar;
        }
    }
    public function cetakPembelian() {  
        echo "<center>";
        echo "---------------------- Struk Hasil -----------------------" . "<br>";
        echo "Nama Pelanggan : " . $this->namaPelanggan . "<br>";
        echo "Anda meminjam motor dengan tipe : " . $this->jenis . "<br>";
        echo "Dengan Lama : " . $this->jumlah . " Hari <br>";
        echo "Dengan Harga Perhari : " .number_format($this->getHarga()[$this->jenis], 0, '', '.').  " Hari <br>";
        echo "Total yang harus anda bayar Rp. " . number_format($this->hargaMember(), 0, '', '.') . "<br>";
        echo "------------------------------------------------------------";
        echo "</center>";
    }
}
?>