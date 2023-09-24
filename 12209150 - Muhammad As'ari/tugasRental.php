<?php
$conn = new mysqli("localhost", "root", "", "rentalMotor");

class Motor
{
    protected $registeredMember = ["Siti", "Asep", "Angga", "Adit", "Manda", ""];

    public function getMotorData()
    {
        global $conn;
        $sql = "SELECT merk, price FROM main";
        $result = $conn->query($sql);
        $motorData = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $motorData[] = $row;
            }
        }

        return $motorData;
    }

    public function updateMotorPrice($merk, $newPrice)
    {
        global $conn;
        $sql = "UPDATE main SET price = $newPrice WHERE merk = '$merk'";
        $conn->query($sql);
    }
}

class Rent extends Motor
{
    public $originPrice = 0;
    public $duration = 0;
    public $product = "";
    public $user = "";
    public $discount = 1;
    public $finalPrice = 0;
    public $tax = 10000;
    public $member = false;

    public function __construct($user, $product, $duration)
    {
        $this->product = $product;
        $this->user = $user;
        $this->duration = $duration;

        $this->isMember();
        $this->setPrice();
        $this->cetakOutput();
    }

    public function isMember()
    {
        if (in_array($this->user, $this->registeredMember)) {
            $this->discount = 0.95;
            $this->member = true;
        }
    }
    public function setPrice()
    {
        $motorData = $this->getMotorData();
        foreach ($motorData as $motorcycle) {
            if ($motorcycle['merk'] == $this->product) {
                $this->originPrice = $motorcycle['price'];
                break;
            }
        }
        $this->finalPrice = ($this->originPrice * $this->duration) * $this->discount + $this->tax;
    }

    public function cetakOutput()
    { 
        echo "$this->user Berstatus sebagai " . ($this->member ? "member terdaftar. Diskon sebesar $this->discount" : "bukan member terdaftar") . "<br>";
        echo "Jenis motor yang dirental $this->product selama $this->duration" . " hari <br>";
        echo "Harga rental per harinya : $this->originPrice" . "<br>";
        echo "Besar yang harus dibayarkan adalah : $this->finalPrice" . "<br>";
    }
}

$MotorInstance = new Motor();
?>

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
  
        .secondForm {
            margin-top: 40px;
        }
    </style>
</head>
<form action="" method="post">
    <h4>Nama :</h4> <input type="text" name="nama">
    <h4>Jenis motor</h4>
    <select name="jenisMotor">
        <?php
        foreach ($MotorInstance->getMotorData() as $motorcycle) {
            echo "<option>{$motorcycle['merk']}</option>";
        }
        ?>
    </select>
    <h4>Durasi : </h4> <input type="text" name="durasi">
    <input type="submit" name="submit" value="kirimData">
</form>

<?php
if (isset($_POST["submit"]) && $_POST["submit"] == "kirimData") {
    $nama = $_POST["nama"];
    $jenisMotor = $_POST["jenisMotor"];
    $durasi = $_POST["durasi"];

    $rent = new Rent($nama, $jenisMotor, $durasi);
}
?>

<form action="" method="POST" class="secondForm">
    <h4>Tipe</h4>
    <select name="tipe">
        <?php
        foreach ($MotorInstance->getMotorData() as $motorcycle) {
            echo "<option>{$motorcycle['merk']}</option>";
        }
        ?>
    </select>
    <h4>Nilai baru</h4>
    <input type="number" name="nilaiBaru">
    <input type="submit" name="submit" value="updateData">
</form>

<?php
if (isset($_POST["submit"]) && $_POST["submit"] == "updateData") {
    $tipe = $_POST["tipe"];
    $nilaiBaru = $_POST["nilaiBaru"];
    $MotorInstance->updateMotorPrice($tipe, $nilaiBaru);
}
?>