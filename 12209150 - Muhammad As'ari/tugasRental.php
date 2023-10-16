<?php
class Motor {
    protected $registeredMember = ["Siti", "Asep", "Angga", "Adit", "Manda"];
    protected $motor = [
        [
            "Merk" => "Scoopy",
            "Price" => 10000
        ],
        [
            "Merk" => "Yamaha",
            "Price" => 20000
        ],
        [
            "Merk" => "Kawasaki",
            "Price" => 30000
        ],
        [
            "Merk" => "Honda",
            "Price" => 40000
        ],
        [
            "Merk" => "BMW",
            "Price" => 50000
        ],
    ];

    public function getMotorData()
    {
        return $this->motor;
    }
}

class Rental extends Motor {
    protected $price = 0;
    protected $discount = 10000;
    protected $discountedPrice = 0;
    protected $tax = 1.1;

    public function __construct($user, $jenisMotor, $durasi)
    {
        $this->calculatePrice($user, $jenisMotor, $durasi);
    }

    protected function calculatePrice($user, $jenisMotor, $durasi)
    {
        // Check if the selected motor type exists in the array
        $motorData = $this->getMotorData();
        $motorTypeExists = false;
        foreach ($motorData as $motorItem) {
            if ($motorItem["Merk"] === $jenisMotor) {
                $motorTypeExists = true;
                $this->price = $motorItem["Price"];
                break;
            }
        }

        if (!$motorTypeExists) {
            echo "Motor type not found in the available options.";
            return;
        }

        // Calculate the total price
        $totalPrice = $this->price * $durasi;

        // Apply discounts and tax
        if (in_array($user, $this->registeredMember)) {
            $totalPrice -= $this->discount;
        }

        $this->discountedPrice = $totalPrice * $this->tax;
    }

    public function getPrice()
    {
        return $this->discountedPrice;
    }
}
?>

<form action="" method="post">
    <h4>Nama :</h4>
    <input type="text" name="nama">
    <h4>Jenis motor </h4>
    <select name="jenisMotor">
        <?php $motorObj = new Motor; foreach ($motorObj->getMotorData() as $item) {?>
        <option value="<?= $item["Merk"] ?>"><?= $item["Merk"] ?></option>
        <?php } ?>
    </select>
    <h4>Durasi : </h4>
    <input type="text" name="durasi">
    <input type="submit" name="submit">
</form>

<?php 
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $jenisMotor = $_POST["jenisMotor"];
    $durasi = $_POST["durasi"];
    
    // Create a Rental object
    $rental = new Rental($nama, $jenisMotor, $durasi);

    // Get the final price
    $finalPrice = $rental->getPrice();
    echo "Total Price: $" . number_format($finalPrice, 2);
}
?>
