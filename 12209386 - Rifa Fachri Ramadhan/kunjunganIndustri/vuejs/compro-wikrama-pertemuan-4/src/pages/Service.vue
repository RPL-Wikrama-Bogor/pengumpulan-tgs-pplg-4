<template>
    <div class="container">
        <Service :data="DataService"></Service>

    </div>
</template>

<script>
    import Service from '@/components/Beranda/Service.vue';
    import {Get} from '@/Api/index.js';

    export default {
        components: {
            Service
        },
        data() {
            return {
                DataService: [],
            }
        },  
        async created () {
        const responseService = await Get('http://127.0.0.1:9000/api/services')
        this.DataService = responseService.data.data
        }
    }
   
</script>