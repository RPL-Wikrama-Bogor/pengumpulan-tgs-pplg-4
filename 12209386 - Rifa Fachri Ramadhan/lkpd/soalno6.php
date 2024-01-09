<?php
for($i = 1; $i <=10; $i++ ){
?>
<form action="" method="post">
    <label for="">Masukan Nilai <?= $i?></label>
    <input type="number" name="nilai[]">
    <br>
<?php }?>
    <input type="submit" name="submit">
</form>

<?php  
if(isset($_POST['submit'])){

    $nilai =$_POST['nilai'];

    $nilai_tertinggi = max($nilai);
    $jumlahOrng = 0;
    
    foreach($nilai as $n){
        if($n == $nilai_tertinggi){
            $jumlahOrng++;
        }
    }
    echo "<h4>Nilai Tertinggi : $nilai_tertinggi<h4> <br>";
    echo "Jumlah orang yang mendapatkan nilai tertinggi : $jumlahOrng";
}

?>


