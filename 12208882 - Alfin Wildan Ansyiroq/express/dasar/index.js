let bilanganBulat = 14;
let bilanganpPecahan = 3.14;

let teks1 = "Hello World";
let teks2 = "Contoh String";

let benar = true;
let salah = false;

let tidakAdaNilai = null;
let variableBelumDiisi; //gaada isi

let nilai1 = ""; //string blm diisi/ nilai kosong
let nilai2 = null; //gaada isinya

const simbolUnik = Symbol("Cihuy");

console.log(simbolUnik);

let angka = [1, 2, 3, 4, 5];

function tambah(a, b) {
  return a + b;
}
console.log(tambah(3, 4));

let siswa = {
  nama: "Alfin",
  kelas: "XI",
  jurusan: "PPGL",
};

//operator
let hasilPertambahan = 5 + 2;

let hasilPengurangan = 9 - 2;

let hasilPerkalian = 7 * 2;

let hasilPermbagian = 14 / 2;

let hasilSisaBagi = 9 % 2;

// operator perbandingan

let hasilp1 = 5 == 8; //hasilnya false karena 5 tidak sama dengan 8
let hasilp2 = 10 != 8; //hasilnya true karena 10 tidak sama dengan 8
let hasilp3 = 7 > 5; //hasilnya true
let hasilp4 = 7 < 5; //hasilnya false

let hasilp5 = true && false; // hasilnya false
let hasilp6 = !true; // hasilnya false

let hasil = (2 + 5 == 7 && 3 + 4 == 9) || true;

console.log(hasil);

// operator penugasan
let angkaP = 5;
angkaP += 2;

// operator nul checking
let objek = null;
let nilai = objek?.properti;

console.log(nilai);

let umur = 16;
let status = umur >= 18 ? "Dewasa" : "Anak anak";
console.log(status);

if (umur >= 18) {
  status = "Dewasa";
} else if (umur >= 12 && umur < 18) {
  status = "Remaja";
} else {
  status = "Anak anak";
}

console.log(status);

// switch statment berisi string tidak bisa integer
let warna = "Merah";
let warnaApa;

switch (warna) {
  case "Merah":
    warnaApa = "warna merah";
    break;

  case "Kuning":
    warnaApa = "warna kuning";
    break;

  case "Hijau":
    warnaApa = "warna hijau";
    break;

  default:
    warnaApa = "Tidak terdefinisi";
    break;
}
console.log(warnaApa);

// function js
function sapa(nama) {
  console.log(`halo ${nama}`);
}

sapa("wildan");

//pure function
function calculateGST(productPrice) {
  return productPrice * 0.05;
}
console.log(calculateGST(15));

//arrow function
let sum = (a, b) => {
  return a + b;
};
alert(sum(1, 6));

// first-class function
const greet = function (nama, kelas, jurusan) {
  console.log(`Hello, saya ${nama} saya kelas ${kelas} jurusan ${jurusan}`);
};
const sayHello = greet;
sayHello("dans", "XI", "PPLG");

//penggunaan default value
//1.
function sapa1(nama = "siswa") {
  console.log(`halo ${nama}`);
}
sapa1(); // argumen kosong
sapa1("kamu"); // argumen terisi

//mengatasi variable yang tidak terdefinisi
let jumlah1 = 77;
let hargaSatuan;
let total = jumlah1 + (hargaSatuan || 0);

// opertor ternary
let hargaSatuan1;
let harga1 = hargaSatuan1 !== undefined ? hargaSatuan1 : 0;

console.log(harga1);

//nullish coalescing operator

let hargaSatuan3;
let harga3 = hargaSatuan3 ?? 0;
console.log(harga3);

//transformasi array
const numbers = [1, 2, 3, 4, 5];
const doubles = numbers.map((numbers) => numbers * 2);
console.log(doubles);

//filter dan map sama untuk menghasilkan array baru
const number1 = [1, 2, 3, 4, 5];
const evenNumbers = number1.filter((number) => number % 2 === 0);
console.log(evenNumbers);

//reduce dan sum
const _numberReduce = [1, 2, 3, 4, 5];
const _sumReduce = _numberReduce.reduce(
  (accumulator, currentValue) => accumulator + currentValue,
  0
);
console.log(_sumReduce);

//foreach
const fruits = ["apple", "banana", "cherry"];
fruits.forEach((fruit) => console.log(fruit));

// sort
const fruits1 = ["Biji ketapang", "pisang", "durian belanda"];
fruits1.sort();
console.log(fruits1);

// find
const numbers2 = [1, 2, 3, 4, 5, 6, 7];
const result2 = numbers2.find((number) => number > 3);
console.log(result2);

