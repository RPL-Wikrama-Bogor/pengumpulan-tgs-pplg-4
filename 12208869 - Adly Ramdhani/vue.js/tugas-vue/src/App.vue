<template>
  <div class="row-service">
    <card v-for="item in data" :title="item.title" :description="item.description" :name="item.name" :image="item.image">
      <p>{{ item.date }}</p>
      </card>
  </div>
</template>

<script>
import card from '@/components/my-components/Card.vue';
export default{
  components:{
    card,
    'card-service' :card
  },
  data(){
    return{
      data: [
        {
        title: 'shift the overall look and feel by adding these wonderful touches to furtnitur in you home',
        description: 'Ever in room and felt like something was missing? Perhaps',
        name: 'AdlyRadhani',
        date: '31 Oktober 2023',
        image: '../../img/poto1.jpeg'
        },
      ]
    }
  }
}
</script>
<style>
  .row-service{
  display: grid;
  grid-template-columns: repeat(3, 1fr); 
  grid-gap: 10px ;
}
</style>