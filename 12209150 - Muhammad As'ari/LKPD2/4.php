<?php 
class kantor {
    protected $namakaryawan = "", 
           $tunj, 
           $pjk, 
           $gajiBersih, 
           $gajiPokok;

    public function beriGajiKaryawan($namaKaryawan, $gajiPokok) {
        $this->namakaryawan = $namaKaryawan;
        $this->gajiPokok = $gajiPokok;

        $this->tunj = (20 * $gajiPokok) / 100;
        $this->pjk = (15 * ($gajiPokok + $this->tunj)) / 100;
        $this->gajiBersih = $gajiPokok + $this->tunj - $this->pjk;

        return "nama karyawan : " . $this->namakaryawan .  "\n" . "Tunjakan : " . number_format($this->tunj) . "\n" . "Pajak : " . number_format($this->pjk) . "\n" . "Gaji bersih : " . number_format($this->gajiBersih);
    }
}

$namaKaryawan = readline("Nama : ");
$GajiPokok = readline("Gaji Pokok : ");

$kantor = new kantor;
echo $kantor->beriGajiKaryawan($namaKaryawan,$GajiPokok);
?>