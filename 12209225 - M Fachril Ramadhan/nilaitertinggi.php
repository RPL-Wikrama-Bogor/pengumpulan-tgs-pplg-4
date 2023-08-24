<head>
    <title>Nilai Ujian Siswa</title>
</head>
<body>
    <h2>Input Nilai Ujian Siswa</h2>

    <form method="post">
        <?php
        $nilai = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            for ($i = 1; $i <= 10; $i++) {
                $input_name = "nilai_" . $i;
                $nilai[$i] = $_POST[$input_name];
            }

            $nilai_tertinggi = max($nilai);
            $jumlah_tertinggi = array_count_values($nilai)[$nilai_tertinggi];
            
            echo "<p>Nilai tertinggi yang diperoleh siswa: " . $nilai_tertinggi . "</p>";
            echo "<p>Jumlah siswa yang mendapatkan nilai tertinggi: " . $jumlah_tertinggi . "</p>";
        }
        ?>

        <p>Masukkan nilai ujian siswa:</p>
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <label for="nilai_<?php echo $i; ?>">Nilai siswa <?php echo $i; ?>:</label>
            <input type="number" name="nilai_<?php echo $i; ?>" required><br>
        <?php } ?>

        <br>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>