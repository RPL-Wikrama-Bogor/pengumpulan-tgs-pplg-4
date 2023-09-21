<?php
//sediakan kotak pembungkus yg akan digunakan (sesuai dengan fitur)
class DataBahanBakar {
    private $HargaSSuper;
    private $HargaSVPower;
    private $HargaSVPowerDiesel;
    private $HargaSVPowerNitro;
    
    public $jenisYangDipilih;
    public $totalLiter;

    protected $totalPembayaran;
    protected $ppn = 0.10;
   public function setHarga($valSSuper, $valSVPower, $valSVPowerDiesel, $valSVPowerNitro){
    //mengisi nilai ke attribute, nilai nantinya diisi dari luar class melalui fungsi setter ini
    //nilai dari luar diambil kedalam class melalui parameter (variable yg ada di dalam kurung), nilai dari luar tersebut disimpan ke attribute yg sudah tersedia ($this->)
    //penamaan parameter bebas asal urutan pengisiannya sesuai
    $this->HargaSSuper = $valSSuper;
    $this->HargaSVPower = $valSVPower;
    $this->HargaSVPowerDiesel = $valSVPowerDiesel;
    $this->HargaSVPowerNitro = $valSVPowerNitro;
   }

   public function getHarga() {
    // setelah nilai dr attribute di simpan, fungsi getter akan mengembalikan/menampilkannya untuk digunakan ditempat lain, karena data yg akan dikirimkan lebih dari satu, maka data2 tersebut disatukan terlebih dahulu
    $semuaDataSolar["SSuper"] = $this->HargaSSuper;
    $semuaDataSolar["SVPower"] = $this->HargaSVPower;
    $semuaDataSolar["SVPowerDiesel"] = $this->HargaSVPowerDiesel;
    $semuaDataSolar["SVPowerNitro"] = $this->HargaSVPowerNitro;
    return $semuaDataSolar;
   }
}
class Pembelian extends DataBahanBakar {
    public function totalHarga() {
        $hargaBahanBakar = $this->getHarga()[$this->jenisYangDipilih];
        $totalHargaTanpaPPN = $hargaBahanBakar * $this->totalLiter;
        $totalHargaDenganPPN = $totalHargaTanpaPPN + ($totalHargaTanpaPPN * $this->ppn);
        $this->totalPembayaran = $totalHargaDenganPPN;
    }

    public function cetakBukti() {
        echo "------------------------------------------------";
        echo "<br/>";
        echo "Jenis Bahan Bakar: " . $this->jenisYangDipilih;
        echo "<br/>";
        echo "Total Liter: " . $this->totalLiter;
        echo "<br/>";
        echo "Harga Bayar: " . number_format($this->totalPembayaran, 0, ',', '.');
        echo "<br/>";
        echo "-----------------------------------------------";
    }
}

?>