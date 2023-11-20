<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Sederhana</title>

<body>
    <?php
    $produk = array(
        "Bakso" => 10000,
        "Mie Ayam" => 15000,
        "Seblak" => 20000,
        "Basok aci" => 20000,
        "Lumpia basah" => 15000
    );

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $total = 0;
        $items = $_POST["items"];

        foreach ($items as $namaProduk => $jumlah) {
            if ($jumlah >= 5) {
                $subtotal = $produk[$namaProduk] * $jumlah * 0.9; // Diskon 10%
            } else {
                $subtotal = $produk[$namaProduk] * $jumlah;
            }
            $total += $subtotal;
        }
    }
    ?>
    <div class="container">
        <h1>Warung Wijaya</h1>
        <p>Terimakasih telah berbelanja di web kami ini lah rincian pembelian anda:</p>
        <form method="POST">
            <table>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                </tr>
                <?php foreach ($produk as $namaProduk => $harga) { ?>
                    <tr>
                        <td><?php echo $namaProduk; ?></td>
                        <td>Rp <?php echo number_format($harga, 0, ",", "."); ?></td>
                        <td><input type="number" name="items[<?php echo $namaProduk; ?>]" value="0" min="0"></td>
                    </tr>
                <?php } ?>
            </table>
            <br>
            <input type="submit" value="Hitung Total">
        </form>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            <div class="total">
                <p>Total Belanja:</p>
                <p class="harga">Rp <?php echo number_format($total, 0, ",", "."); ?></p>
            </div>
            <p>Terimakasih telah membeli di toko kami, semoga puas dengan produk-produk kami jangan lupa ke Warung Wijaya lagi!!</p>
        <?php } ?>

    </div>
</body>
</html>
