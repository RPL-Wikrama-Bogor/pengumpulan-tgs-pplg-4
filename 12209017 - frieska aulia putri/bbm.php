<?php 
 class shell {
    protected $ppn;
    private $SSuper,
            $SVpower,
            $SVPowerDiesel,
            $SVPowerNitro;
    public $jumlah;
    public $jenis;

    function __construct()
    {
        $this->ppn = 0.1;
    }
    public function SetHarga($tipe1,$tipe2,$tipe3,$tipe4){
        $this->SSuper = $tipe1;
        $this->SVpower = $tipe1;
        $this->SVPowerDiesel= $tipe1;
        $this->SVPowerNitro= $tipe1;
    }
    public function getHarga(){
        $data["SSuper"] = $this->SSuper;
        $data["SVpower"] = $this->SVpower;
        $data["SVPowerDiesel"] = $this->SVPowerDiesel;
        $data["SVPowerNitro"] = $this->SVPowerNitro;
        return $data;
    }
 }
   class Beli extends Shell{
    public function hargabeli(){
        $dataharga = $this->getHarga();
        $hargaBeli = $this->jumlah * $dataharga
        [$this->jenis];
        $hargappn = $hargaBeli * $this->ppn;
        $hargaBayar = $hargaBeli + $hargappn ;
        return $hargaBayar;
    }

public function cetakpembelian(){
    echo "<center>";
    echo 
    "-------------------------------------"."<br>";
    echo "Anda membeli bahan bakar minyak tipe". $this->jenis ."<br>";
    echo "Dengan jumlah :". $this->jumlah ."liter <br>";
    echo "Total yang harus anda bayar Rp." . 
    number_format($this->hargabeli(),0,'','.') . "<br>";
    echo 
    "-------------------------------------";
    echo "</center>";
  }
  }
?>