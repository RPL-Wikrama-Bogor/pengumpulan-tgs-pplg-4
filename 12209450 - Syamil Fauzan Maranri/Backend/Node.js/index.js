const { resolveSoa } = require('dns');

const http = require('http');
const {testFunction, newFunction} = require('./function');

const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('hai haiii');
        }, 1000 * 5 
        );
    });
}

var server = http.createServer((req, res) => {
    switch (req.url) {
        case '/about':
            console.log('Saya gojou satoru');
            console.log('Saya suka sihir');
            printAgakTelat()
            .then((value) => {
                console.log(value);
                console.log('GOJOU SATORUUUU!!');
             } )
            .catch((error) => console.log(error))
          
            res.write('Ini about!');
            res.end();
        break;
        case '/contact':
            res.write('Ini contact!');
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
console.log(`Server berjalan di http://localhost:${port}`);