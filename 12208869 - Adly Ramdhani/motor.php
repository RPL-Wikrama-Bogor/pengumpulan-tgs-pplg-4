<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
    <link rel="shortcut icon" href="img/lsc2.webp">
</head>
<body>
    <center>

    <img src="img/lsc.webp" alt="" width="250px" style="margin-top: 20px;">

    <p>---------------------------------------------</p>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nama">Nama Pelanggan</label></td>
                <td><Input type="text" name="nama" id="nama"></Input></td>
            </tr>
            <tr>
                <td><label for="lama">Lama Waktu (Per-Hari)</label></td>
                <td><Input type="number" name="lama" id="lama"></Input></td>
            </tr>
            <tr>
                <td><label for="">Pilih Tipe Motor</label></td>
                <td><select name="motor" required>
                    <option hidden>Pilih Jenis</option>
                    <option value="Sport1">H2</option>
                    <option value="Sport2">Ducati</option>
                    <option value="Sport3">R1M</option>
                    <option value="Sport4">CBR1000RR</option>  
                </select></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Pinjam</button></td>
            </tr>
        </table>
    </form>
    <p>---------------------------------------------</p>



<?php

class Rental
{
    public  $h2 = 100000,
            $ducati = 200000,
            $r1m = 150000,
            $cbr1000rr = 170000,
            $diskon,
            $nama,
            $hari,
            $pajak = 10000,
            $member = ["adly", "samsul", "catur", ];

}

class Pinjam extends Rental
{
    public function total($harga, $lama)
    {
        if(in_array($_POST['nama'], $this->member)){
            $this->diskon = 0.05;
            echo $_POST['nama'] . " Berstatus sebagai member dan berhak mendapat Diskon 5%" . "<br>";
        } else{
            $this->diskon = 0;
            echo $_POST['nama'] . " Tidak berstatus sebagai member, Diskon 0% <br>";
        }

        $diskon = (($harga * $lama) + $this->pajak) * $this->diskon; // kalau ini yang ditampilin bukannya diskon doang? bukan yang harus dibayar
        $total = (($harga * $lama) + $this->pajak) - $diskon;
        echo "Jenis Motor yang dirental: " . $_POST['motor'] . ", Selama " . $lama . " Hari <br>";
        echo "Harga rental per hari: " . $harga . "<br>";
        echo "pajak yang di bayar". $this->pajak. "<br>";
        echo "<br>";
        echo "Total yang harus dibayar adalah Rp. " . $total  . " (Sudah termasuk pajak & diskon)";
    }
}


if(isset($_POST['submit']))
    {
        $rental = new Pinjam();

        $tipe = $_POST['motor'];
        $hari = $_POST['lama'];

        if($tipe == "Sport"){
            $harga = $rental->h2;
            $gambar = "img/h2.jpeg";
        }else if($tipe == "Sport2"){
            $harga = $rental->ducati;
            $gambar = "img/ducati.jpeg";
        }else if($tipe == "Sport3"){
            $harga = $rental->r1m;
            $gambar = "img/r1m.jpeg";
        }else if($tipe == "Sport4"){
            $harga = $rental->cbr1000rr;
            $gambar = "img/honda.jpeg";
        }

        echo $rental->total($harga, $hari);
        echo "<br>";
    }

?>

<img src="<?= $gambar ?>" alt="" width="250px" style="margin-top: 20px">

</center>
</body>
</html>