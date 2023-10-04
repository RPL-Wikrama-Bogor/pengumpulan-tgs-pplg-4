<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No Pegawai substract</title>
    <link rel="stylesheet" href="No11.css">
</head>

<body>
    <div class="contain-form">
        <form action="" method="post">
            <h5>Nomor Pegawai</h5>
            <input type="number" name="np">
            <input type="submit" name="submit">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $np = $_POST['np'];
            $sbln = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "Desember"];

            if (strlen($np) < 11) {
                echo "Nomor pegawai tidak sesuai";
            } else {
                $ng = intval(substr($np, 0, 1));
                $tgl = intval(substr($np, 1, 2));
                // Rev
                $bln = intval(substr($np, 3, 2));
                // Rev
                $thn = intval(substr($np, 5, 4));
                $nu = intval(substr($np, 9, 2));
                ?>
                <h4>Nomor golongan: <?= $ng; ?></h4>
                <h4>Nomor urut: <?= $nu; ?></h4>
                <h4>Tanggal lahir: <?= $tgl . " " . $sbln[$bln - 1] . " " . $thn; ?></h4>
        <?php
            }
        }
        ?>
    </div>
</body>
</html>