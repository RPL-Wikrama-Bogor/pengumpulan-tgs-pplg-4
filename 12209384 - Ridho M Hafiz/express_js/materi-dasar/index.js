//angka
let bilanganBulat = 43
let bilanganPecahan = 3.14

//string(teks)
let teks1 = 'hello world'
let teks2 = "contoh string"

//bollean
let benar = true
let salah = false

//null
let tidakAdaNilai = null
//undefined
let variabelBelumDiisi;

//syimbol
const simbolUnik = Symbol('deskripsi simbol')
console.log(simbolUnik)

//array
let angka = [1, 2, 3, 4, 5]

//function
function tambah(a, b){
    return a + b
}
console.log(tambah(3, 4))

//objek
let siswa ={
    nama: 'rafly',
    kelas: 'XI',
    jurusan: 'RPL'
}
console.log(siswa)

//OPERATOR
let hasilPertambahan = 5 + 3 
console.log(hasilPertambahan)

let hasilPengurangan = 10 - 5
console.log(hasilPengurangan)

let hasilPerkalian = 20 * 3 
console.log(hasilPerkalian)

let hasilPembagian = 50 / 4
console.log(hasilPembagian)

let hasilSisaBagi = 9 % 4
console.log(hasilSisaBagi)

//tidak sama dengan(!=)
let hasilPerbandingan1 = 10 != 5
console.log(hasilPerbandingan1)

let hasilPerbandingan2 = 8 > 5
console.log(hasilPerbandingan2)

let hasilPerbandingan3 = true && false 
console.log(hasilPerbandingan3)

let hasil = 3 + 5 && 4 + 5 == 9 || false
console.log(hasil)

//operator penugasan
let angka1 = 5
angka1 += 3
console.log(angka1  )

//null checking
let objek = null 
let nilai= objek?.properti

//kondisional/ternary
let umur = 16
let status = (umur >= 16)? "Dewasa" : "anak anak"
console.log(status)

//iff statment
if(umur >= 18){
    status = "Dewasa"
}else if(umur >= 12 && umur < 18){
    status = "remaja"
}
console.log(status)

//switch
let warna = "merah"
let warnaApa
switch (warna) {
    case "kuning":
        warnaApa = "warna kuning"
        break;

    case "merah":
        warnaApa = "warna merah"        
        break;
    case "hijau":
        warnaApa = "hijau"
        break;
    default:
        warnaApa = "tidak terdefinisi"
        break;
}
console.log(warnaApa)

//mendefinisikan function
function sapa(nama){
    console.log(`halo ${nama}`)
}
//memanggil function
sapa('rafly')

//pure function
function calculateGST(productPrice){
    return productPrice * 0.05
}
console.log(calculateGST(15))


//arrow function
let sum =(a, b) => {
    return a + b
}
// alert(sum(1, 2))

//first-class function
const greet = function(nama,kelas){
    console.log(`hello ${nama} kelas ${kelas}`)
}
const sayHello = greet
sayHello('rafly','11')


//default parameter dalam function
function sapa1(nama= "pengunjung"){
    console.log(`halo ${nama}`)
}

sapa1()//argumen kosong
sapa1('rafly')//argumen terisi


// let jumlah2 = 10

// let total = jumlah2 + (hargaSatuan || 0)
// console.log(hargaSatuan)


// let harga2 = hargaSatuan2 !== undefined?
// hargaSatuan2 : 0
// console.log(harga2)


// let harga3 = hargaSatuan3 ?? 0
// console.log(harga3)

//method map() =membuat array baru dengan elemen yang dihasilkan dari tranformasi array
const number3 = [1, 2, 3, 4, 5]
const doubles1 = number3.map((numbers) => numbers * 2)
console.log(doubles1)

//filter()
const numbers1 = [1, 2, 3, 4, 5]
const eventNumbers = numbers1.filter((number) => number % 2 == 0)
console.log(eventNumbers)

//reduce(menggabungkan semua elemen array menjadi satu nilai)
const _numberReduce = [1, 2, 3, 4, 5]
const _sumReduce = _numberReduce.reduce((accumulator, currentValue) => ! accumulator + currentValue , 0)
console.log(_sumReduce)

//foreach
const fruit = [ 'apple', 'banana', 'cherry'];
fruit.forEach((fruit) => console.log(fruit));
//sort() =mengurutkan 
const fruits = [ 'banana', 'chery', 'apple'];
fruits.sort();

//find
const numbers2 = [1, 2, 3, 4, 5];
//mencari elemen pertama yang lebih besar dari 3
const result = numbers2.find((number) => number > 3)
console.log(result);

//soal
const siswa2 = {
    name: 'Lisa',
    age: 20,
    major: 'Computer Science',
  };
  
  const siswa2JSON = JSON.stringify(siswa2);
  console.log(siswa2JSON);


//soal
const number = [9, 8, 7, 6, 11, 12, 13, 14, 15];
const doubles = number.map((number) => number * 2);

// Filter angka dalam rentang 16 hingga 22
const filteredNumbers = doubles.filter((number) => number >= 16 && number <= 22);

// Urutan angka yang telah difilter
filteredNumbers.sort();

console.log(filteredNumbers [0]);
