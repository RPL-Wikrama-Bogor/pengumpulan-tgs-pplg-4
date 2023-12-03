    const countries = [
    { country: 'China', capital: 'Beijing', population: 1444216107 },
    { country: 'India', capital: 'New Delhi', population: 1380004385 },
    { country: 'United States', capital: 'Washington, D.C.', population: 331002651 },
    { country: 'Indonesia', capital: 'Jakarta', population: 273523615 },
    { country: 'Pakistan', capital: 'Islamabad', population: 220892340 },
    { country: 'Brazil', capital: 'Brasília', population: 212559417 },
  ];



module.exports = countries


// async function filterCountriesWithPopulationOver1Billion() {
//   return new Promise((resolve, reject) => {
//     setTimeout(() => {
//       const filteredCountries = countries.filter((country) => country.population > 1000000000);
//       resolve(filteredCountries);
//     }, 5000);
//   });
// }

// async function main() {
//   try {
//     const filteredCountries = await filterCountriesWithPopulationOver1Billion();
//     const countryNames = filteredCountries.map((country) => country.country);

//     const response = JSON.stringify(countryNames);
//     console.log(response);
//   } catch (error) {
//     console.error('Error:', error);
//   }
// }