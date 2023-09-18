<?php 
require_once 'model.php';
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
