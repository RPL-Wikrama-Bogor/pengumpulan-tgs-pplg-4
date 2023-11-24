<template>
  <div class="row-service">
    <Card v-for="item in data" :title="item.title" :description="item.description" >
      <p>{{ item.date }}</p>
    </Card>
    <!-- <card-service title="titel 2" description="kedua"></card-service> -->
  </div>
  <button class="btn-service">Detail</button>
  <MyBtn id="btn1" name="btn"></MyBtn> <!---membuat button clone-->
  <MyBtn id="btn2" name="btn2"></MyBtn>
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
      data: [
        {
          title: 'title 1', //untuk looping
          description: 'description 2',
          date: '31/10/2023'
        },
        {
          title: 'title 1',
          description: 'description 2',
          date: '31/10/2023'
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
.btn-service-global {
        margin-top: 10px;
        font-size: 16px;
        font-weight: 400;
        color: white;
        background-color: #8EACCD;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
    }
</style>