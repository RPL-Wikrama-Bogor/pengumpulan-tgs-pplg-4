<?php
include 'sheel.php';
include 'Purchase.php';

$shell = new FuelShell();
$fuelTypes = $shell->getFuelTypes();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedFuelType = $_POST['fuelType'];
    $liters = floatval($_POST['liters']);
    $pricePerLiter = $shell->getPricePerLiter($selectedFuelType);

    $purchase = new FuelPurchase($liters, $selectedFuelType, $pricePerLiter);
    $totalCost = $purchase->getTotalCost();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Biaya Bahan Bakar</title>
</head>
<body>
    <h1>Kalkulator Biaya Bahan Bakar</h1>
    <form method="POST">
        <label for="fuelType">Pilih Tipe Bahan Bakar:</label>
        <select name="fuelType" id="fuelType" required>
            <?php foreach ($fuelTypes as $fuelType): ?>
                <option value="<?= $fuelType ?>"><?= $fuelType ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="liters">Masukkan Jumlah Liter:</label>
        <input type="number" step="0.001" id="liters" name="liters" required>
        <br>
        <input type="submit" value="Beli">
    </form>
    <?php if (isset($totalCost)): ?>
        <p>Anda membeli <?= $liters ?> liter bahan bakar <?= $selectedFuelType ?> seharga Rp <?= number_format($totalCost, 3) ?>.</p>
    <?php endif; ?>
</body>
</html>