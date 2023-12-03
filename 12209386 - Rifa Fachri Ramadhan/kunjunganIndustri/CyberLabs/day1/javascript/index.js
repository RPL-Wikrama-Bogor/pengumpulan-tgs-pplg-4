let bilanganBulat = 4;
let bilanganDesimal =1.4;

let bilangan = bilanganBulat + bilanganDesimal;
console.log(bilangan);

const kondisi = null
let text = 'Hello World, '
console.log(text + '' + kondisi);

const simbolunik = Symbol('deskripsi simbol');
    console.log(simbolunik)

let angka = [1, 2, 3, 4,];

function tambah(a, b){
    return a + b;
}
    console.log(tambah(3, 5));

// object
    let siswa = {
        nama: 'Rifa',
        rombel: 'PPLG XI-4',
        rayon: 'Cicurug 1'
    }
        console.log(siswa.nama)

//Operator
    let hasil = 4 + 3;
    console.log(hasil);

//pembandingan
    let rawr = 4 != 5;
    console.log(rawr)

//
let umur = 17
let status = (umur >= 18)? 'Dewasa' : 'belum Dewasa';
    console.log(status);

// percabangan
if(umur >= 18){
    status = "Dewasa"
}else if(umur >= 12 && umur < 18){
    status = 'Remaja'
}else{
    status = 'jangan panggil aku anak kecil paman'
}
console.log (status)

let warna = 'merah'
let warnaApa;
switch(warna){
    case 'kuning':
        warnaApa = 'warna kuning'
        break;
    case 'hijau':
        warnaApa = 'warna hijau'
        break;
    case 'merah':
        warnaApa = 'warna merah'
        break;
    default:
        warnaApa = 'sistem buta warna'
        break;
}

console.log(warnaApa);

function sapa(nama){
    console.log(`halo ${nama}`)
    // bukan tanda kutip tapi backtip (disamping 1)
}
sapa('Rifa')

// function 
function diModulus(inputNumber){
    return inputNumber % 2;
}
console.log(diModulus(15));

// function first class
const greet = function(nama, kelas){
    console.log(`hello, ${nama}, rombel ${kelas}`)
}
const sayHello = greet
sayHello('Fachri', 'PPLG XI-4')


function helo(nama = 'pengunjung'){
    console.log(`halo ${nama}`)
}
helo()
helo('Rif')

let hargaSatuan;  
let jumlah = 10
let total = jumlah + (hargaSatuan ||  0)

let hargaSatuan1;
let hargaSatuan2;



let harga = hargaSatuan1 !== undefined ? hargaSatuan1 : 0

console.log(harga)

let harga2 = hargaSatuan2 ?? 0
    console.log(harga2)


const numbers = [1, 2, 3, 4, 5]
const doubles = numbers.map((numbers) => numbers * 2)
    console.log(doubles)

const _numberReduce = [1, 2, 3, 4, 5]
const _sumReduce = _numberReduce.reduce((accumulator, currentValue) => accumulator +currentValue, 0 )
console.log(_sumReduce) 

const fruits = ['apple', 'banana', 'cherry']
fruits.forEach((fruits) => console.log(fruits))
fruits.sort();

const number = [1, 2, 3, 4, 5]
const result = number.find((number) => number >3)
    // number.splice(2, 0, 10)
    
// delete number[1];
console.log (result)
console.log (number)




let sum = (a, b) => {
    return a + b
}
alert(sum(1, 2));

