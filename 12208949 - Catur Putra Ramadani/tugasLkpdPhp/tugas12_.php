<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <style>
            /* Tampilan default untuk semua lebar layar */
            body {
                background-image: linear-gradient(to bottom right, rgb(120, 59, 139), rgb(92, 138, 237), rgb(127, 193, 250));
                background-repeat: no-repeat;
                background-size: cover;
                padding: 190px;
            }

            h2 {
                color: #141E46;
            }

            .form-style-3 {
                max-width: 450px;
                font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            }

            .form-style-3 label {
                display: block;
                margin-bottom: 10px;
            }

            .form-style-3 label>span {
                float: left;
                width: 100px;
                color: #141E46;
                font-weight: bold;
                font-size: 13px;
                text-shadow: 1px 1px 1px #fff;
            }

            .form-style-3 fieldset {
                border-radius: 10px;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                margin: 0px 0px 10px 0px;
                border: 1px solid #141E46;
                padding: 20px;
                background: #FFF4F4;
                box-shadow: inset 0px 0px 15px #FFE5E5;
                -moz-box-shadow: inset 0px 0px 15px #FFE5E5;
                -webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
            }

            .form-style-3 textarea {
                width: 250px;
                height: 100px;
            }

            .form-style-3 input[type=text],
            .form-style-3 input[type=date],
            .form-style-3 input[type=datetime],
            .form-style-3 input[type=number],
            .form-style-3 input[type=search],
            .form-style-3 input[type=time],
            .form-style-3 input[type=url],
            .form-style-3 input[type=email],
            .form-style-3 select,
            .form-style-3 textarea {
                border-radius: 3px;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border: 1px solid #141E46;
                outline: none;
                color: #141E46;
                padding: 5px 8px 5px 8px;
                box-shadow: inset 1px 1px 4px #FFD5E7;
                -moz-box-shadow: inset 1px 1px 4px #FFD5E7;
                -webkit-box-shadow: inset 1px 1px 4px #FFD5E7;
                background: #FFEFF6;
                width: 50%;
                border-radius: 50px;
                margin: 0px 10px 10px 10px;
            }

            .form-style-3 input[type=submit],
            .form-style-3 input[type=button] {
                background: #EB3B88;
                border: 1px solid #C94A81;
                padding: 5px 15px 5px 15px;
                color: #141E46;
                box-shadow: inset -1px -1px 3px #FF62A7;
                -moz-box-shadow: inset -1px -1px 3px #FF62A7;
                -webkit-box-shadow: inset -1px -1px 3px #FF62A7;
                border-radius: 3px;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                font-weight: bold;
            }

            .required {
                color: #141E46;
                font-weight: normal;
            }

            .button {
                background-color: #A084E8;
                border-radius: 25px;
                border-color: #A084E8;
            }

            @media (max-width: 768px) {
                body {
                    padding: 100px;
                    height: 100vh;
                }

                .form-style-3 input[type=text],
                .form-style-3 input[type=date],
                .form-style-3 input[type=datetime],
                .form-style-3 input[type=number],
                .form-style-3 input[type=search],
                .form-style-3 input[type=time],
                .form-style-3 input[type=url],
                .form-style-3 input[type=email],
                .form-style-3 select,
                .form-style-3 textarea {
                    width: 100%;
                }
            }

            @media (max-width: 480px) {
                body {
                    padding: 50px;
                    height: 100vh;
                }

                .form-style-3 {
                    max-width: 50%;
                }

                .form-style-3 input[type=text],
                .form-style-3 input[type=date],
                .form-style-3 input[type=datetime],
                .form-style-3 input[type=number],
                .form-style-3 input[type=search],
                .form-style-3 input[type=time],
                .form-style-3 input[type=url],
                .form-style-3 input[type=email],
                .form-style-3 select,
                .form-style-3 textarea {
                    width: 100%;
                    margin: 0;
                }
            }
        </style>
        </style>
        <form action="" method="post">
            <h2>Input Waktu</h2>
            <div class="form-style-3">
                <form>
                    <fieldset>
                        <br>
                        <label for="field1"><span>Jam <span class="required">*</span></span><input type="number" class="input-field" name="jam" value="" /></label>
                        <label for="field2"><span>Menit <span class="required">*</span></span><input type="number" class="input-field" name="menit" value="" /></label>
                        <label for="field3"><span>Detik <span class="required">*</span></span><input type="number" class="input-field" name="detik" value="" /></label>
                        <button class="button" type="submit" value="Submit" name="submit">Input</button>
                        <br><br>
                </form>

                <?php

                if (isset($_POST['submit'])) {
                    $jam = $_POST['jam'];
                    $menit = $_POST['menit'];
                    $detik = $_POST['detik'];

                    $detik = $detik + 1;

                    if ($detik >= 60) {
                        $menit++ && $detik = 0;

                        if ($menit >= 60) {
                            $jam++ && $menit = 0 && $detik = 0;
                        } else if ($jam >= 24) {
                            $jam = 0;
                            $menit = 0;
                            $detik = 0;
                        }
                    }

                    echo "$jam:$menit:$detik";
                }

                ?>
        </form>
    </center>
</body>

</html>