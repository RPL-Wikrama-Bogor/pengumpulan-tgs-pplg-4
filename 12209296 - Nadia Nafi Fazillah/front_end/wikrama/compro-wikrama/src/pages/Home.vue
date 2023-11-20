<template>
    <navbar></navbar>
    <div class="container">
    <beranda :data="DataHome"></beranda>
    <Service :data="DataLayanan"></Service>
    <Portofolio :data="DataPortofolio"></Portofolio>
    <Blog :data="DataBlog"></Blog>
    </div>
  </template>
  
  <script>
  import navbar from '@/components/layouts/navbar.vue';
  import beranda from '@/components/beranda/beranda.vue';
  import service from '@/components/beranda/service.vue';
  import portofolio from '@/components/beranda/portofolio.vue';
  import blog from '@/components/beranda/blog.vue';
import { Get } from '@/Api/index.js';
import { createDOMCompilerError } from '@vue/compiler-dom';
  export default{
    components: {
      beranda,
      service,
      portofolio,
      blog
    },
    data(){
      return {
        DataHome:[],
        DataLayanan:[]
      }
    },
    async ccreated() {
      //api untuk home
      const response = await Get('htp://localhost:9000/api/home');
      this.DataHome = response.data;
      //api untuk layanan
      const responseLayanan = await Get('http://localhost:9000/api/services');
      this.DataLayanan = responseLayanan.data.data;
      //api untuk portofolio
      const responsePortofolio = await Get('http://localhost:9000/api/portofolio');
      this.DataPortofolio = responsePortofolio.data.data;
      //api untuk blog
      const responseBlog = await Get('http://localhost:9000/api/nlog');
      this.DataBlog = responseBlog.data.data;
    },
  }
  </script>