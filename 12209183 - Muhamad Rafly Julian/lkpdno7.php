<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeruk</title>
</head>
<body>
<h1>Harga jeruk</h1>
    <form method="post" action="">
        total jeruk: <input type="text" name="nama"><br>
        <input type="submit" value="Hitung">
    </form>


<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total_gram =floatval( $_POST["nama"]);
    
$harga_sebelum = 500 * $total_gram;
$diskon = 5 * $harga_sebelum / 100;
$harga_setelah = $harga_sebelum - $diskon;

echo "<h2>Harga jeruk</h2>";
echo "Harga sebelum: $harga_sebelum<br>";
echo "Diskon: $diskon<br>";
echo "Harga setelah: $harga_setelah<br>";
}
?>
</body>
</html>