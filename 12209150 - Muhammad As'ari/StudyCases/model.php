<?php

class Shell
{
    protected $hargaSSuper = 154200;
    protected $hargaSVP = 161300;
    protected $hargaSVPD = 183100;
    protected $hargaSVPN = 165100;
    protected $Type = "";
    protected $totalPrice = 0;
    protected $totalLiter = 0;
    protected $tax = 0.11;

    protected function getHargaBensin($productName) {
        switch ($productName) {
            case "SS":
                return $this->hargaSSuper;
            case "SVP":
                return $this->hargaSVP;
            case "SVPD":
                return $this->hargaSVPD;
            case "SVPN":
                return $this->hargaSVPN;
        }
    }
    public function getTipeBensin()
    {
        return $this->Type;
    }
    public function getTotalHarga()
    {
        return $this->totalPrice;
    }
    public function getTotalLiter()
    {
        return $this->totalLiter;
    }
}

class Beli extends Shell
{
    public function __construct($productName, $total)
    {
    $this->totalLiter = $total;
        switch ($productName) {
            case "SS":
                $this->totalPrice = ($this->getHargaBensin($productName) * $total) * $this->tax;
                $this->Type = "SSuper";
                break;
            case "SVP":
                $this->totalPrice = ($this->getHargaBensin($productName) * $total) * $this->tax;
                $this->Type = "SVpower";
                break;
            case "SVPD":
                $this->totalPrice = ($this->getHargaBensin($productName) * $total) * $this->tax;
                $this->Type = "SVPDiesel";
                break;
            case "SVPN":
                $this->totalPrice = ($this->getHargaBensin($productName) * $total) * $this->tax;
                $this->Type = "SVPNitro";
                break;
        }
    }
}

?>