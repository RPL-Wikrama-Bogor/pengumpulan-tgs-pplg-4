<template>
  <div>
    <navbar></navbar>
    <router-view></router-view>
  </div>
</template>

<script setup>
import Navbar from './components/layouts/Navbar.vue';
// import Header from './components/Beranda/Header.vue';
// import Service from './components/Beranda/Service.vue';
// import Portofolio from './components/Beranda/Portofolio.vue';
// import Blog from './components/Beranda/Blog.vue';
</script>

<style>
html, 
body {
  padding: 0;
  margin: 0;
  font-family: 'Poppins', sans-serif;
}
</style>