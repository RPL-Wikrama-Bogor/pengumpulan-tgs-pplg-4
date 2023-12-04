let bilanganBulat = 43
let bilanganPecahan = 3.14

let teks1 = 'hello world'
let teks2 = "contoh string"

let benar = true
let salah = false

let tidakAdaNilai = null
let varibaelBelumDiisi;

let nilai1 = ""
let nilai2 = null

const simbolUnik = Symbol('deskripsi simbol')
console.log(simbolUnik)

let angka = [1 ,2 ,3 , 4, 5]

function tambah(a, b) {
    return a + b
}
console.log(tambah(3, 4))

let mahasiswa = {
    nama: 'Ardan',
    kelas: 'XI',
    jurusan: 'PPLG'
}

let hasilPertambahan = 5 + 3

let hasilPengurangan = 5 - 3

let hasilPerkalian = 5 * 3

let hasilPembagian = 6 / 3

let hasilModulus = 9 % 2

let hasilBoolean = 5 == 5 //hasilnya true //membandingkan

let hasil = 10 != 5 //hasilnya true

let hasilBesar = 8 > 5

let hasilKecil= 3 < 5

let hasilSamaDengan = 8 >= 5

let hasilAND = true && false

let hasil1 = 3 + 5 == 7 && 4 + 5 == 9

let angka1 = 5
angka1 += 3

let objek = null
let nilai = objek?.properti

console.log(nilai)

let umur = 18
let status = (umur >= 18) ? "Dewasa" : "Anak-Anak"

console.log(status)

if(umur >= 18) {
    status = "Dewasa"
}else if(umur >= 12 && umur < 18) {
    status = "Remaja"
}else{
    status = "Anak-Anak"
}

console.log(status)

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
        warnaApa = "warna hijau"
        break;
    default:
        warnaApa = "tidak terdefinisi"
        break;
}

console.log(warnaApa)

function sapa(nama) {
    console.log(`halo ${nama}`)
}

sapa('Ardan')

function calculateGST(produkPrice) {
    return produkPrice * 0.05
}

console.log(calculateGST(15))

let sum = (a, b) => {
    return a + b
}

// alert(sum(1, 2))

const greet = function (name, kelas) {
    console.log (`Hello, ${name} kelas ${kelas}`)
}

const sayHello = greet
sayHello('Ardan', 11)

function sapa1(nama = "Pengunjung") {
    console.log(`Halo ${nama}`)
}

sapa1() //argumen kosong
sapa1('Ardan') //argumen terisi

// let jumlah1 = 10

// let total = jumlah1 + (hargaSatuan || 0)

// let harga2 = hargaSatuan2 !== undefined ?
// hargaSatuan2 : 0

// console.log(harga2)

// let harga3 = hargaSatuan3 ?? 0

// console.log(harga3)

const numbers = [1, 2, 3, 4, 5]

const doubles = numbers.map((numbers) => numbers * 2)

const numbers1 = [1, 2, 3, 4, 5]

const evenNumbers = numbers1.filter((number) => number % 2 === 0)

const _numberReduce = [1, 2, 3, 4, 5]
const _sumReduce = _numberReduce.reduce((accumulator, currentValue) => accumulator + currentValue, 0)
console.log(_sumReduce)

const fruits = [`apple`, `banana`, `cherry`]
fruits.forEach((fruit) => console.log(fruit))
//output : apple, banana, cherry (tanpa menggunakan array)

const fruits2 = [`apple`, `banana`, `cherry`]
fruits2.sort()
//fruits2 adalah [`apple`, `banana`, `cherry`]

const numbers2 = [1, 2, 3, 4, 5]

//mencari elemen lebih dari 3
const result = numbers2.find((number) => number > 3)

console.log(result)
