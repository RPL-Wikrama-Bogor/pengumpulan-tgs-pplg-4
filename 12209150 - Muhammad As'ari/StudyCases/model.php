<?php

class Shell
{
    protected $hargaSSuper = 154200;
    protected $hargaSVP = 161300;
    protected $hargaSVPD = 183100;
    protected $hargaSVPN = 165100;
    protected $Type = "";
    protected $Price = 0;

    protected function getHargaSSuper()
    {
        return $this->hargaSSuper;
    }
    protected function getHargaSVP()
    {
        return $this->hargaSVP;
    }
    protected function getHargaSVPD()
    {
        return $this->hargaSVPD;
    }
    protected function getHargaSVPN()
    {
        return $this->hargaSVPN;
    }
}

class Beli extends Shell
{
    public function __construct($product, $total)
    {
        switch ($product) {
            case "SS":
                $this->Price = ($this->getHargaSSuper() * $total) * 0.11;
                $this->Type = "SSuper";
                break;
            case "SVP":
                $this->Price = ($this->getHargaSVP() * $total) * 0.11;
                $this->Type = "SVpower";
                break;
            case "SVPD":
                $this->Price = ($this->getHargaSVPD() * $total) * 0.11;
                $this->Type = "SVPDiesel";
                break;
            case "SVPN":
                $this->Price = ($this->getHargaSVPN() * $total) * 0.11;
                $this->Type = "SVPNitro";
                break;
        }
    }

    public function getOutput() {
        echo $this->Type;
        echo number_format($this->Price, 2, '.');
    }
}