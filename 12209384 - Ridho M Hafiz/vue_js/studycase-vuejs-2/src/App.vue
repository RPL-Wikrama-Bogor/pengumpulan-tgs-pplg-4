<template>
  <div class="row-service">
    <Card v-for="item in data" :img="item.img" :nama="item.nama" :title="item.title" :description="item.description">
      <p>{{ item.date }}</p>
    </Card>
  </div>
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
        img: '../../img/gambar.jpg',
        nama: 'Rafly',
        title: 'PPLG XI-4',
        description: 'Cibedug 3',
        date: '12 Juli'
      }, {
        img: '../../img/gambar2.jpg',
        nama: 'Julian',
        title: 'PPLG XI-4',
        description: 'Cibedug 3',
        date: '12 Juli'
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