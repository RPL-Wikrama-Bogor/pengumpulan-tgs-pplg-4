<?php
    $no_pegawai;
    $no_gologan;
    $tanggal;
    $bulan;
    $tahun;
    $no_urutan;
    $tanggal_lahir;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NO-11</title>
</head>
<style>

</style>
<body>
    <form action="#">
        <p>
            <label for="">Nomer Pegawai</label>
            <input type="text" name="nomer" placeholder="nomer pegawai">
            <input type="submit" value="Submit Button">
        </p>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $no_pegawai = $_POST['$no_pegawai'];
        $no_pegawai = strval['$no_pegawai'];

        if($no_pegawai < 11) {
            echo "no pegawai tidak sesuai";
        }
        else{
            $no_gologan = substr($no_pegawai, 0,1);
            $tanggal = substr($no_pegawai, 1,2);
            $bulan = substr($no_pegawai, 2,3);
            $tahun = substr($no_pegawai, 3,2);
            $no_urutan = substr($no_pegawai, 9,2);

            if($bulan == "1"){
                $bulan = "Januari";
            }else if($bulan == "2"){
                $bulan = "Februari";
            }else if($bulan == "3"){
                $bulan = "Maret";
            }else if($bulan == "4"){
                $bulan = "April";
            }else if($bulan == "5"){
                $bulan = "Mei";
            }else if($bulan == "6"){
                $bulan = "Juni";
            }else if($bulan == "7"){
                $bulan = "Juli";
            }else if($bulan == "8"){
                $bulan = "Agustus";
            }else if($bulan == "9"){
                $bulan = "September";
            }else if($bulan == "10"){
                $bulan = "Oktober";
            }else if($bulan == "11"){
                $bulan = "November";
            }else{
                $bulan = "Desember";
            }

            $tanggal_lahir = $tanggal . " " . $bulan . " " . $tahun;

            echo "No golongan : " . $no_gologan . "Tanggal lahir : " . $tanggal_lahir . "No urutan : " . $no_urutan;
        }
    }

?>