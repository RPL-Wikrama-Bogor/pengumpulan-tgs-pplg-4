const http = require('http');
const { tesFunction, newFunction } = require('./function');

//promise
const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('sudah sampai');
            // reject('kena tilang');
        }, 1000 * 5);
    });
}

var server = http.createServer((req,res) => {
    switch (req.url){
        case '/about' :
            console.log('saya otw');
            printAgakTelat().then((value) =>{
                console.log(value)
                console.log('ngopi');
            })
            .catch((error) =>
            console.log(error));
            
            res.write('ini about');
            res.end();
            break;
        case '/contact':
            res.write('ini contact');
            res.end();
            break;
        default:
            res.write('404 not found');
            res.end()
            break;
    }

});

const port = 3000;
server.listen(port);
console.log(`Server berjalan di http://localhost:${port}`);