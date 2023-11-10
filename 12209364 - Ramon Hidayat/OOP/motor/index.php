<?php
include_once "model.php";
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jenisMotor = $_POST['jenisMotor'];
    $durasi = $_POST['durasi'];

    $rental = new Rental($nama, $jenisMotor, $durasi);

    $harga = $rental->getharga();
    $hargaDiskon = $rental->gethargadiskon();

    echo "Hallo ". $nama;
    echo "<br>";
    echo "Harga rental: Rp. " . $harga;
    echo "<br>";
    echo "Harga rental setelah diskon: Rp. " . $hargaDiskon;
}
?>

<form action="" method="post">
    <h4>Nama :</h4>
    <input type="text" name="nama">
    <h4>Jenis motor </h4>
    <select name="jenisMotor">
       <?php $motorObj = new Motor; foreach ($motorObj->getMotorData() as $item) {?>
            <option value="<?= $item["merk"] ?>"><?= $item["merk"] ?></option>
        <?php } ?>
    </select>
    <h4>Durasi : </h4>
    <input type="text" name="durasi">
    <input type="submit" name="submit">
</form>
