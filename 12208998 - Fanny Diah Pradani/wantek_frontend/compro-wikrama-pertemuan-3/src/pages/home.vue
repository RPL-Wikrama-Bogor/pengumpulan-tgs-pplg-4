<template>
    <div class="container">
      <Beranda></Beranda>
      <Service></Service>
      <Portfolio></Portfolio>
      <Blog></Blog>
    </div>
  </template>

<script>
import Beranda from '@/components/beranda/beranda.vue';
import Service from '@/components/beranda/service.vue'
import Portfolio from '@/components/beranda/portfolio.vue';
import Blog from '@/components/beranda/blog.vue';
import {Get} from '@/api/index.js';
export default {
  components: {
    Beranda,
    Service,
    Portfolio,
    Blog
  },
  data(){
    return{
        dataHome:[]
    }
  },
async mounted() {
    const response = await Get('http://localhost:9000/api/home');
    this.dataHome = response.data;
    console.log(this.dataHome)
}

}
</script>

