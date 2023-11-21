<template>
    <div class="container">
        <Portfolio :data="DataPortfolio"></Portfolio>
    </div>
</template>

<script>
import Portfolio from '@/components/Beranda/Portfolio.vue';
import { Get } from '@/Api/index.js';
export default{
    components:{
    Portfolio
    },
    data(){
        return {
            DataPortfolio: [],
        }
    },
    async created(){
    const responsePortfolio = await Get('portfolio');
        this.DataPortfolio = responsePortfolio.data.data;
}   
}
</script>