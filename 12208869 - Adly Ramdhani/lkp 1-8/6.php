<!DOCTYPE html>
<html>
<head>
    <title>Input Nilai Ujian Siswa</title>
</head>
<body>
    <form  method="post" action="">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "Masukkan nilai ujian ke-$i: <input type='number' name='nilai[]'><br>";
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil nilai-nilai ujian dari form
            $nilai_ujian = $_POST["nilai"];
        
            // Mencari nilai tertinggi dari array nilai_ujian
            $nilai_tertinggi = max($nilai_ujian);
        
            // Menghitung berapa banyak siswa yang mendapatkan nilai tertinggi
            $jumlah_nilai_tertinggi = array_count_values($nilai_ujian)[$nilai_tertinggi];
        
            // Menghitung persentase siswa yang mendapatkan nilai tertinggi
            $persentase_tertinggi = ($jumlah_nilai_tertinggi / 10) * 100;
        
            // Menampilkan nilai tertinggi dan persentase siswa yang mendapatkannya
            echo "Nilai tertinggi yang didapat siswa: $nilai_tertinggi<br>";
            echo "Persentase siswa yang mendapatkan nilai tertinggi: " . number_format($persentase_tertinggi, 2) . "%<br>";
        }
        ?>
        <input type="submit" value="Hitung">
    </form>
</body>
</html>





