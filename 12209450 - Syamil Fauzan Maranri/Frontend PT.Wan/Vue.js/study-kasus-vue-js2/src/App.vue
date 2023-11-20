<template>
  <div class="row-services">
    <Card v-for="item in data" :nama="item.nama" :title="item.title" :description="item.description" :gambar="item.gambar" :logo="item.logo" :date="item.date" :key="item.date">
          <span>{{ item.date }}</span>
    </Card>
  </div>
</template>

<script>
import Card from '@/components/my-components/Card.vue';

export default {
  components: {
    Card,
  },
  data() {
    return {
      data: [
        {
          nama: 'Yokimura Sanada',
          logo: null,
          gambar: '@/assets/img/satu.jpg',
          title: 'Barudak well',
          description: 'Programmer',
          date: '27 Oktober 2022',
        },
        {
          nama: 'Bang Toyib',
          logo: null,
          gambar: '@/assets/img/dua.jpg',
          title: 'Imam Masjid',
          description: 'Duar',
          date: '27 Oktober 2022',
        },
      ],
    };
  },
  created() {
  // Memuat gambar secara dinamis saat komponen telah dibuat
  import('@/assets/img/dua.jpg').then(module => {
    this.data.forEach(item => {
      item.gambar = module.default;
    });
  });
}};

</script>

<style>
.row-services {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}

span {
    font-weight: 400;
    color: #827f8d;
    margin-left: 60px;
    font-size: 12px;
  }
</style>
