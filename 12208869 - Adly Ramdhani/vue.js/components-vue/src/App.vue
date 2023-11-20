<template>
  <div class="row-service">
<Card v-for="item in data" :title="item.title" :description="item.description">
  <P>{{ item.date }}</P>
</Card>
</div>
<button class="btn-service">Detail</button > 
<MyBtn id="btn 1" name="btn"></MyBtn>
<MyBtn id="btn 2" name="btn"></MyBtn>

</template>

<script>
import Card from '@/components/my-components/Card.vue';
export default{
  components:{
    Card,
    'card-service':Card
  },
  data(){
    return{
      data: [
        {
        title: 'title 1',
        description: 'descripition 1',
        date: '31 Oktober 2023'
        },
        {
        title: 'title 2',
        description: 'descripition 2',
        date: '31 Oktober 2023'
        },
        {
        title: 'title 3',
        description: 'descripition 3',
        date: '31 Oktober 2023'
        },
      ]
    }
  }
}
</script>
<style>
.btn-service-global{
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400;
    color: white;
    background-color: #A6F6FF;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}

.row-service{
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px ;
}
</style>
