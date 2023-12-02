<template>
<Navbar></Navbar>
<router-view></router-view>
</template>
<script>
    import Navbar from '@/components/layouts/navbar.vue';
    export default {
        components: {
            Navbar,
            
        }
    }
</script>