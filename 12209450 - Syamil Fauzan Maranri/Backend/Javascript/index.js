/** @format */

let bilanganBulat = 43;
let bilanganPecahan = 3.14;

let teks1 = "Hello world";
let teks2 = "Contoh String";

let benar = true;
let salah = false;

let tidakAdaNilai = null;
let variableBelumDiisi; //gaada isi

let nilai1 = ""; //string blm diisi / nilai kosong
let nilai2 = null; //null tidak ada isinya

const simbolUnik = Symbol("Testing");

console.log(simbolUnik);

let angka = [1, 2, 3, 4, 5];

function tambah(a, b) {
  return a + b;
}

console.log(tambah(3, 4));

let siswa = {
  nama: "Syamil",
  kelas: "XI",
  jurusan: "PPLG",
};

// operator

let hasilPertambahan = 5 + 2;

let hasilPengurangan = 10 - 2;

let hasilPerkalian = 3 * 2;

let hasilPembagian = 8 / 2;
let hasilSisaBagi = 17 % 2;

// operator perbandingan

let hasilp1 = 5 == 8; //hasilnya true
let hasilp2 = 10 != 8; //hasilnya true
let hasilp3 = 7 > 5; //hasilnya true
let hasilp4 = 7 < 3; //hasilnya false

let hasilp5 = true && false; //hasilnya false
let hasilp6 = !true; //hasilnya true

let hasil = (2 + 5 == 7 && 5 + 4 == 9) || true;
console.log(hasil);

//operator penugasan

let angkaP = 5;
angkaP += 2;

//operator null checking

let objek = null;
let nilai = objek?.properti;

console.log(nilai);

let umur = 16;
let status = umur >= 18 ? "Dewasa" : "Anak-anak";

console.log(status);

if (umur >= 18) {
  status = "Dewasa";
} else if (umur >= 12 < 18) {
  status = "Remaja";
} else {
  status = "Anak-anak";
}

console.log(status);

// switch statement berisi string tidak bisa integer
let warna = "Ungu";
let warnaApa;

switch (warna) {
  case "Merah":
    warnaApa = "Warna merah";
    break;
  case "Ungu":
    warnaApa = "Warna Ungu";
    break;
  case "Hijau":
    warnaApa = "Warna hijau";
    break;
  default:
    warnaApa = "Tidak terdefinisi";
    break;
}

console.log(warnaApa);

// function js
function sapa(nama) {
  console.log(`Halo ${nama}`);
}
sapa("Syamil");

// pure function
function calculateGST(productPrice) {
  return productPrice * 0.05;
}
console.log(calculateGST(15));

// arrow function
let sum = (a, b) => {
    return a + b
}

alert(sum(3, 2))
// first-class function

const greet = function(nama, rombel){
    console.log(`Hello! nama saya ${nama},  Rombel ${rombel}`)
}
const sayHello = greet
sayHello(`Syamil`, `PPLG XI-4`)

//penggunaan default value
function sapa1(nama = "siswa"){
    console.log(`Halo ${nama}`)
}

sapa1()// argumen kosong
sapa1(`kamu`)// argumen terisi

// mengatasi variable yang undifiend

let jumlah1 = 10
let hargaSatuan
let total = jumlah1 + (hargaSatuan || 0)

// operator ternary
let hargaSatuan1;
let harga1 = hargaSatuan1 !== undefined ?
hargaSatuan1 : 0

console.log(harga1)

// nullish coalesical operator
let hargaSatuan3
let harga3 = hargaSatuan3 ?? 0
console.log(harga3)

//transformasi array
const numbers = [1, 2, 3, 4, 5]
const doubles = numbers.map((numbers) => numbers *2)
console.log(doubles)

// filter
const number1 = [1, 2, 3, 4, 5]
const evenNumbers = number1.filter((number) => number % 2 === 0)
console.log(evenNumbers)

// reduce
const _numberReduce = [1, 2, 3, 4, 5]
const _sumReduce = _numberReduce.reduce((accumulator, currentValue) => accumulator + currentValue, 0)
console.log(_sumReduce)

// foreach
const fruits = ['apple', 'durian', 'banana'];
fruits.forEach((fruit)=> console.log(fruit))

// sort
const fruits2 = ['apple', 'durian', 'banana'];
fruits2.sort();
console.log(fruits2)

// find
const numbers2 = [1, 2, 3, 4, 5, 6, 7];
const result2  = numbers2.find((number) => number >3);
console.log(result2)



