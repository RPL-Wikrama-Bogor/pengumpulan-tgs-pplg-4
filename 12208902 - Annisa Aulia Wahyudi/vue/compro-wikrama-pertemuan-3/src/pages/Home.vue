<template>
  <div class="container">
    <Beranda :data="DataHome"></Beranda>
    <Service :data="DataLayanan"></Service>
    <Portfolio></Portfolio>
    <Blog></Blog>
  </div>
</template>
<script>
import Navbar from '@/components/Layouts/Navbar.vue';
import Beranda from '@/components/Beranda/Beranda.vue';
import Service from '@/components/Beranda/Service.vue'
import Portfolio from '@/components/Beranda/Portfolio.vue';
import Blog from '@/components/Beranda/Blog.vue';
import { Get } from '../Api';
export default {
  components: {
    Navbar,
    Beranda,
    Service,
    Portfolio,
    Blog
  },
  data() {
    return {
      DataHome: [],
      DataLayanan: []
    }
  },
  // async mounted() {
  //   const response = await Get('http://127.0.0.1:9000/api/home');
  //   this.DataHome = response.data;
  //   console.log(this.DataHome);
  // },
  async created() {
    //api untuk home
    const response = await Get('http://127.0.0.1:9000/api/home');
    this.DataHome = response.data;
    //api untuk layanan
    const responseLayanan = await Get('http://127.0.0.1:9000/api/service');
    this.DataLayanan = responseLayanan.data.data;
  },

}
</script>