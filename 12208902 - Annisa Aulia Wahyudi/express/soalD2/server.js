const express = require('express');
const app = express();
const port = 8000; 

const { peopleData, filterPeople } = require('./data');

app.get('/', async (req, res) => {
  try {
    const filteredPeople = await filterPeople();
    res.json(filteredPeople);
  } catch (error) {
    res.json(error);
  }
});

app.listen(port, () => {
  console.log(`Server berjalan di http://localhost:${port}`);
});
