const http =require('http');
 const { filterData, getData }= require('./data.js')

async function filterData() {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      const filteredData = peopleData.filter((person) => person.age < 30 && person.city === 'Los Angeles');
      resolve(filteredData);
    }, 5000);
  });
}

async function getData() {
  try {
    const filteredData = await filterData();
    const dataString = JSON.stringify(filteredData, null, 2);
    console.log(dataString);
  } catch (error) {
    console.error('Error:', error);
  }
}

getData();

  
module.exports = peopleData;
  

