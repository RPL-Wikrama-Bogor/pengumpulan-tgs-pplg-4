<?php 
$menus = [
    [
        'menu' => 'Nasi Goreng',
        'harga' => 15000,
        'tipe' => 'makanan',
    ],
    [
        'menu' => 'Mie Goreng',
        'harga' => 10000,
        'tipe' => 'makanan',
    ],
    [
        'menu' => 'Kwetiaw',
        'harga' => 15000,
        'tipe' => 'makanan',
    ],
    [
        'menu' => 'Es Jeruk',
        'harga' => 5000,
        'tipe' => 'minuman',
    ],
    [
        'menu' => 'Teh Manis',
        'harga' => 5000,
        'tipe' => 'minuman',
    ],
]
?>

<!DOCTYPE html>
<h1>kasir sederhana</h1>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .total {
            font-weight: bold;
        }
        .daftar{
            background-color: white;
            border-radius: 15px;
            outline : auto;
            max-width: 100%;
            text-align: center;
            padding: 30px 70px;
            margin: 30px 400px;
            margin-top: 5%;
        }
        .inpt{
            margin-top: 10%;
            padding: 10px;
            border-radius: 30%
        }
        h1{
            text-align: center;
        }
      
         
    </style>
</head>
<body>
<body>
  
    <form action="" method="post">
        <table>
                <tr>
                    <td><strong>Daftar Menu</strong></td>
                    <td><strong>Harga</strong></td>
                </tr>
                <?php foreach ($menus as $key => $m) : ?>
                    <tr>
                        <td> <?= $m['menu'] ?></td>
                        <td> <?= $m['harga'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <br>
            <br>
         
    <!-- pilih menu -->
    <div class=daftar>
    <form action="" method="post" id="purchase-form">
        <!-- <h2>Makanan</h2> -->
        <label for="food_menu">Pilih Makanan:</label>
        <select id="food_menu" name="food_menu"><br><
            <option hidden disabled selected>--pilih makanan--</option><br><br>
            <?php foreach ($menus as $item): ?>
                <?php if ($item['tipe'] == 'makanan'): ?><br><br>
                    <option value="<?= $item['menu']; ?>"><?= $item['menu']; ?> - Rp <?= number_format($item['harga'], 0, ',', '.'); ?></option>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </select><br>
                
                <label for="food_quantity">Jumlah Pembelian Makanan:</label>
        <option hidden disabled selected>--pilih minuman--</option>
        <input type="number" id="food_quantity" name="food_quantity" required><br>

        <!-- <h2>Minuman</h2> -->
        <label for="drink_menu">Pilih Minuman:</label>
        <select id="drink_menu" name="drink_menu">
        <option hidden disabled selected>--pilih minuman--</option>
            <?php foreach ($menus as $item): ?>            
                <?php if ($item['tipe'] == 'minuman'): ?>
                    <option value="<?= $item['menu']; ?>"><?= $item['menu']; ?> - Rp <?= number_format($item['harga'], 0, ',', '.'); ?></option>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </select><br>
                
                <label for="drink_quantity">Jumlah Pembelian Minuman:</label>
                <input type="number" id="drink_quantity" name="drink_quantity" required><br>
                
                <input type="submit" name="submit" style="width: 400px" value="Beli" >
            </form>

            
            <!-- Menampulkan struk-->
            <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $food_menu = $_POST["food_menu"];
    $food_quantity = (int)$_POST["food_quantity"];
    $drink_menu = $_POST["drink_menu"];
    $drink_quantity = (int)$_POST["drink_quantity"];
    
    // Menghitung total
    $total_cost = 0;
    
    // belum ada diskon
    foreach ($menus as $item) {
        if ($item['menu'] == $food_menu) {
            $food_price = $item['harga'];
            $total_cost += $food_price * $food_quantity;
        } elseif ($item['menu'] == $drink_menu) {
            $drink_price = $item['harga'];
            $total_cost += $drink_price * $drink_quantity;
        }
    }
?>

<br/>
<div class="garis">
<h2>Bukti Pembelian</h2>
<p> Makanan : <?= $food_menu ?> (<?= $food_quantity ?>)<br> Harga Makanan : <?= number_format($food_price * $food_quantity, 0, ',', '.'); ?>
<br>Minuman : <?= $drink_menu ?> (<?= $drink_quantity ?>)<br> Harga Minuman :<?= number_format($drink_price * $drink_quantity, 0, ',', '.'); ?>
<br>Total Pembayaran: <b>Rp <?= number_format($total_cost, 0, ',', '.'); ?></b></p>
</div>
<br/>
</div>

<?php } ?>

</body>
</html>