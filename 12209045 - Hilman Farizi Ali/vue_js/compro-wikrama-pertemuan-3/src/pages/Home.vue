<template>
    <Navbar></Navbar>
    <div class="container">
      <section1></section1>
      <Service></Service>
      <Portfolio></Portfolio>
      <Blog></Blog>
    </div>
  </template>

<script>
import section1 from '@/components/Beranda/Section1.vue'
import Service from '@/components/Beranda/Service.vue'
import Portfolio from '@/components/Beranda/Portfolio.vue';
import Blog from '@/components/Beranda/Blog.vue';

import { Get } from '@/Api/index.js';
export default {
  components: {
    Section1,
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
    const response = await Get()
    console.log(response);
  },
  
}
</script>
  