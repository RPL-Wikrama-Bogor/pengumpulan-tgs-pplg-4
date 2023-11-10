<?php
class DataBenshin {
    private $HargaSSuper;
    private $HargaSVPower;
    private $HargaSVPowerDiesel;
    private $HargaSVPowerNitro;

    public $jenisYangDipilih;
    public $totalLiter;

    protected $totalPembayaran;

   public function setHarga($valSSuper, $valSVPower, $valSVPowerDiesel, $valSVPowerNitro){
    $this->HargaSSuper = $valSSuper;
    $this->HargaSVPower = $valSVPower;
    $this->HargaSVPowerDiesel = $valSVPowerDiesel;
    $this->HargaSVPowerNitro = $valSVPowerNitro;
   }

   public function getHarga() {
    $dataShell["SSuper"] = $this->HargaSSuper;
    $dataShell["SVPower"] = $this->HargaSVPower;
    $dataShell["SVPowerDiesel"] = $this->HargaSVPowerDiesel;
    $dataShell["SVPowerNitro"] = $this->HargaSVPowerNitro;
    return $dataShell;
   }
}
class Pembelian extends DataBenshin {
    public function totalHarga() {
        $this->totalPembayaran = $this->getHarga()
        [$this->jenisYangDipilih] *
        (int)$this->totalLiter;  
    }

    public function cetakBukti() {
        echo"------------------------------------------------";
        echo "<br/>";
        echo "Jenis Bahan Bakar: " .
        $this->jenisYangDipilih;
        echo "<br/>";
        echo "Total Liter: " . $this->totalLiter;
        echo "<br/>";
        echo "Harga Bayar: " . number_format($this->totalPembayaran, 0, ',', '.');
        echo "<br/>";
        echo "-----------------------------------------------";
    }

}
?>