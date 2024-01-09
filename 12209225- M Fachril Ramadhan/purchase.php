<?php
class FuelPurchase {
    private $liters;
    private $fuelType;
    private $pricePerLiter;

    public function __construct($liters, $fuelType, $pricePerLiter) {
        $this->liters = $liters;
        $this->fuelType = $fuelType;
        $this->pricePerLiter = $pricePerLiter;
    }

    public function getTotalCost() {
        return $this->liters * $this->pricePerLiter;
    }
}
?>
