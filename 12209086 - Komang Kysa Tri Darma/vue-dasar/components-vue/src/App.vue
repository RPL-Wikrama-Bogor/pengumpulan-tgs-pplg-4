<template>
<div class="row-service">
  <Card v-for="item in data" :title="item.title" :description="item.description">
    <p>{{ item.date }}</p>
  </Card>
  <!-- <card-service title="ini title 2" description="ini description 2"></card-service> -->
  <MyBtn id="btn-1" name="btn"></MyBtn>
  <MyBtn id="btn-2" name="btn"></MyBtn>
</div>
</template>
<script>
import Card from '@/components/my-components/Card.vue'
export default{
  components:{
    Card,
    'card-service':Card
  },
  data(){
    return {
      data:[
        {
        title: 'title 1',
        description: 'description 1',
        date: '31 Oktober'
      },
        {
        title: 'title 2',
        description: 'description 2',
        date: '28 Juni'
      },
        {
        title: 'title 3',
        description: 'description 3',
        date: '30 Desember'
      }
    ]
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
.btn-service-global{
        margin-top: 10px;
        font-size: 16px;
        font-weight: 400;
        color: white;
        background-color: greenyellow;
        padding: 15px 20px;
        border: none;
        border-radius: 5px;
    }
</style>
