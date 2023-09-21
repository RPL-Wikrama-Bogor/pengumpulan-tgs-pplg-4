<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        b {
            color: #007BFF;
        }

        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Informasi Nilai Siswa</h1>

        <?php
        $nilai = [90, 76, 74, 84, 92, 86];

        echo "Nilai yang saya peroleh: <b>" . implode(", ", $nilai) . "</b> <br>";
        echo "<br>";
        echo "Dari keseluruhan nilai yang paling tinggi ialah : <b>" . max($nilai) . "</b> <br>";
        echo "<br>";
        echo "Sedangkan nilai yang paling kecil ialah : <b>" . min($nilai) . "</b> <br>";
        echo "<br>";

        $nilai2 = [];
        foreach ($nilai as $nl) {
            $nilai2[] = $nl;
        }
        asort($nilai2);
        echo "Apabila diurutkan dari nilai yang terkecil menjadi : <b>" . implode(", ", $nilai2) . "</b> <br />";
        echo "<br>";
        arsort($nilai2);
        echo "Apabila diurutkan dari nilai yang terbesar menjadi : <b>" . implode(", ", $nilai2) . "</b> <br />";
        echo "<br>";
        echo "Apabila dibulatkan, rata-rata dari keseluruhan nilai saya menjadi : <b>" . round(array_sum($nilai) / count($nilai)) . "</b> <br />";
        echo "<br>";
        $key = array_search(min($nilai), $nilai);
        $nilaiGanti = [75];
        array_splice($nilai, $key, 1, $nilaiGanti);

        echo "Setelah melakukan perbaikan untuk nilai <b>" . min($nilai2) . "</b>, saya mendapat nilai <b>$nilaiGanti[0]</b>. Jadi nilai saya sekarang : <b>" . implode(", ", $nilai) . "</b> <br />";
        ?>
    </div>
</body>
</html>
