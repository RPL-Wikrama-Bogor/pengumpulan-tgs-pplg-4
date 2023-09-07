<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Sederhana</title>
    <style>

 body {
    font-family: Arial, sans-serif;
    background-color: black;
    margin: 0;
    padding: 0;
 }

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    margin-top: 20px;
}

h1 {
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    
}

th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
}

input[type="number"] {
    width: 50px;
}

input[type="submit"] {
    display: block;
    margin: 20px auto;
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

.total {
    text-align: right;
    font-weight: bold;
    margin-top: 20px;
}

.total p {
    margin: 5px 0;
}

.harga {
    font-size: 24px;
    color: #007BFF;
    margin-top: 10px;
    text-align: right;
}



.footer {
            text-align: center;
            padding: 20px;
            background-color: #007BFF;
            color: #fff;
            margin-top: 80px;
        }

        /* CSS untuk tautan media sosial */
        .social-links {
            margin-top: 20px;
        }

        .social-links a {
            text-decoration: none;
            color: #fff;
            margin: 0 10px;
        }

        .social-links a:hover {
            text-decoration: underline;
        }

        .social-links a img {
            width : 30px;
            margin-right: 10px; 
        }


    </style>

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