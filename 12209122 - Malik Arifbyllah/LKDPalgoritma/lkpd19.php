<?php 
class Bioskop {
    protected $Ekonomi = 0,
           $Vip = 0,
           $Eksekutif = 0,
           $KeuntunganEkonomi = 7,
           $KeuntunganVip = 0,
           $KeuntunganEksekutif = 0,
           $TotalTiketTerjual = 0,
           $TotalKeuntungan = 0;


    public function __construct($Ekonomi, $Vip, $Eksekutif) 
    {
        if (!is_numeric($Ekonomi) || !is_numeric($Vip) || !is_numeric($Eksekutif)) 
        {
            exit("<p class='error'>Input harus berupa angka</p>");
        } elseif ($Ekonomi > 50 || $Vip > 50 || $Eksekutif > 50) 
        {
            exit("<p class='error'>Input harus diantara 1 - 50</p>");
        }

        $this->Ekonomi = $Ekonomi;
        $this->Vip = $Vip;
        $this->Eksekutif = $Eksekutif;

        $this->TotalTiketTerjual = $Ekonomi + $Vip + $Eksekutif;

        $this->cariKeuntunganVip();
        $this->cariKeuntunganEksekutif();
        $this->TotalKeuntungan = $this->KeuntunganEkonomi + $this->KeuntunganVip + $this->KeuntunganEksekutif;
    }

    public function cariKeuntunganVip() 
    {
        if ($this->Vip >= 35) {
            $this->KeuntunganVip = 25;
        } elseif ($this->Vip >= 20 && $this->Vip <= 35) {
            $this->KeuntunganVip = 15;
        } else {
            $this->KeuntunganVip = 5;
        }
    }

    public function cariKeuntunganEksekutif() 
    {
        if ($this->Eksekutif >= 40) {
            $this->KeuntunganEksekutif = 20;
        } elseif ($this->Eksekutif >= 20 && $this->Eksekutif < 40) {
            $this->KeuntunganEksekutif = 10;
        } else {
            $this->KeuntunganEksekutif = 2;
        }
    }

    public function outputHasil()
    {
        echo "<p class='total output'> Total tiket terjual :" . $this->TotalTiketTerjual . "</p>";
        echo "<p class='outputEkonomi output'> Tiket ekonomi : " . $this->Ekonomi . "</p>";
        echo "<p class='outputVip output'> Tiket Vip : " . $this->Vip . "</p>";
        echo "<p class='outputEksekutif output'> Tiket Eksekutif : " . $this->Eksekutif . "</p>";
        echo "<p class='total output'> Total Keuntungan : " . $this->TotalKeuntungan . "%</p>";
        echo "<p class='keuntungan output'> Keuntungan Ekonomi : " . $this->KeuntunganEkonomi . "%</p>";
        echo "<p class='keuntungan output'> Keuntungan Vip : " . $this->KeuntunganVip . "%</p>";
        echo "<p class='keuntungan output'> Keuntungan Eksekutif : " . $this->KeuntunganEksekutif . "%</p>";
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD No 19</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <style>
        /* style.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.output-container {
    max-width: 400px;
    margin: 0 auto;
    padding: 40px;
    background-color: #ffffff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

h3 {
    font-size: 18px;
    margin-top: 20px;
    margin-bottom: 10px;
}

.top-input {
    margin-top: 10px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

.error {
    color: red;
    font-weight: bold;
    margin-top: 10px;
}

.output {
    margin-top: 20px;
    padding: 10px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.output p {
    margin: 5px 0;
}

.total {
    font-weight: bold;
}

.keuntungan {
    color: green;
}

.outputEkonomi {
    background-color: #ffeb3b;
}

.outputVip {
    background-color: #ff9800;
}

.outputEksekutif {
    background-color: #4caf50;
}

.empty-div {
    margin-top: 20px;
}


    </style>
    <div class="output-container">
        <form action="" method="post">
            <h2>Bioskop A</h2>
            <h3>Masukan Total Tiket</h3>
            <input type="text" class="top-input" name="Ekonomi" placeholder="Ekonomi"><br>
            <input type="text" name="Vip" placeholder="VIP"><br>
            <input type="text" name="Eksekutif" placeholder="Eksekutif"><br>
            <input type="submit" name="submit">
        </form>
        <div class="empty-div">
        
            <?php 
            if (isset($_POST["submit"])) {
                if (empty($_POST["Ekonomi"]) && empty($_POST["Vip"]) && empty($_POST["Eksekutif"])) {
                    echo "<p class='error'>Masukan input terlebih dahulu</p>";
                } else {
                    $Ekonomi = $_POST["Ekonomi"];
                    $Vip = $_POST["Vip"];
                    $Eksekutif = $_POST["Eksekutif"];
                    
                    $Bioskop = new Bioskop($Ekonomi,$Vip,$Eksekutif);
                    $Bioskop->outputHasil();
                }
            }
            ?>
        </div>
    </div>
</body>
</html>