<?php 

$kategory = [[
    'menu' => 'nasi goreng',
    'harga' => 15000
],
[
    'menu' => 'mie goreng',
    'harga' => 10000
],
[
    'menu' => 'Kwetiaw',
    'harga' => 15000
],
[
    'menu' => 'Es jeruk',
    'harga' => 5000
],
[
    'menu' => 'Teh Manis',
    'harga' => 5000
]]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin</title>
</head>
<body>
<div class="box">
    <div class="container">

    </div>
    <form action="" method="post">
    <select name="kategori">
        <option value="menu">Pilih menu</option>
        <option value="nasgor" name="nasigoreng">Nasi Goreng</option>
        <option value="kurang" name="mie goreng">Mie Goreng</option>
        <option value="kali" name="Kwetiaw">Kwetiaw</option>
        <option value="bagi" name="Es Jeruk">Es Jeruk</option>
        <option value="bagi" name="Teh Manis">Teh Manis</option>
    </select>
    <button type="submit" name="submit">Tambah</button>
</form> 

</div> 
</body>
</html>

<?php
if($_POST){

    $kategori = $_POST['kategori'];
    if(key_exists($kategori,$kategory['menu'])){
        print_r($kategori);
    }
}

?>