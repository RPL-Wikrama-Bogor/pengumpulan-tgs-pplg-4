<template>

  <Card v-for="(item,index) in cardContents" :key="index"  :title="item.title" :text="item.text" :image="item.image" :date="item.date">
   by :  Frieska
  </Card>
  
  </template>
  
  <script>
    //panggil file
    import Card from '@/components/Card.vue'
  
  export default {
    //components apa saja yg akan ditampilkan
    components: {
      //definisi component agar bisa digunakan di template
      Card,
    },
    data() {
      return {
      cardContents: [
        {
          
          title: 'Frieska ',
          text: `<ul>
                  <li>kyky</li>
                  <li>Bahagia selalu bestiehh!</li>
              </ul>`,
              image: 'bunga.jpg',
              date: '1 November 2023',
        },
        {
          title: 'Aulia',
          text: `<ul>
                  <li>onyyy</li>
                  <li>cinta babeh ronayy</li>
              </ul>`,
              image: 'beru.jpeg',
              date: '2 November 2023',
        },
      ]
    }
   }
  }
  </script>
  
  <style>
  
  </style>
``
