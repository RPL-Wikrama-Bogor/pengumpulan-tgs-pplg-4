<template>
  <div class="row-service">
    <card v-for="item in data" :title="item.title" :description="item.description">
    <p>{{ item.date }}</p>
    </card>
  </div>
  <!-- <button class="btn-service">Details</button> -->
  <MyBtn id="btn-1" name="btn-1"></MyBtn>
</template>
<script>
import card from '@/components/my-components/Card.vue';
export default {
  components: {
    card,
    'card-service': card
  },
  data() {
    return {
      data: [
        {
          title: 'title 1',
          description: 'description 1',
          date: '31 oktober'  
        },{
          title: 'title 2',
          description: 'description 2',
          date: '1 november'
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
  margin-left: 5px;
  margin-top: 10px;
  font-size: 16px;
  font-weight: 400;
  color: white;
  background-color: rgba(0, 207, 0, 0.801);
  padding: 15px 20px;
  border: none;
  border-radius: 5px;
}
</style>