<?php
class motor{
    protected $terdaftar = ['astri','ramon','rida','algam'];
    protected $motor =[
        [
            "merk" => "Honda",
            "harga" => 50000
        ],
        [
            "merk" => "Yamaha",
            "harga" => 55000
        ],
        [
            "merk" => "Suzuki",
            "harga" => 60000
        ],
        [
            "merk" => "Kawasaki",
            "harga" => 65000
        ]
    ];

    /**
     * @return array[]
     */
    public function getMotordata(): array
    {
        return $this->motor;
    }
}

class rental extends motor{
    protected $harga = 0;
    protected $diskon = 10000;
    protected $hargadiskon = 0;
    protected $pajak = 1.1;

    public function  __construct($pengguna, $jenismotor, $durasi)
    {
        $this->kalkulatorharga($pengguna, $jenismotor, $durasi);
    }

    public function kalkulatorharga($pengguna, $jenismotor, $durasi){
        $motorIndex = -1;
        foreach ($this->getMotordata() as $index => $motor) {
            if ($motor["merk"] === $jenismotor) {
                $motorIndex = $index;
                break;
            }
        }

        if ($motorIndex !== -1) {
            $this->harga = $this->getMotordata()[$motorIndex]["harga"] * $durasi;
            if (in_array($pengguna, $this->terdaftar)) {
                $this->hargadiskon = $this->harga - $this->diskon;
            } else {
                $this->hargadiskon = $this->harga;
            }
            $this->hargadiskon = $this->hargadiskon * $this->pajak;
        }/**se {
            echo "Motor brand '$jenismotor' not found.";
        }*/
    }

    public function getharga()
    {
        return $this->harga;
    }

    public function gethargadiskon()
    {
        return $this->hargadiskon;
    }
}
?>
