// const http = require("http");
// const { testFunction, newFunction } = require("./function");

// // Promise
// const printAgakTelat = () => {
//   return new Promise((resolve, reject) => {
//     setTimeout(() => {
//         resolve("Sudah Sampai");
//         // reject("saya kena tilang");
//     }, 2000 * 4);
//   });
// };
// var server = http.createServer((req, res) => {
//   // http://loctestFunction
//   // about
//   switch (req.url) {
//     case "/about":
//       console.log("saya otw");
//       printAgakTelat()
//         .then((value) => {
//             console.log(value);
//             console.log('ngopi');
//         })
//         .catch((error) => console.log(error));
//     //   console.log("ngopi");
//       res.write("Ini about");
//       res.end();
//       break;
//     case "/contact":
//       res.write("Ini contact");
//       res.end();
//       break;
//     default:
//       res.write("404 not found");
//       res.end();
//       break;
//   }
// });

// const port = 3000;
// server.listen(port);
// console.log(server berjalan di http://localhost:${port});

// // if (req.url == '/about') {
// //     res.write('ini About');
// //     res.end();
// // }else if(req.url == '/contact') {
// //     res.write('ini contact');
// //     res.end();
// // }
// // else {
// //     res.write('404 not found');
// //     res.end();
// // }

const http = require('http')
const { newFunction, testFunction } = require('./function')
const { error } = require('console')

const printAgakTelat = () => {
    return new Promise((resolve, reject) =>{
        setTimeout(() => {
            resolve('sudah sampai')
        }, 1000 * 5)
    })
}

var server = http.createServer(async(req,res) => {
    
    switch (req.url) {
        case '/about':
            console.log('Saya otw')
            const value = await printAgakTelat()
            console.log(value)
            console.log('ngopi')
            res.write('ini di about');
            res.end();
            break;

        case '/contact':
            res.write('ini di contact');
            res.end();
            break;
    
        default:
            res.write('404 Not Found');
            res.end();
            break;
    }

});

const port = 3000;
server.listen(port);
console.log(`Server berjalan di http://localhost:${port}`)