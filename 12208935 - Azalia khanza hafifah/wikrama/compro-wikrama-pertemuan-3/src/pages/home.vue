<template>
    <div class = "container">
        <beranda></beranda>
        <service></service>
        <portofolio></portofolio>
        <blog></blog>
    </div>
</template>

<script>
import Navbar from '@/components/Layouts/Navbar.vue';
import Beranda from '@/components/Beranda/Beranda.vue';
import Service from '@/components/Beranda/Service.vue'
import Portfolio from '@/components/Beranda/Portfolio.vue';
import Blog from '@/components/Beranda/Blog.vue';
import { Get } from '@/api/index.js';

export default {
  components: {
    section1,
    Beranda,
    Service,
    Portfolio,
    Blog
  },
  data() {
    return {
        DataHome: []
    }
  },
  async mounted() {
    const response = await Get ('http://localhost:9000/api/home');
    this.DataHome = response.data;

    const responseLayanan = await Get('http://localhost:9000/api/services');
    this.DataLayanan = responseLayanan.data.data;
  },
}
</script>
