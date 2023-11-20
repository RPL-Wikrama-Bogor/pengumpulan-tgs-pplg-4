<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :description="item.description">
      <p>{{ item.date }}</p>
    </Card>
  </div>
  <button class="btn-service">Detail</button>
  <MyBtn id="btn 1" name="btn"></MyBtn>
  <MyBtn id="btn 2" name="btn"></MyBtn>
</template>
<script>

import Card from '@/components/my-components/Card.vue';
export default {
  components: {
    Card,
    'card-service': Card
  },

  data() {
    return {
      data: [{
        title: 'title 1',
        description: 'description 1',
        date: '31 Oktober'
      }, {
        title: 'title 2',
        description: 'description 2 ',
        date: '31 Oktober'
      }]
    }
  }
}

</script>
<style>
.btn-service-global {
  margin-top: 10px;
  font-size: 10px;
  font-weight: 400;
  color: #fff;
  background-color: rgb(0, 255, 76);
  padding: 15px 20px;
  border: none;
  border-radius: 5px;
}

.row-service {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}
</style>