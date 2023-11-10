const express = require('express')
const app = express()
const port = 5000;
// const http = require('http')


// server.js
const countries = require('./data');


const filterCountries = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            const filtered = countries.filter((country) => country.population > 1000000000);
            const countryNames = filtered.map((country) => country.country)
            const response = JSON.stringify(countryNames);

            resolve(response)
        }, 5000)
    })
}

app.get('/', (req, res) => {
    console.log('beranda telah dibuka');
    res.send('ini beranda');
  });
  
  app.get('/about', (req, res) => {
    console.log('about telah dibuka');
    res.send('ini about');
  });
  
  app.get('/country', async (req, res) => {
    console.log('tunggu beberapa detik');
    const value = await filterCountries();
    res.send(value);
    console.log('data sudah ada');
  });
  
  app.get('*', (req, res) => {
    res.status(404).send('File not found');
  });
  
  app.listen(port, () => {
    console.log(`Server berjalan di http://localhost:${port}`);
  });
    

  




 