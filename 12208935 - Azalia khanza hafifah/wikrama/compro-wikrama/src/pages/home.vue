<template>
    <div class="container">
        <beranda></beranda>
        <service></service>
        <portofolio></portofolio>
        <blog></blog>
    </div>
</template>

<script>
import beranda from '@/components/Beranda/beranda.vue';
import service from '@/components/Beranda/service.vue';
import portofolio from '@/components/Beranda/portofolio.vue'
import blog from '@/components/Beranda/blog.vue';

import { Get } from '@/Api/index.js'

export default {
    components:{
        beranda,
    service,
    portofolio,
    blog
    },
    data() {
        return {
            dataHome: []
        }
    } ,
    async mounted() {
        const response = await Get ('http://localhost:9000/api/home');
        console.log(response)
    },
}
</script>