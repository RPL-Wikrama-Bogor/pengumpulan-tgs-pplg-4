<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Motor</title>
    <style>
body {
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    background-image: url('img4.avif');
    background-size: cover;
    display: flex;
    flex-direction: column; /* Mengatur tata letak menjadi kolom */
    align-items: center; /* Mengatur tata letak horizontal ke tengah */
    justify-content: center; /* Mengatur tata letak vertikal ke tengah */
    min-height: 100vh; /* Mengisi seluruh tinggi viewport */
}

h2 {
    text-align: center;
    font-size: 24px;
    color: #333;
    margin-bottom: 20px; /* Menambahkan margin bawah agar terpisah dari form */
}

form {
    color:white;
    max-width: 600px;
    padding: 20px;
    background-color: #0E2954;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold; /* Menambahkan ketebalan teks label */
}

input[type="text"],
input[type="number"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

select 
{
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url("arrow-down_6423873.png"); /* Ganti dengan ikon panah pilihan Anda */
    background-repeat: no-repeat;
    background-position: right center;
    background-size: 16px 16px; /* Mengatur ukuran panah (contoh: 16px x 16px) */
    padding-right: 20px; /* Menambahkan ruang agar panah tidak bertumpuk dengan teks */
}


button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #1F6E8C;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold; /* Menambahkan ketebalan teks tombol */
}

button[type="submit"]:hover {
    background-color: #1D267D;
}

    </style>
</head>
<body>
<h2>Form Pengisian</h2>
    <form action="" method="post">
        <div style="display: flex;">
        <label for="nama">Masukkan Nama Anda:</label>
        <input type="text" min="0" name="nama" id="nama" autocomplete="off" require>
        </div>
        <div style="display: flex;">
        <label for="waktu">Lama Waktu Rental(per Hari):</label>
        <input type="number" min="0" name="waktu" id="waktu" require>
        </div>
        <div style="display: flex;">
        <label for="jenis">Jenis Motor:</label>
        <select name="jenis" require>
            <option hidden disabled selected>Pilih Jenis Motor</option>
            <option value="Scooter">Scooter</option>
            <option value="Aerox">Aerox</option>
            <option value="Vario">Vario</option>
        </select>
        </div>
        <button type="submit" name="sewa">Sewa Motor</button>
    </form>

    <?php
    require 'controller.php';
    $logic = new Pembelian();
    $logic->setHarga(75000,85000,82000);
    if(isset($_POST['sewa'])) {
        $logic->nama_pengguna = $_POST['nama'];
        $logic->lamaWaktu = $_POST['waktu'];
        $logic->jenisYangDipilih = $_POST['jenis'];

        $logic->cetakBukti();

    }
    ?>

</body>
</html>