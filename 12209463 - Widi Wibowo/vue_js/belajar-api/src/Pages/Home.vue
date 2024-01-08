<template>  
    <div class="container"> 
        <Beranda :data="DataHome"></Beranda>
        <!-- <Service :data="DataLayanan"></Service>
        <Portofolio :data="DataPortfolio"></Portofolio>
        <Blog :data="DataBlog"></Blog> -->
    </div>
</template>

<script>
    import Beranda from '@/components/Beranda/Beranda.vue'
    // import Blog from '@/components/Beranda/Blog.vue'
    // import Portofolio from '@/components/Beranda/Portofolio.vue'
    // import Service from '@/components/Beranda/Service.vue'
    
    import { Get } from '@/Api/index.js';
    export default{
        components: {
            Beranda,
            // Blog,
            // Portofolio,
            // Service,
        },
        data(){
            return{
                DataHome:[],
                // DataLayanan:[],
                // DataPortfolio: [],
                // DataBlog: [],
            }
        },
        async mounted() {
            const response = await Get('http://127.0.0.1:9000/api/home');
            this.DataHome = response.data;

            // const responseLayanan = await Get('http://127.0.0.1:9000/api/services');
            // this.DataLayanan = responseLayanan.data.data;

            // const responsePortfolio = await Get('http://127.0.0.1:9000/api/portfolio');
            // this.DataPortfolio = responsePortfolio.data.data;

            // const responseBlog = await Get('http://127.0.0.1:9000/api/blog');
            // this.DataBlog = responseBlog.data.data;


        },
    }
</script>