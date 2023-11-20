//integer
let bilanganBulat = 43
let bilanganpecahan = 3.14 

//string
let teks1 = ' Hello world!'
let teks2 = 'Contoh String'   

//tipe data dasar (boolean)[true or false]
let benar = true
let salah = false

//tipe data khusus (null)
let TidakAdaNilai =  null

//
let nilai1 =""
let nilai2 = null

//undefined
let variavelBelumDiiai;

//symbol
const symbolUnik = Symbol('deskripsi symbool')

//rray
let angka = [ 1, 2, 3, 4, 5]

//function
function tambah(a, b){
    return a + b
}
console.log(tambah(3,4))

//objek
let siswa = {
    nama : 'jhon',
    kelas: 'x',
    jurusan : 'rpl'
}

//operator 
// simbol atau karakter khusus yang digunakan untuk melakukan ioerasi oada tiope data. memungkinkan untuk perhitungan,manipulasi data
let hasill = 5 + 3
let hasilPenguranga = 10 -2
let hasilPerkalian = 20 * 3
let hasilPembagian = 50 / 10
let hasilSisaBagi = 9 % 4

//operator perbandingan membnadingkan dan mengembalikan nilai (trye atau false)
let hasil = 10!= 0; 
let hhasil =  2>5; //hasilnya true
let hasilll = 3 < 7 

//operator logika 
let hasiil = true&&false;

//operator penugasan 
let angka1 =  5
angka1 +=3

console.log(hasiil)

//null checking
let objek = null
let nilai = objek?.properti

console.log(nilai)

//operator kondisional
let umur = 19
let status = (umur >= 18) ? "Dewasa" : 'anak Anak'

//it statement mengeksekusi kode jika suatu kondisi terpenuhi

if(umur >= 18){
    statusa = "Dewasa"
}else if(umur >= 12 && umur < 18) {
    status = "Remaja"
}else{
    status ="Anak - Anak"
}
console.log(status)

//switch statement *khusu untuk string
let warna = "merah"
let warnaApa = ""
switch (warna) {
    case "kuning":
        warnaApa = "warna kuning"
        break;
    case "merah":
        warnaApa = "warna kuning"
        break;
    case "hijau":
        warnaApa = "tidak terdefinikasi"
        break;
}
console.log(warnaApa)

//fucntion 
function sapa(nama){
    console.log(`halo $(nama)`)
}
     sapa('ivan')


//pure function
function calculateGST(ProducktPrice){
    return ProducktPrice + 0.05
}

console.log(calculateGST(15))

//arrow function
let sum = (a, b) => {
    return a + b
}
alert(sum(1,2))

//first class function

const greet = function(nama, kelas){
    console.log(`hello , ${nama} kelas ${kelas}` )
}
const SayHello = greet
SayHello('Ivan' , '12')

// const 
//
function sapa1(nama="pengunjung "){
    console.log(`hello ${nama}`)
}
sapa1()//argumen kosong
sapa1('ivan')//argumen telah terisi

let niilai1 =""
let niilai2= null

//operator ternary = mengatasi ketika eror / undefined 
//let harga2 = hargasSatuan2 !== undefined ?
//hargasSatuan2 : 0

console.log(harga)

//nullish = 
let harga3 = hargaSatuan3 ?? 0
console.log(harga3)

//transformasi array dikalikan 2
const number = [1,2,3,4,5]

const doules = numbers.map((numbers) => numbers *2)

const nummbers1 = [1,2,3,4,5]
const evenNumbers = numbers1.filter((number) => number % 2 === 0 )

//array reduce
const _numberReduce = [1,2,3,4,5]
const _sumReduce = _numberReduce.reduce((accumulator, currentValue) => accumulator 
+currentValue, 0)
console.log(_sumReduce)

//foreach
const fruits = ['apple', 'banana','cherry'];
fruits.forEach((fruit) => console.log((fruit)));

//sort
const fruit = ['apple', 'banana','cherry'];
fruit.sort();
console.log(fruit)

//find
const numbers = [1,2,3,4,5];
const result = numbers.find((number) => number > 3);
console.log(result);

//tugas
const numberss = [1,2,3,4,5,6,7,8,9];
const angkaGanjil = numbers.filter(number => number % 2 !== 0);
console.log(angkaGanjil);