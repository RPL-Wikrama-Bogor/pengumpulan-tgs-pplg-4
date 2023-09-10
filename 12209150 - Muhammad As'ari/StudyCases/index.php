<?php 
require_once 'model.php';
$text = false;

if (isset($_POST["submit"])) { 
    $text = true;
    $tipe = $_POST["select"];
    $jumlah = $_POST["jumlah"];
    $model = new Beli($tipe, $jumlah);
    echo $model->getOutput();
}
?>

<body>
    <?php if($text == true) {?>    
        <div class="text">
            <p>Anda membeli bahan bakar minyak tipe <?= $model->Type ?> </p>
        </div>
    <?php } ?>
    <form action="" method="post">
        <input type="text" name="jumlah">
        <select name="select">
            <option value="SS">Shell Super</option>
            <option value="SVP">Shell V-Power</option>
            <option value="SVPD">Shell V-Power Diesel</option>
            <option value="SVPN">Shell V-Power Nitro</option> 
            <input type="submit" name="submit">
        </select>
    </form>
</body>
