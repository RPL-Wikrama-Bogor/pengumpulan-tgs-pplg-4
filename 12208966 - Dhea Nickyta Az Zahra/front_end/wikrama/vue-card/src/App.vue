<template>
  <!-- jumlah card sama dengan jumlah data CardContents -->
  <Card v-for="(item, index) in CardContents" :key="index" :judul="item.title" :text="item.text" :image="item.image">
  <!-- kodingan yang ada di tengah component bakal masuk ke slot -->
  <small>Created by: Me!</small>
  <br>
  <br>
  <small>01 November 2023</small>
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
      title: 'Member Biodata :',
      text: `<ul>
                <li>Kim Sun Oo</li>
                <li>He has a vocal position in a group. He's the cutest member</li>
                
            </ul>`,
      image: 'sunoo.jpeg',
    },
    {
      title: 'Date Of Birth :',
      text: ` <ul>
                <li>25 June 2003 - Suwon, South Korea</li>
                <li>The Cancer boy</li>
                
            </ul>`,
            image: 'sunoo2.jpeg'
    }
  ]
  }
} 
}
</script>

<style>
 
</style>