<template>
    <div class="container">
      <Section></Section>
      <Service></Service>
      <Portofolio></Portofolio>
      <Blog></Blog>
    </div>
</template>

<script>
  import Section from '@/components/Beranda/Beranda.vue';
  import Service from '@/components/Beranda/Service.vue';
  import Portofolio from '@/components/Beranda/Portofolio.vue';
  import Blog from '@/components/Beranda/Blog.vue';

  import { Get } from '@/Api/index.js';
  export default {
    components: {
      Section,
      Service,
      Portofolio,
      Blog
    },
    data() {
      return {
        DataHome: []
      }
    },
    async mounted() {
      const response = await Get("http://127.0.0.1:9000/api/home");
      // this.DataHome = response.data;
      console.log(response);
    }
  }
</script>