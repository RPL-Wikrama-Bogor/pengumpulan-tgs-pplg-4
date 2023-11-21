//buat server http server
//require = import
//common js / ESM - Ecmascript
const http = require("http");
//memanggil function dari function.js
const { testFunction, newFunction } = require("./function");

//promise
const printAgakTelat = () => {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve("Sudah sampai");
      // reject('Saya kena tilang')
    }, 1000 * 5);
  });
};

var server = http.createServer(async (req, res) => {
  switch (req.url) {
    case "/about":
      console.log("Saya otw!");
      const value = await printAgakTelat();
      console.log(value);

      console.log("ngopi");
      // testFunction();
      // newFunction('topaz ><');
      res.write("Ini halaman about");
      res.end();
      break;
    case "/home":
      res.write("Ini halaman home");
      res.end();
      break;
    case "/contact":
      res.write("Ini halaman contact");
      res.end();
      break;
    default:
      res.write("404 Not Found :)");
      res.end();
      break;
  }

  // if(req.url == '/about'){
  //     res.write('Ini halaman about');
  //     res.end()
  // }else if(req.url == '/home'){
  //     res.write('Ini halaman home');
  //     res.end()
  // }
  // else {
  //     res.write('404 Not Found');
  //     res.end()
  // }
});

const port = 3000;
server.listen(port);
console.log(`Server berjalan di http://localhost:${port}`);
