<?php

class Shell{
    public $super;
    public $vPower;
    public $vPowerDiesel;
    public $vPowerDitro;
    public $hargaSuper;
    public $hargavPower;
    public $hargavPowerDiesel;
    public $hargavPowerDitro;
    public $ppn;
    public $jumlah;

    public function __construct()
    {
        $this->hargaSuper = 15420;
        $this->hargavPower = 16130;
        $this->hargavPowerDiesel = 18310;
        $this->hargavPowerDitro= 16510;
        $this->ppn= 0.1;
    }
}
class Beli extends Shell{
    public function getJumlah($jumlah){
        $this->jumlah = $jumlah;
    }
    public function hitungTotal() {
        if ($this->super) {
            $jenis = "Super";
            $harga = $this->hargaSuper;
        } elseif ($this->vPower) {
            $jenis = "vPower";
            $harga = $this->hargavPower;
        } elseif ($this->vPowerDiesel) {
            $jenis = "vPower Diesel";
            $harga = $this->hargavPowerDiesel;
        } elseif ($this->vPowerDitro) {
            $jenis = "vPower Ditro";
            $harga = $this->hargavPowerDitro;
        } else {
            $jenis = "Tidak ada jenis bahan bakar yang dipilih";
            $harga = 0;
        }
        if ($this->jumlah > 0) {
            $total = ($harga * $this->jumlah) * (1 + $this->ppn);
            return "Anda membeli $jenis sebanyak $this->jumlah liter. Total yang harus dibayar adalah Rp " . number_format($total, 2,',','.');
        } else {
            return "Jumlah bahan bakar yang dibeli harus lebih dari 0.";
        }
}

}

?>