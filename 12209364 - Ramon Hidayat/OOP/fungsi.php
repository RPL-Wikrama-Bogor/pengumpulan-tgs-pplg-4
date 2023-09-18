<?php
class Fuel
{
    protected $type;
    protected $price;
    protected $amount;

    public function __construct($type, $amount)
    {
        $this->type = $type;
        $this->amount = $amount;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getPrice()
    {
        if ($this->type === "SS") {
            $this->price = 15.420;
        } else if ($this->type === "SVP") {
            $this->price = 16.130;
        } else if ($this->type === "SVPN") {
            $this->price = 16.510;
        } else if ($this->type === "SVPD") {
            $this->price = 18.310;
        }
        return $this->price;
    }

    public function getTotalLiter()
    {
        return $this->amount;
    }

    public function getTotalHarga()
    {
        $hargaPerLiter = $this->getPrice();
        $totalHarga = $hargaPerLiter * $this->amount;

        $ppn = 0.10 * $totalHarga;

        $totalHarga += $ppn;

        return $totalHarga;
    }
}

?>