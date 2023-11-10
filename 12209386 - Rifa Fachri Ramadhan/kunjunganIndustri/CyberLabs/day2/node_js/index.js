// buat server 
const http = require('http');
const { resolve } = require('path');
// const {newFunction, testFunction} = require('./function');

const printTelat = () => {
    return new Promise((resolve, reject) => {
    setTimeout(() => {
        resolve('sudah sampai');
        reject('ga jadi ');
    }, 1000*5);
    });
    
}

var server = http.createServer(async (req, res) => {  

    // cara 2 switch
    switch(req.url) {
        case '/about':
            console.log('Otewe')
            const value = await printTelat();
            console.log(value);
            console.log('ngeteh');
            res.write('ini about');
            res.end
            break
        default:
            res.write('404 Not Found')
            res.end;
            break;
    }
});

const port = 9000;
server.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`)
});
