<?php

// membuat array kosong
$buah = array();
$hobi = [];

// membuat array sekaligus mengisinya
$minuman = array("Kopi", "Teh", 1);
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

// membuat array dengan mengisi indeks tertentu
$anggota = ["Fema", "Putri"];
$anggota[1] = "Dian";
$anggota[2] = "Muhar";
$anggota[0] = "Sera";

//menampilkan array pada variabel $makanan yang bernomor index 0
echo $makanan[0];

//print array dengan menampilkan tipe data , jumlah karakter ,dan nomor index
var_dump($minuman);

//print array dengan nomor index
print_r($makanan);

var_dump($anggota);
?>