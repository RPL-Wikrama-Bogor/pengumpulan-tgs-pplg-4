<?php
class FuelShell {
    private $fuelTypes;

    public function __construct() {
        $this->fuelTypes = [
            'SVpowerDiesel' => 60.423,
            'SV V-super' => 90.423,
            'SV V-PowerNitro' => 50.423,
            'SV V-PowerDiesel' => 60.423,


        ];
    }

    public function getFuelTypes() {
        return array_keys($this->fuelTypes);
    }

    public function getPricePerLiter($fuelType) {
        return $this->fuelTypes[$fuelType];
    }
}
?>
