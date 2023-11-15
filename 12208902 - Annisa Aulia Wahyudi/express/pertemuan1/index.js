let bilanganBulatn = 43
let bilanganPecahan = 3.14

let teks1 = 'hello world'
let teks2 = "contoh string"

let benar = true
let salah = false 

let tidakAdaNilai = null;
let variabelBelumDiisi;

const simbolUnik = Symbol('definisi simbol')
console.log(simbolUnik);

let angka = [1, 2, 3, 4, 5]

function tambah(a, b){
    return a + b
}

console.log(tambah(2, 4));

let siswa = {
    nama: "annisa",
    kelas: "XI",
    jurusan: "RPL"
}


//operator
let hasilPenjumlahan = 5 + 3
let hasilPengurangan = 10 - 5
let hasilPerkalian = 20 * 3
let hasilPembagian = 50 / 10
let hasilSisaBagi = 9 % 4

let hasil = 10 != 5
let hasilLebihDari = 8 > 7 //true

let hasilKondisional = 3 + 5 == 7 && 4 + 5 == 9 || false
console.log(hasilKondisional);


//penugasan
let angka1 = 5
angka1 += 3

//objek
let objek = null
let nilai = objek?.properti
console.log(nilai);

let umur = 18
let status = (umur >= 18) ? "dewasa" : "anak anak"
console.log(status);

if ( umur >= 18 ){
    status = "Dewasa"
} else if ( umur >= 12 && umur < 18 ){
    status = "Remaja"
} else {
    status = "Anak-Anak"
} 

console.log(status);

let warna = "kuning"
let warnaApa 
switch (warna) {
    case "kuning":
        warnaApa = "warna kuning"
        break;
    case "merah" :
        warnaApa = "warna merah"
    case "hijau" :
        warnaApa = "hijau"
    default:
        warnaApa = "tidak terdefinisi"
        break;
}
console.log(warnaApa);

// java scriptfunction
//mendefinisikan function
function sapa(nama){
    console.log(`hello ${nama}`);
} 
//memanggil function
sapa('ivan')

//pure function
function calculetGST(productPrice){
    return productPrice * 0.05
}
console.log(calculetGST(15));

// arrow function
let sum = (a, b) => {
    return a + b
}
alert (sum(1, 2))

//first-class function
const greet = function(nama, kelas){
    console.log(`saya ${nama} kelas ${kelas}` );
}
const sayHello = greet
sayHello('nisa', 11)

function sapa1(nama = "pengunjung") {
    console.log(`Halo ${nama}`);
}
sapa1()//argumen kosong
sapa1('aulia')//argumen terisi

//mengatasi variable yang tidak terdefinisi
let jumlah2 = 10
// let total = jumlah2 + (hargaSatuan || 0)

//operator ternary
hargaSatuan2 = 2
let harga2 = hargaSatuan2 !== undefined ?
hargaSatuan2 : 0

console.log(harga2)

hargaSatuan3 = 1
let harga3 = hargaSatuan3 ?? 0
console.log(harga3)

const numbers = [1, 2, 3, 4, 5]
const doubles = numbers.map((numbers) => numbers * 2)
const numbers1 = [1, 2, 3, 4, 5]
const eventNumbers = numbers1.filter( (number) => number % 2 === 0 )

//reduce
// bisa pake sum juga buat nambahin semua
const _numberReduce = [1, 2, 3, 4, 5]
const _sumReduce = _numberReduce.reduce((accumulator, currentValue) => accumulator + currentValue, 0)
console.log(_sumReduce);

//foreach
const fruits = ['apple', 'banana', 'cherry'];
fruits.forEach((fruits) => console.log(fruits));

//sort
const fruits1 = ['banana', 'apple', 'cherry']
fruits1.sort();

//find
const numbers2 =[1, 2, 3, 4, 5]
//mencari element pertama yang lebih besar dari 3
const result = numbers2.find((numbers2) => numbers2 > 3)
console.log(result);
// let nilai1 = ""
// let nilai2 = null

