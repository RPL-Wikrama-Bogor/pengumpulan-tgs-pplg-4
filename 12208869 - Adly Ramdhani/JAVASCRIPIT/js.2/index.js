const http = require('http');
const  { testFunction,newFunction } = require('./function');

//Promise
const printAngkaTelat = () => {
    return new Promise((resolve,reject) => {

        setTimeout(() => {
            resolve('say sudah sampai');
        }, 1000 * 5)
    });
    
}
var server = http.createServer((req,res) => { 
    switch (req.url) {
        case '/about':
            // testFunction();
            // newFunction('ini berasal dari parameter');
            console.log('saya otw')
            printAngkaTelat()
            .then((value) => {
            console.log(value)
            console.log('ngopi')
            })
            .catch((error) => console.log(error));
            res.write('ini about');
            res.end();
            break;
         case '/contact':
                res.write('ini contact');
                res.end();
             break;
        default:
            res.write('404 not found');
        res.end();
            break;
    }
   
});

const port = 8000;
server.listen(port,() => {
    console.log(`Server berjalan di http://localhost:${port}`)
});
