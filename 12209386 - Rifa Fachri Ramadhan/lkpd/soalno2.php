<form action="" method="post">
    <label for="">Masukan No 1</label>
    <input type="number" name="bil1" >
    <br>
    <label for="">Masukan No 2</label>
    <input type="number" name="bil2" >
    <br>
    <label for="">Masukan No 3</label>
    <input type="number" name="bil3" >
    <input type="submit" name="submit">

</form>

<?php

if(isset($_POST['submit'])){
    $bil1 =$_POST['bil1'];
    $bil2 =$_POST['bil2'];
    $bil3 =$_POST['bil3'];

    $terbesar = max($bil1, $bil2, $bil3);

    echo "Bilangan terbesar adalah " . $terbesar;

    
}



?>