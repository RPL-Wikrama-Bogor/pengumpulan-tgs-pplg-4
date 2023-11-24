<template>
  <!-- jumlah card sama dengan jumlah data CardContents -->
  <Card v-for="(item, index) in CardContents" :key="index" :judul="item.title" :text="item.text" :image="item.image">
  <!-- kodingan yang ada di tengah component bakal masuk ke slot -->
  <small>Created by: Cewe Jaemin!</small>
  </Card>
</template>

<script> 
// panggil file
import Card from '@/components/Card.vue';
export default {
  // components apa saja yang akan ditampilkan
  components: {
    // definisi componen agar bisa digunakan di template
    Card, 
  },
  // penyimpanan variable
  data() {
    return {
    CardContents: [{
      title: 'Nama Member :',
      text: `<ul>
                <li>Mark Lee</li>
                <li>abcdefghiloveyou</li>
                
            </ul>`,
      image: 'M.jpg',
    },
    {
      title: 'Tanggal Lahir :',
      text: ` <ul>
                <li>03 Agustus 1999</li>
                <li>The Leo boy</li>
                
            </ul>`,
            image: 'L.jpg'
    }
  ]
  }
} 
}
</script>

<style>

</style>