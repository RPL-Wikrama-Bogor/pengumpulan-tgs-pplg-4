<template>
  <navbar></navbar>
  <router-view></router-view>
</template>

<script>
import navbar from '@/components/Layouts/Navbar.vue';

export default {
  components: {
    navbar,
  }
}
</script>

