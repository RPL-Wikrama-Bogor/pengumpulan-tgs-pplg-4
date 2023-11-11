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
          nama: 'Alfin',
          logo: null,
          gambar: '@/assets/img/1.jpeg',
          title: 'Alfin Anjay',
          description: 'Perkenalkan nama saya Alfin dari PPLG XI-4 selama 5 hari diminggu ini saya belajar VUE JS',
          date: '31 Oktober 2023',
        },
        {
          nama: 'Wildan',
          logo: null,
          gambar: '@/assets/img/2.jpeg',
          title: 'Fawwaz Baik',
          description: 'Perkenalkan nama saya Wildan dari PPLG XI-4 selama 5 hari diminggu ini saya belajar VUE JS',
          date: '1 November 2023',
        },
      ],
    };
  },
  created() {
  // Memuat gambar secara dinamis saat komponen telah dibuat
  import('@/assets/img/1.jpeg').then(module => {
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
