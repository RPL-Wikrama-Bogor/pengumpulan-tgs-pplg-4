let bilanganbulat= 42
let bilanganPecahan= 3.14
console.log(bilanganPecahan)

let teks1 = "Hello word"
let teks2 = "ContohString"

let benar = true
let salah = false

let tidakAdaNilai= null
let varibelBelumDisi;

const simbolunik = Symbol('Deskripsisimbol')
console.log(simbolunik)

let angka = [1, 2, 3, 4, 5]

function tambah (a,b){
    return a+b
}

console.log(tambah(3,4))

let siswa = {
    nama: 'adly',
    Rombel: 'PPLG XI-4',
    Rayon: 'Cicurug3'
}
console.log(siswa)

let hasilPetambahan = 3+5

let hasilPerkalian = 3*5

let hasilPengurangan = 5-3

let hasilPembagian  = 4/2


let hasil1 = 5 == 5;
let hasil2 = 5 != 5;
let hasil3 = 8 > 5;
let hasil4 = 3 < 5;

console.log(hasil1)

let angka1 = 5
let angka2 = 5
console.log(angka1+angka2)

let umur = 18
let status = ( umur >= 18) 
console.log(status)
if(umur >= 18){
    status = "dewasa"
}else if(umur >= 12 && umur < 18){
    status = "Remaja"
}else{
   status= "anak-anak"
}
 console.log(status)
 let warna = 'kuning'
 let warnaApa 
 switch (warna) {
    case "kuning":   
    warnaApa = "warna kuning"    
        break;

        case "hijau":   
    warnaApa = "warna hijau"    
        break;
        
        case "merah":   
        warnaApa = "warna merah"    
        break;
 
    default:
        warnaApa = "warna tidak terdefinisi"
        break;
 }
console.log(warnaApa)
// alert(warnaApa)

function sapa(nama){
    console.log(`halo  ${nama} `)
}
sapa('adly')


function calculateGST(productPrice){
    return productPrice * 0.05
}

console.log(calculateGST(15))

let sum = (a,b) => {
    return a + b
}

// alert(sum(5,2))

const greet = function(nama,rombel){
    console.log(`Nama saya ${nama} saya dari rombel ${rombel}`)
}

const sayHello = greet
sayHello('adly','PPLG XI-4')

function sapa1(nama = "Pengujung"){
    console.log(`halo  ${nama} `)
}
sapa1()
sapa1('adly')

let jumlah2 = 10
let hargasatuan
let total2 = jumlah2 + (hargasatuan || 0)
console.log(total2)

let harga2 = hargasatuan !== undefined ? hargasatuan: 0
console.log(harga2)


let harga4 = hargasatuan ?? 0
console.log(harga4)

const numbers = [2,3,4,5,6]
const doubles = numbers.map((numbers) => numbers * 2)
console.log(doubles)

const numbers1 = [1, 2, 3, 4, 5,]

// const evnumbers = numbers1.filter((numbers1) => 2 === 0)
const _sumReduce = numbers1.reduce((accumulator, currenValue) => accumulator + currenValue, 0)
console.log(_sumReduce)

const  fruits = ['appel','banana', 'cherry' ];
fruits.forEach((fruit) => console.log(fruit));

const  fruits1 = ['appel','banana', 'cherry' ];
fruits.sort()
console.log(fruits1)

const numbers3 = [1, 2, 3, 4, 5, 6];
const result = numbers3.find((numbers) => numbers > 3);
console.log(result)

//Tugas
const people = [
    { firstName: 'John', lastName: 'Doe' },
    { firstName: 'Alice', lastName: 'Smith' },
    { firstName: 'Bob', lastName: 'Johnson' },
  ];
  
  function getFullNames(people) {
    return people.map(person => `${person.firstName} ${person.lastName}`);
  }
  
  const fullNames = getFullNames(people);
  console.log(fullNames);
  