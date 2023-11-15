const peopleData = [
    { name: 'John', age: 28, city: 'New York' },
    { name: 'Alice', age: 24, city: 'Los Angeles' },
    { name: 'Bob', age: 32, city: 'Chicago' },
    { name: 'Eva', age: 29, city: 'Los Angeles' },
    { name: 'David', age: 35, city: 'Los Angeles' },
]
async function filterPeople() {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      const filteredPeople = peopleData.filter(
        (person) => person.age < 30 && person.city === 'Los Angeles'
      );
      resolve(filteredPeople);
    }, 5000);
  });
}

module.exports = {
    peopleData,
    filterPeople
    
}