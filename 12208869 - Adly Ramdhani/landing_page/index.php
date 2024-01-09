<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      

        .baris {
            box-sizing: border-box;
            padding: 20px;
            display: flex;
            align-items: center;
            border-radius: 5px;
        }

        .kolom {
            flex: 1;
            height: 100px;
            background-color: #176B87;
            margin: 3px;
            box-sizing: border-box;
            padding: 40px;
             color: beige;
             text-align: center ;
             font-weight: bold;
             font-size: 25px;

        }

        .button1 {
            background-color: #176B87;
            border-radius: 50px;
            padding: 7px;
            margin-left:1180px;
            color: beige;
            cursor: pointer;
            /* float: right; */
            
        }
        .btn{
            background-color: beige;
            border-radius: 50px;
            padding: 7px;
            color: #CD0C0D;
            cursor: pointer;
        }

        ol {
            background-color: #176B87;
            color: beige;
            width: 50%;
            float: left;
            padding: 20px;
            height: 330px;
            box-sizing: border-box;
          
        }

        img {
            width: 500px;
            margin-left:150px;
            margin-right: 0px;
            /* float: right; */
             border-radius: 5px;
        }

        form {
            width: 600px;
            padding: 20px;
            border: 1px solid #176B87;
            border-radius: 5px;
            background-color: #176B87;
            height: 500px;
            margin-left: 25px;
            color: beige;
   
        }
        h3{
            margin-left: 900px;
            margin-top: -580px;
        }
        .input{
            border-color: #ccc;
            border-radius: 15px;
            padding: 10px;
            width: 580px;
          
        }
        .txt{
             border-radius: 30px;
            width: 580px;
        }

        @media (max-width: 768px) {
            .baris {
                flex-direction: column;
            }

            .kolom {
                width: 100%;
            }

            ol {
                width: 100%;
                float: none;
                height: auto;
            }

            img {
                width: 100%;
                margin: 0;
            }

            form {
                width: 100%;
                margin-left: 0;
            }
            
            h3 {
                margin-left: 0;
                margin-top: 20px;
            }
        }
    </style>
</head>

<body>

    <button class="button1" id="myButton">Verifikasi akun</button>

    <section class="baris">
        <ol>
            <h2>Gunung Salak</h2>
            
            <li>Gunung Salak merupakan salah satu gunung yang memiliki banyak cerita mistis di dalamnya. Gunung ini berada di Bogor Jawa Barat dan memiliki view indah serta memanjakan mata. 
                Banyak sekali cerita horor dan kejadian janggal yang ada di tempat ini. Di bawah kepemimpinanya Majapahit belum mampu menakkukkannya.</li>
            <li>Gunung Salak Endah terletak di sebelah Barat Kabupaten Bogor, jarak tempuhnya kurang lebih 40 Km dari Kota Bogor.
                 Kawasan GSE Merupakan hamparan pegunungan yang masih alami, sejuk dan udaranya segar.</li>
        </ol>
        <img src="img/gunung.jpeg">
    </section>

    <section class="baris">
        <div class="kolom kolom1">Gunung Gede</div>
        <div class="kolom kolom2">Gunun Krakatau</div>
        <div class="kolom kolom3">Gunung Pangrango</div>
        <div class="kolom kolom3">Gunung JayaPura</div>
        <div class="kolom kolom4">Gunung Bromo </div>
    </section>
<center>
    <form>
        <label for="nama">Nama:</label>
        <br>
        <br>
        <input  class="input" type="text" id="nama" name="nama" ><br><br>
    
        <label for="email">Email:</label>
        <br>
        <br>
        <input class="input" type="email" id="email" name="email" ><br><br>
    
        <label class="input" name="pesan">Pesan:</label><br>
        <br>
        <textarea  class="txt" id="pesan" name="pesan" rows="10" cols="45"></textarea><br><br>
        <input class="file" type="file" id="file" name="file"><br><br>
        <button class="btn" type="submit" value="Kirim" style="margin-left: 500px;">Join Now</button>
    </form>
    <br><br>
    </center>
    
</body>

</html>