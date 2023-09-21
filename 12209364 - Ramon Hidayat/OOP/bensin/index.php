
<?php
require_once 'model.php';
$text = false;

if (isset($_POST["submit"])) {

    $text = true;
    $productName = $_POST["select"];
    $jumlah = $_POST["jumlah"];
    $model = new Fuel($productName, $jumlah);
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>
    .text {
        margin-left: 20px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Shell</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Form Pembelian BBM</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
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
        </div>
    </div>
</div>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Hasil Pembelian BBM</h2>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php if($text == true) {?>
                <div class="text">
                    <p>Anda membeli bahan bakar minyak tipe <?= $model->getType() ?> </p>
                    <p>Dengan harga : <?= number_format($model->getPrice(), 1, ",", ".") ?></p>
                    <p>Total liter : <?= $model->getTotalLiter() ?></p>
                </div>

            <?php } ?>
        </div>
    </div>
</div>

