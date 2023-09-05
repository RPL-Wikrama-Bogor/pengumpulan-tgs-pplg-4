<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
    <form action="" method="post">
        <label>Nomor karyawan</label><br>
        <input type="number" name="no" placeholder="eg. 10107200701" class="top-input"><br>
        <input type="submit" name="submit">
    </form>
    
    <section class="output">
    <?php
    if (isset($_POST['submit'])) {
        $no = $_POST['no'];
        $sbln = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "Desember"];
        if (strlen($no) < 11) {
            echo "<h4>Nomor pegawai tidak sesuai</h4>";
        } else {
            $ng = intval(substr($no, 0, 1));
            $tgl = intval(substr($no, 1, 2));
            $bln = intval(substr($no, 3, 2));
            $thn = intval(substr($no, 5, 4));
            $nu = intval(substr($no, 9, 2));
            ?>
<!--            101207200702-->

            <h4>Nomor golongan: <?= $ng; ?></h4>
            <h4>Nomor urut: <?= $nu; ?></h4>
            <h4>Tanggal lahir: <?= $tgl . " " . $sbln[$bln - 1] . " " . $thn; ?></h4>
    <?php
        }
    }
    ?>
    </section>
    </div>
</body>
</html>