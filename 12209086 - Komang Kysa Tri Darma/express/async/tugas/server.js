// server.js

const countries = require('./data');

async function fetchData() {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve(countries.filter(country => country.population > 1000000000));
    }, 5000);
  });
}

async function main() {
    fetchData().then(filteredCountries => {
        const countryNames = filteredCountries.map(country => country.country);
        const responseString = JSON.stringify(countryNames);
        console.log(responseString);
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }
  
  main()
