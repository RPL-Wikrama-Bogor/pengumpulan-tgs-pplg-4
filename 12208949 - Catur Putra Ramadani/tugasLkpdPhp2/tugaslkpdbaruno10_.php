<!DOCTYPE html>
<html>

<head>
    <title>Hitung Grade Rata-rata</title>
</head>

<body>
    <div class="card" style="width: 18rem;">
        <div class="card-body">

            <h2>Form Hitung Grade Rata-rata</h2>
            <form method="post" action="">
                <label for="pabp">Nilai PABP:</label>
                <input type="number" name="pabp" required><br><br>

                <label for="matematika">Nilai Matematika:</label>
                <input type="number" name="matematika" required><br><br>

                <label for="dpk">Nilai DPK:</label>
                <input type="number" name="dpk" required><br><br>

                <input type="submit" name="hitung" value="Hitung Grade">
            </form>

            <?php
            if (isset($_POST['hitung'])) {
                $pabp = $_POST['pabp'];
                $matematika = $_POST['matematika'];
                $dpk = $_POST['dpk'];

                // hitung rata-rata nilai
                $rata_rata = ($pabp + $matematika + $dpk) / 3;

                // Menentukan grade berdasarkan rata-rata nilai
                if ($rata_rata >= 80 && $rata_rata <= 100) {
                    $grade = "A";
                } elseif ($rata_rata >= 75 && $rata_rata < 80) {
                    $grade = "B";
                } elseif ($rata_rata >= 65 && $rata_rata < 75) {
                    $grade = "C";
                } elseif ($rata_rata >= 45 && $rata_rata < 65) {
                    $grade = "D";
                } elseif ($rata_rata >= 0 && $rata_rata < 45) {
                    $grade = "E";
                } else {
                    $grade = "K";
                }

                echo "<h3>Hasil Perhitungan Grade Rata-rata</h3>";
                echo "Rata-rata Nilai: $rata_rata<br>";
                echo "Grade: $grade";
            }
            ?>
        </div>
    </div>
</body>

</html>