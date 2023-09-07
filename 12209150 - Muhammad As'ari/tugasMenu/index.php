<?php
$Makanan = [
    [
        "Makanan" => "Mie goreng",
        "Harga" => 5000
    ],
    [
        "Makanan" => "Baso",
        "Harga" => 5000
    ],
    [
        "Makanan" => "Soto",
        "Harga" => 5000
    ],
];

$Minuman = [
    [
        "Minuman" => "Jus buah",
        "Harga" => 5000
    ],
    [
        "Minuman" => "Es teh",
        "Harga" => 5000
    ]
];
?>

<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="daftar-menu">
        <h2>Daftar Menu</h2>
        <h4 class="makanan">Makanan</h4>

        <?php $index = 1;
        foreach ($Makanan as $item) { ?>
            <p class="list-item">
                <?= $index; ?>.
                <?= $item['Makanan']; ?><br>Harga :
                <?= $item['Harga']; ?>
            </p>
            <?php $index++;
        } ?>

        <h4 class="minuman">Minuman</h4>
        <?php $index = 1;
        foreach ($Minuman as $item) { ?>
            <p class="list-item">
                <?= $index; ?>.
                <?= $item['Minuman']; ?><br>Harga :
                <?= $item['Harga']; ?>
            </p>
            <?php $index++;
        } ?>
    </div>

    <div class="pilih-menu">
        <form action="" method="post">
            <label class="top-label">Makanan</label>
            <select name="Makanan" class="form-control">
                <?php foreach ($Makanan as $item) { ?>
                    <option value="<?= $item['Makanan']; ?>"><?= $item['Makanan']; ?></option>
                <?php } ?>
            </select>
            <label>Jumlah makanan : </label>
            <input type="number" name="jumlahMakanan" class="form-control"><br>

            <label class="top-label">Minuman</label>
            <select name="Minuman" class="form-control">
                <?php foreach ($Minuman as $item) { ?>
                    <option value="<?= $item['Minuman']; ?>"><?= $item['Minuman']; ?></option>
                <?php } ?>
            </select>
            <label>Jumlah minuman : </label>
            <input type="number" name="jumlahMinuman" class="form-control">

            <br><button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if (isset($_POST["submit"])) {
            $selectedMakanan = $_POST["Makanan"];
            $selectedMinuman = $_POST["Minuman"];
            $jumlahMakanan = isset($_POST["jumlahMakanan"]) ? intval($_POST["jumlahMakanan"]) : 0;
            $jumlahMinuman = isset($_POST["jumlahMinuman"]) ? intval($_POST["jumlahMinuman"]) : 0;

            $makananPrice = 0;
            $minumanPrice = 0;

            foreach ($Makanan as $item) {
                if ($item['Makanan'] === $selectedMakanan) {
                    $makananPrice = $item['Harga'];
                    break;
                }
            }

            foreach ($Minuman as $item) {
                if ($item['Minuman'] === $selectedMinuman) {
                    $minumanPrice = $item['Harga'];
                    break;
                }
            }

            $totalBeforeDiscount = ($makananPrice * $jumlahMakanan) + ($minumanPrice * $jumlahMinuman);

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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>