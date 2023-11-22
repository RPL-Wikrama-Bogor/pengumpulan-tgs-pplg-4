<template>

<div class="row-service">
 <Card v-for="item in data" :img="item.img" :nama="item.nama" :title="item.title" :description="item.description" >
    <p>{{item.date}}</p>

</Card>
   

</div>


</template>



<script>

import Card from '@/components/my-components/Card.vue';
export default{
  components:{
    Card,
    'card-service': Card
  },data(){
    return{
  data:[{
    nama: 'Alfin',
    title: 'satu',
    description: ' description 1',
    date:'31 Oktober 2023',
    img:'../../img/adudu.jpg'
  },{
    nama: 'Wildan',
    title: 'dua',
    description: ' description 2',
    date: '1 November 2023',
    img:'@/../../img/fang.jpg'
  }]
}
 }
  }
</script>
<style>
.row-service{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}
</style>