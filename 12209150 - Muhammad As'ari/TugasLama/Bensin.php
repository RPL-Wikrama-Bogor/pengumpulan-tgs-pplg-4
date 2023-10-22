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

$text = false;

if (isset($_POST["submit"])) { 
    $text = true;
    $productName = $_POST["select"];
    $jumlah = $_POST["jumlah"];
    $model = new Beli($productName, $jumlah);
}
?>

<body>
    <?php if($text == true) {?>    
        <div class="text">
            <p>Anda membeli bahan bakar minyak tipe <?= $model->getTipeBensin() ?> </p>
            <p>Dengan harga : <?= number_format($model->getTotalHarga(), 1, ",", ".") ?></p>
            <p>Total liter : <?= $model->getTotalLiter() ?></p>
        </div>
    <?php } ?>
    <form action="" method="post">
        <select name="select">
            <option value="SS">Shell Super</option>
            <option value="SVP">Shell V-Power</option>
            <option value="SVPD">Shell V-Power Diesel</option>
            <option value="SVPN">Shell V-Power Nitro</option> 
        </select><br>
        <input type="text" name="jumlah" placeholder="total liter"><br>
        <input type="submit" name="submit">
    </form>
</body>
