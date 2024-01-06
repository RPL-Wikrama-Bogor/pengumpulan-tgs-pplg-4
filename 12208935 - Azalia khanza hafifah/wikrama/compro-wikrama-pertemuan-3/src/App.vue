<template>
  <Navbar></Navbar>
  <router-view></router-view> 
</template>

<script>
import navbar from '@/components/layouts/navbar.vue';

export default {
  components: {
    navbar,
  }
}
</script>


