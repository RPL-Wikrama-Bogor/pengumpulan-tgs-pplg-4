<template>
    <div class="container">
        <Header :data="DataHome"></Header>
        <Service :data="DataLayanan"></Service>
        <Portofolio :data="DataPortfolio"></Portofolio>
        <Blog :data="DataBlog"></Blog>
    </div>
 </template>
  
  <script>
  import Header from '@/components/Beranda/Header.vue';
  import Service from '@/components/Beranda/Service.vue';
  import Portofolio from '@/components/Beranda/Portofolio.vue';
  import Blog from '@/components/Beranda/Blog.vue';

  import { Get } from '@/Api/index.js';
  export default {
    components: {
      Header,
      Service,
      Portofolio,
      Blog
    },
    data() {
      return {
        DataHome: [],
        DataLayanan: [],
        DataPortfolio: [],
        DataBlog: [],
      }
    },
    async mounted() {
      // api untuk home
      const response = await Get('http://localhost:9000/api/home');
      this.DataHome = response.data;
      // api untuk layanan
      const responseLayanan = await Get('http://localhost:9000/api/services');
      this.DataLayanan = responseLayanan.data.data;
      // api untuk portofolio
      const responsePortfolio = await Get('http://localhost:9000/api/portfolio');
      this.DataPortfolio = responsePortfolio.data.data;
      // api untuk blog
      const responseBlog = await Get('http://localhost:9000/api/blog');
      this.DataBlog = responseBlog.data.data;
    },
  }
  </script>
  
  <style>
  html, 
  body {
    padding: 0;
    margin: 0;
    font-family: 'Poppins', sans-serif;
  }
  </style>