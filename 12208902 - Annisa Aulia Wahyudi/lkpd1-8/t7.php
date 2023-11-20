<!DOCTYPE html>
<html>

<head>
    <title>Juara Kelas</title>
</head>

<body>
    <h1>Juara Kelas</h1>
    <form method="post" action="">
        <?php
        $ts = 15;
        $sj = 0;

        for ($i = 1; $i <= $ts; $i++) {
            echo "<b>Siswa $i</b><br>";
            echo "<label>Nama Siswa:</label>";
            echo "<br><input type='text' name='nS[]'><br>";
            echo "<label>Nilai MTK:</label>";
            echo "<br><input type='number' name='nM[]'><br>";
            echo "<label>Nilai ING:</label>";
            echo "<br><input type='number' name='nI[]'><br>";
            echo "<label>Nilai IND:</label>";
            echo "<br><input type='number' name='nIN[]'><br>";
            echo "<label>Nilai DPK:</label>";
            echo "<br><input type='number' name='nD[]'><br>";
            echo "<label>Nilai AGM:</label>";
            echo "<br><input type='number' name='nA[]'><br>";
            echo "<label>Kehadiran:</label>";
            echo "<br><input type='number' name='kehadiran[]'><br><br>";
        }
        ?>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $sj = 0;

        for ($i = 0; $i < $ts; $i++) {
            $totalNilai = $_POST['nM'][$i] + $_POST['nI'][$i] + $_POST['nIN'][$i] + $_POST['nD'][$i] + $_POST['nA'][$i];
            $kehadiran = $_POST['kehadiran'][$i];

            if ($totalNilai >= 475 && $kehadiran == 100) {
                $sj++;
            }
        }

        echo "<h3>Jumlah Siswa Juara: $sj</h3>";
    }
    ?>
</body>

</html>