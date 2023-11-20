const http =require('http');
 const { testFunction, newFunction }= require('./function.js')
//common js/ESM- ecmascrpit
var server = http.createServer(async(req,res)=>{

    switch (req.url){
        case '/about':
            // testFunction();
            // newFunction('ini berasal dari parameter');
            console.log('saya otw');
            const value = await
            printAgakTelat()
                  console.log(value);
                  console.log('saya lagi bikin alis');
                  res.write('ini about');
                  res.end();
            break;
                
        case '/contact':
            res.write('ini contact');
            res.end();
            break;
        default :
        res.write('404 not found');
        res.end();
    }

    // if(req.url == '/about'){
    // res.write('ini aboout');
    // res.end();
    // } else if (req.url == '/contact') {

    // }
    // else {
    //     res.write('404 not found');
    //     resolveSoa.end();
    // }
});

const port = 3000;
server.listen(port);
console.log(`Server berjalan di http://localhost:${port}`);

// promise
const printAgakTelat = () => {
    return new Promise((resolve,reject) => { 
        setTimeout(()=> {
               resolve('saya sudah sampai');
           }, 1000 * 5);
    })

}



//EXPRESSS JS///\