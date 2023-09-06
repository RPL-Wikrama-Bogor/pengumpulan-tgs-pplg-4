<?php
$makanan = [
    [
        "makanan" => "Nasi goreng",
        "harga" => 15000
    ],
    [
        "makanan" => "Rendang",
        "harga" => 25000
    ],
    [
        "makanan" => "Sate ayam",
        "harga" => 20000
    ],
    [
        "makanan" => "Sate kambing",
        "harga" => 25000
    ],
];

$minuman = [
    [
        "minuman" => "Jus buah",
        "harga" => 5000
    ],
    [
        "minuman" => "Es teh",
        "harga" => 5000
    ],
    [
        "minuman" => "Es kopi",
        "harga" => 5000
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Daftar Menu</h2>
                <ul class="list-group">
                    <?php 
                foreach ($makanan as $item) { ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <?= $item['makanan']; ?>
                        <br>harga :
                        <?= $item['harga']; ?>
                    </li>
                    <?php 
                } ?>

                    <?php 
                foreach ($minuman as $item) { ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <?= $item['minuman']; ?>
                        <br>harga :
                        <?= $item['harga']; ?>
                    </li>
                    <?php 
                } ?>

                </ul>
            </div>

            <div class="col-md-6">
                <h2>Pilih Menu</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="makanan">makanan</label>
                        <select name="makanan" class="form-control">
                            <?php foreach ($makanan as $item) { ?>
                            <option value="<?= $item['makanan']; ?>"><?= $item['makanan']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlahmakanan">Jumlah makanan</label>
                        <input type="number" name="jumlahmakanan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="minuman">minuman</label>
                        <select name="minuman" class="form-control">
                            <?php foreach ($minuman as $item) { ?>
                            <option value="<?= $item['minuman']; ?>"><?= $item['minuman']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlahmakanan">Jumlah minuman</label>
                        <input type="number" name="jumlahmakanan" class="form-control">
                    </div>

                    <br><button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>

                <?php
        if (isset($_POST["submit"])) {
            $selectedmakanan = $_POST["makanan"];
            $selectedminuman = $_POST["minuman"];
            $jumlahmakanan = isset($_POST["jumlahmakanan"]) ? intval($_POST["jumlahmakanan"]) : 0;
            $jumlahminuman = isset($_POST["jumlahminuman"]) ? intval($_POST["jumlahminuman"]) : 0;

            $makananPrice = 0;
            $minumanPrice = 0;

            foreach ($makanan as $item) {
                if ($item['makanan'] === $selectedmakanan) {
                    $makananPrice = $item['harga'];
                    break;
                }
            }

            foreach ($minuman as $item) {
                if ($item['minuman'] === $selectedminuman) {
                    $minumanPrice = $item['harga'];
                    break;
                }
            }

            $totalBeforeDiscount = ($makananPrice * $jumlahmakanan) + ($minumanPrice * $jumlahminuman);

            if ($jumlahmakanan + $jumlahminuman > 5) {
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

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
                crossorigin="anonymous"></script>
</body>

</html>