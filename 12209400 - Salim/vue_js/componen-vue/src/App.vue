<template>
  <div class="row-service">
  <card v-for="item in data" :title="item.title" :description="item.description">
    <p>{{ item.date }}</p>
  </card>
  </div>
  
  <button class="btn-service">detail</button>
  <MyBtn id="btn1" name="btn"></MyBtn>
  <MyBtn id="btn2" name="btn"></MyBtn>
   
  
</template>

<script>
import Card from '@/components/my-components/Card.vue';
export default {
  components:{
    Card,
    'card-service': Card
  },
  data(){
    return{
      data:[
        {
          title: 'title 1',
          description: 'description 1',
          date: '31 oktober'
        }, {
          title: 'title 2',
          description: 'description 2',
          date: '10 oktober'
        }
      ]
    }
  }
}
</script>

<style>
.row-service {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}

.btn-service-global{
      margin-top: 10px;
      font-size: 16px;
      font-weight: 400;
      color: yellowgreen;
      background-color: #343b4e;
      padding: 15px 20px;
      border: noen;
      border-radius: 5px;


}
</style>