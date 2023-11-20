<template>
  <div class="row-service">
    <Card v-for="item in data" :img="item.img" :title="item.title" :description="item.description" :name="item.name" :avatar="item.avatar" :imgShare="item.imgShare">
      <p class="slot">{{ item.date }}</p>
    </Card>
    <!-- <card-service title="ini title 2" description="ini description 2"></card-service> -->
  </div>
  </template>
  <script>
  import Card from '@/components/component/Card.vue'
  export default{
    components:{
      Card,
      'card-service':Card
    },
    data(){
      return {
        data:[
          {
          img: '/wallpaperflare.com_wallpaper (3).jpg',
          title: 'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
          description: 'Ever been in a room and felt like something was missing? Perhaps it felt slighty bare abd uninviting. I have got some simple tips to help you make any room feel complete.',
          name: 'Komang Kysa Tri Darma',
          date: '28 June 2020',
          avatar: '/Iruma.jpeg',
          imgShare: '/share-removebg-preview.png',
          },
          {
          img: '/wallpaperflare.com_wallpaper (4).jpg',
          title: 'Topaz & Numby is a 5★ character from the Fire element who follows the Path of Hunt in HSR.',
          description: 'Topaz is a senior member of Interstellar World Corporations strategic investment department, heading a special debt picket team. The uniqueness of the girl is that her thigh.',
          name: 'Topaz & Numbby',
          date: '27 Desember 2023',
          avatar: '/topazsayang.jpg',
          imgShare: '/share-removebg-preview.png',
          }
      ]
      }
    }
  }
  </script>
  
  <style>
  .row-service{
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 5px;
}
  .slot{
        margin: 0;
        font-weight: 100;
        font-size: 14px;
      }
  </style>
  