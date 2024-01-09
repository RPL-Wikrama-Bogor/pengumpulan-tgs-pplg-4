const http = require('http');      
const { testFunction, newFunction } = require('./function');  
const { error } = require('console');   
// import ada dua : commmon js dan ESM - Ecmasript

//Promise
const printAgakTelat = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Sudah sampai');
        }, 1000 * 5);
        
    });
}

var server = http.createServer(async (req, res) => {
    switch (req.url) {
        case '/about' :
            console.log('Saya otw');
            const value = await printAgakTelat();
            console.log(value);
            console.log('Ngopi')
            res.write('Ini about')
            res.end();
            break;
        case '/contact' :
            res.write('Ini contact');
            res.end();
            break;
        default:  
            res.write('404 Not Found');
            res.end();
            break;
    }
}); 

const port = 3000;
server.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`);
});