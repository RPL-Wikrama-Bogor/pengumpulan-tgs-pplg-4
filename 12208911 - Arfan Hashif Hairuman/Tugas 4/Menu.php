<?php
$menu = [[
    'menu' => 'Nasi Goreng', 'harga' => 15000
], ['menu' => 'Mie Goreng', 'harga' => 10000
], ['menu' => 'Kwetiaw', 'harga' => 15000
], ['minum' => 'Es Jeruk', 'harga' => 5000
], ['minum' => 'Teh manis', 'harga' => 5000]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<div class="container d-flex flex-column justify-content-center border border-success p-2 mb-2 border-opacity-25 mt-3">
    <h5 class="text-center">Daftar menu</h5>
    <p>1. Menu: <?= $menu[0]['menu']?></p>
    <p class="ms-3">Harga: <?= $menu[0]['harga']?></p>


    <p>2. Menu: <?= $menu[1]['menu']?></p>
    <p class="ms-3">Harga: <?= $menu[1]['harga']?></p>

    <p>3. Menu: <?= $menu[2]['menu']?></p>
    <p class="ms-3">Harga: <?= $menu[2]['harga']?>

    <p>4. Menu: <?= $menu[3]['minum']?></p>
    <p class="ms-3">Harga: <?= $menu[3]['harga']?>

    <p>5. Menu: <?= $menu[4]['minum']?></p>
    <p class="ms-3">Harga: <?= $menu[4]['harga']?>
</div>

<div class="container d-flex flex-column justify-content-center border border-success p-2 mb-2 border-opacity-25 mt-3">
    <form action="" method="post">
        <label for="lMenu" class="form-label">Menu</label>
        <select class="form-select" name="menuP" id="lMenu">
            <?php foreach ($menu as $item): ?>
                <?php if (isset($item['menu'])): ?>
                    <option value="<?= $item['menu'] ?>"><?= $item['menu'] ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="jumlah" class="form-label">Jumlah makanan</label>
        <input type="number" class="form-control" id="jumlah" name="jumlah">
        <br>
        <label for="lMinum" class="form-label">Minuman</label>
        <select class="form-select" name="minumP" id="lMinum">
            <?php foreach ($menu as $item): ?>
                <?php if (isset($item['minum'])): ?>
                    <option value="<?= $item['minum'] ?>"><?= $item['minum'] ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="jumlah1" class="form-label">Jumlah minuman</label>
        <input type="number" class="form-control" id="jumlah1" name="jumlah1">
        <br>
        <button type="submit" class="btn btn-primary" name='pesan'>Pesan</button>
    </form>
</div>
<?php
if (isset($_POST['pesan'])) {
    $menup = $_POST['menuP'];
    $minump = $_POST['minumP'];
    $jumlahMenu = $_POST['jumlah'];
    $jumlahMinum = $_POST['jumlah1'];



    $hargaMenu = null;
    foreach ($menu as $item) {
        if (isset($item['menu']) && $item['menu'] === $menup) {
            $hargaMenu = $item['harga'] * $jumlahMenu;
            break;
        }
    }


    $hargaMinum = null;
    foreach ($menu as $item) {
        if (isset($item['minum']) && $item['minum'] === $minump) {
            $hargaMinum = $item['harga'] * $jumlahMinum;
            break;
        }
    }


    $totalPesanan = $jumlahMinum + $jumlahMenu;
    $totalHarga = $hargaMinum + $hargaMenu;

    if ($totalPesanan >= 5) {
        $disc = $totalHarga * (10/100);
        $totalHarga -= $disc;
    }


    ?>
<!--    HTML    -->
    <div class="container d-flex flex-column justify-content-center border border-success p-2 mb-2 border-opacity-25 mt-3">
        <h5 class="text-center">Nota</h5>
        <p>Makanan: <?= $menup . ' ' . $jumlahMenu . 'x' ?></p>
        <p>Minuman: <?= $minump . ' ' . $jumlahMinum . 'x' ?></p>
        <p>Total: <?= $totalHarga ?></p>
        <p>Diskon: <?php if (isset($disc)) {
            echo $disc;
            } else {
            echo 0;
            }?></p>
    </div>
<?php } ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>