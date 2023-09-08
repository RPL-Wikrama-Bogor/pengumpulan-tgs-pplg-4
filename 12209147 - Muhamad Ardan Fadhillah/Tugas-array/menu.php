<?php

    $makanan = [
        [
        "makanan" => "Nasi Goreng",
        "harga" => 15000
        ],
        [
        "makanan" => "Mie Goreng",
        "harga" => 10000
        ],
        [
        "makanan" => "Kwetiaw", 
        "harga" => 15000
        ],
    ];

    $minuman = [
        [
        "minuman" => "Es Jeruk",
        "harga" => 5000
        ],
        [
        "minuman" => "Teh Manis",
        "harga" => 5000
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir</title>
</head>
<body>

    <div class="daftar-menu">
        <h2>DAFTAR MENU</h2>
        <h4 class="makanan">Makanan</h4>
        <?php $index = 1;
        foreach($makanan as $menu){ ?>
            <p class="list">
                <?= $index; ?>
                <?= $menu['makanan']; ?><br>Harga: 
                <?= $menu['harga']; ?>
            </p>
            <?php $index++;    
        }?>

        <h4 class="makanan">Minuman</h4>
        <?php $index = 1;
        foreach($minuman as $menu){ ?>
            <p class="list">
                <?= $index; ?>
                <?= $menu['minuman'];?><br>Harga: 
                <?= $menu['harga'];?>
            </p>
            <?php $index++;    
        }?>
    </div>

    <div>
    <div class="pilih-menu">
        <form action="" method="post">
            <label class="top-label">Makanan</label>
            <select name="Makanan" class="form-control">
                <?php foreach ($makanan as $menu) { ?>
                    <option value="<?= $menu['makanan']; ?>"><?= $menu['makanan']; ?></option>
                <?php } ?>
            </select>
            <label>Jumlah Makanan : </label>
            <input type="number" name="jumlahMakanan" class="form-control"><br>

            <label class="top-label">Minuman</label>
            <select name="Minuman" class="form-control">
                <?php foreach ($minuman as $menu) { ?>
                    <option value="<?= $menu['minuman']; ?>"><?= $menu['minuman']; ?></option>
                <?php } ?>
            </select>
            <label>Jumlah Minuman : </label>
            <input type="number" name="jumlahMinuman" class="form-control">

            <br><button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    <?php
        if (isset($_POST["submit"])) {
            $pilihMakanan = $_POST["Makanan"];
            $pilihMinuman = $_POST["Minuman"];
            $jumlahMakanan = isset($_POST["jumlahMakanan"]) ? intval($_POST["jumlahMakanan"]) : 0;
            $jumlahMinuman = isset($_POST["jumlahMinuman"]) ? intval($_POST["jumlahMinuman"]) : 0;

            $makananPrice = 0;
            $minumanPrice = 0;

            foreach ($makanan as $menu) {
                if ($menu['makanan'] === $pilihMakanan) {
                    $hargaMakanan = $menu['harga'];
                    break;
                }
            }

            foreach ($minuman as $menu) {
                if ($menu['minuman'] === $pilihMinuman) {
                    $hargaMinuman= $menu['harga'];
                    break;
                }
            }

            $totalBeforeDiscount = ($hargaMakanan * $jumlahMakanan) + ($hargaMinuman * $jumlahMinuman);

            if ($jumlahMakanan + $jumlahMinuman > 5) {
                $discount = 0.10 * $totalBeforeDiscount;
            } else {
                $discount = 0;
            }

            $totalAfterDiscount = $totalBeforeDiscount - $discount;

            echo "<br> harga sebelum diskon : $totalBeforeDiscount<br>";
            echo "Total harga setelah diskon : $totalAfterDiscount";
        }

        ?>
    </div>
    
</body>
</html>