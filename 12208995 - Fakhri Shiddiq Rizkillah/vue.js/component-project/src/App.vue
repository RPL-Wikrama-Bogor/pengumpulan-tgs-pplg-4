<template>
  <div class="row-service">
 <Card v-for="item in data" :title="item.title" :description="item.description"><p>{{ item.date }}</p></Card>
</div>
<button>Button</button>
<br>
<button class="btn-service">Button</button>
<MyBtn id="btn1" name="btn"></MyBtn>
<MyBtn id="btn2" name="btn2"></MyBtn>
</template>
<script>
import Card from '@/components/my-component/Card.vue'
export default{
  components:{
    Card,
    'card-service' : Card
  },
  data(){
    return {
      data:[
        {
        title: 'title 1',
        description: 'description 1',
        date: '31 oktober'
      },
        {
        title: 'title 2',
        description: 'description 2',
        date: '1 november'
      },
        {
        title: 'title 3',
        description: 'description 3',
        date: '26 november'
      }
    ]
    }
  }
}
</script>
<style>
.row-service {
  display: grid;
  grid-template-columns: repeat(3,1fr);
  grid-gap: 10px;
}

.btn-service {
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400;
    color: rgb(117, 102, 102);
    background-color: #2600ff;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}
</style>