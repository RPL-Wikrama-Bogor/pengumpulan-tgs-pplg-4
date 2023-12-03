<template>
    <div class="container">
        <Portfolio :data="DataPortfolio"></Portfolio>
        <!-- <div class="category">
        </div> -->
    </div>
</template>

<script>
    import Portfolio from '@/components/Beranda/Portfolio2.vue';
    import {Get} from '@/Api/index.js';

    export default {
        components: {
            Portfolio
        },
        data() {
            return {
                DataPortfolio: [],
                DataCategories:[],
            }
        }, 
         
        async created () {
        const responsePortfolio = await Get('http://127.0.0.1:9000/api/portfolio');
        this.DataPortfolio = responsePortfolio.data.data;

        // const responseCategories = await Get('http://127.0.0.1:9000/api/categories');
        // console.log (responseCategories.data)
        // this.DataCategories = responseCategories.data;
        }
    }
   
</script>