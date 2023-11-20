<?php
if(!session_id()) session_start();
//".." <= artinya keluar dari file tersebut seperti contoh di bawah 
require_once '../app/init.php';

$app = new App;