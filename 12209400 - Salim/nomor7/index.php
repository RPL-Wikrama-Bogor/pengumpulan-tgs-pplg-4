<!DOCTYPE html>
<html>
<head>
    <title>Penilaian Siswa</title>
</head>
<body>
    <h2>Penilaian Siswa</h2>
    <form method="post" action="">
        <?php
        $juara = 0;

        for ($i = 1; $i <= 15; $i++) {
            echo "<h3>Siswa ke-$i</h3>";
            echo "<label for='mtk'>Nilai Matematika:</label>";
            echo "<input type='number' name='mtk[]' required><br>";
            
            echo "<label for='dpk'>Nilai DPK:</label>";
            echo "<input type='number' name='dpk[]' required><br>";
            
            echo "<label for='ing'>Nilai Bahasa Inggris:</label>";
            echo "<input type='number' name='ing[]' required><br>";
            
            echo "<label for='agama'>Nilai Agama:</label>";
            echo "<input type='number' name='agama[]' required><br>";
            
            echo "<label for='indo'>Nilai Bahasa Indonesia:</label>";
            echo "<input type='number' name='indo[]' required><br>";
            
            echo "<label for='kehadiran'>Kehadiran:</label>";
            echo "<input type='number' name='kehadiran[]' required><br>";

            echo "<br>";
        }
        ?>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $mtk = $_POST['mtk'];
        $dpk = $_POST['dpk'];
        $ing = $_POST['ing'];
        $agama = $_POST['agama'];
        $indo = $_POST['indo'];
        $kehadiran = $_POST['kehadiran'];

        for ($i = 0; $i < 15; $i++) {
            if ($kehadiran[$i] != 100) {
                echo "<p>Kehadiran siswa ke-" . ($i + 1) . " tidak mencapai 100</p>";
                continue;
            }

            $total = $mtk[$i] + $dpk[$i] + $ing[$i] + $agama[$i] + $indo[$i];

            if ($total <= 475) {
                echo "<p>Total nilai siswa ke-" . ($i + 1) . " tidak mencapai 475</p>";
                continue;
            }

            if ($total > $juara) {
                $juara = $total;
            }
        }

        echo "<p>Nilai tertinggi: $juara</p>";
    }
    ?>
</body>
</html>
