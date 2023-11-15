const http = require('http');
//commonJS / ESM - Ecmascript
const {testFunction, newFunction }= require('./function');
const { error } = require('console');

//promise
const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            // reject('saya kena tilang');
            resolve('sudah sampai');
        }, 1000 * 5);
    });
    
}

var server = http.createServer(async(req, res) => {
    // res.write('Saya node.js');
    // res.end 
     // /about
     switch (req.url) {
        case '/about':
            // testFunction();
            // newFunction('ini berasal dari parameter');
            console.log('saya otw');
            const value = await 
            printAgakTelat() 
                console.log(value);
                console.log('Ngopi');
                res.write('ini about');
                res.end 
            break;
        case '/contact':
            res.write('ini contact');
            res.end 
            break;
        default:
            res.write('404 Not Found');
            res.end 
            break;
     }

    // if(req.url == '/about') {
    //     res.write('ini about');
    //     res.end 
    // } else if (req.url == '/contact'){

    // }else {
    //     res.write('404 Not Found');
    //     res.end 
    // }
});

const port = 5000;
server.listen(port, () => {
    console.log(`Server berjalan di http:://localhost:${port}`);
});

