<template>
  <!-- jumlah card sama dengan jumlah data CardContents -->
  <Card v-for="(item, index) in CardContents" :key="index" :judul="item.title" :text="item.text" :image="item.image">
  <!-- kodingan yang ada di tengah component bakal masuk ke slot -->
  <p>Created by: Me!</p>
  <small> {{ item.date }}</small>

  </Card>
</template>

<script> 
// panggil file
import Card from '@/components/Card.vue';
export default {
  // components apa saja yanf akan ditampilkan
  components: {
    // definisi componen agar bisa digunakan di template
    Card, 
  },
  // penyimpanan variable
  data() {
    return {
    CardContents: [{
      title: 'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
      text: 'Ever been in a room and felt like something was missing? perhaps it felt slightly bare and uninviting. Ive got some simple tips to help you make any room feel complete',
      image: 'R.png',
      date: '31 oct 2023'

    }
  ]
  }
} 
}
</script>

<style>

</style>