//soal senin 6/11/23

// no 1 menggandakan setiap elemen
const numbers = [1, 2, 3, 4, 5];
const doubles = numbers.map((numbers) => numbers * 2)
console.log(doubles);

// no 2 Filter elemen-elemen yang lebih besar dari 10 
const data = [
  { id: 1, value: 5 },
  { id: 2, value: 12 },
  { id: 3, value: 8 },
  { id: 4, value: 15 },
];
const hasilFilter = data.filter(item => item.value > 10 )
console.log(hasilFilter);

// no 3 Gabungkan elemen-elemen ini menjadi satu string terpisah dengan koma
const fruits = ['apel', 'pisang', 'ceri', 'anggur'];
const gabungkanString = fruits.join(', ');
console.log(gabungkanString);

// no 4 Ubah array berikut menjadi objek JSON
const person = ['John', 'Doe', 30];
const fullData =JSON.stringify(person)
console.log(fullData);

// no 5 Buat fungsi yang mengembalikan daftar nama lengkap dari objek-objek berikut
function getNama(people) {
    const fullName = people.map(person => `${person.firstName} ${person.lastName}`)
    return fullName
}

const people = [
  { firstName: 'John', lastName: 'Doe' },
  { firstName: 'Alice', lastName: 'Smith' },
  { firstName: 'Bob', lastName: 'Johnson' },
];
const name = getNama(people)
console.log(name);

// no 6  Filter dan ambil semua angka ganjil dari array berikut
const number = [1, 2, 3, 4, 5, 6, 7, 8, 9];
const even = number.filter((number) => number %2 == 1) 
console.log(even);

// no 7 Hitung total nilai dari array objek berikut
const items = [
  { name: 'Item A', value: 10 },
  { name: 'Item B', value: 20 },
  { name: 'Item C', value: 30 },
];
const totalValue = items.reduce((total, item) => total + item.value, 0);
console.log(totalValue);

// no 8 Buat objek JSON yang berisi informasi buku  
const bookInfo = {
  title: "Harry Potter and the Sorcerer's Stone",
  author: 'J.K. Rowling',
  year: 1997,
};
const bookInfoJSON = JSON.stringify(bookInfo);
console.log(bookInfoJSON);

// no 9 Filter dan ambil semua orang dengan usia di bawah 30 dari array objek berikut
const people1 = [
  { name: 'Alice', age: 25 },
  { name: 'Bob', age: 32 },
  { name: 'Charlie', age: 28 },
];
const data1 = people1.filter(people1 => people1.age < 30)
console.log(data1);

// no 10 Buat objek JSON yang berisi informasi mahasiswa
const student = {
  name: 'Lisa',
  age: 20,
  major: 'Computer Science',
};
const informasiS = JSON.stringify(student)
console.log(informasiS);

let myArray = [1, 2, 3, 4, 5];
myArray.splice(2, 1); // Menghapus elemen pada indeks 2 // 1 itu berapa jumlah item yang akan dihapus 
console.log(myArray); // Output: [1, 2, 4, 5]

// memindahkan elemnt
let myArray1 = [1, 2, 3, 4, 5];
// Menghapus elemen pertama (indeks 0) dengan shift()
let elementToMove = myArray.shift();
// Menambahkan elemen yang dihapus ke akhir array dengan push()
myArray.push(elementToMove);
console.log(myArray);


