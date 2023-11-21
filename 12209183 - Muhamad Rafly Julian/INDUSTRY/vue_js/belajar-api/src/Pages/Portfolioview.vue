<template>  
    <div class="container"> 
        <!-- <Beranda :data="DataHome"></Beranda> -->
        <!-- <Service :data="DataLayanan"></Service> -->
        <Portofolio :data="DataPortfolio"></Portofolio>
        <!-- <Blog :data="DataBlog"></Blog> -->

        <div class="category">
             <span v-for="category in DataCategories" @click="filter(category.id)">{{ category.title}}</span> 
                
        </div>
            <div class="row-portofolio">
                <card v-for="item in data" :portfolio="item"></card>
            </div>
    </div>
</template>

<script>
    //import Beranda from '@/components/Beranda/Beranda.vue'
    // import Blog from '@/components/Beranda/Blog.vue'
     import Portofolio from '@/components/Beranda/Portofolio.vue'
    // import Service from '@/components/Beranda/Service.vue'
    
    import { Get } from '@/Api/index.js';
    export default{
        components: {
           // Beranda,
            // Blog,
             Portofolio,
            // Service,
        },
        methods:{
            filter(id){
            //     const responsePortfolio = await Get('http://127.0.0.1:9000/api/portfolio?category_id='+ id);
            //  this.DataPortfolio = responsePortfolio.data.data;
            }
        },
        data(){
            return{
               // DataHome:[],
                // DataLayanan:[],
                 DataPortfolio: [],
                 DataCategories: [],
                // DataBlog: [],
            }
        },
        async mounted() {
            // const response = await Get('http://127.0.0.1:9000/api/home');
            // this.DataHome = response.data;

            // const responseLayanan = await Get('http://127.0.0.1:9000/api/services');
            // this.DataLayanan = responseLayanan.data.data;

             const responsePortfolio = await Get('http://127.0.0.1:9000/api/portfolio');
             this.DataPortfolio = responsePortfolio.data.data;
             const responseCategories= await Get('http://127.0.0.1:9000/api/categories');
             this.DataCategories = responseCategories.data.data;


            // const responseBlog = await Get('http://127.0.0.1:9000/api/blog');
            // this.DataBlog = responseBlog.data.data;


        },
    }
</script>
<style>
    .category {
        margin: 10px 0 35px 0;
        display: flex;
        flex-wrap: wrap;
    }

    .category span {
        background-color: #bdcdff;
        padding: 10px 15px;
        font-weight: 500;
        border-radius: 20px;
        margin: 5px;
        cursor: pointer;
    }

    .row-portofolio {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 10px;
    }

    .portofolio {
        margin-top: 10px;
    }

    .portofolio h3 {
        margin-top: 10px;
        font-weight: 900;
        font-size: 30px;
        line-height: 35px;
        margin-bottom: 0;
        color: #042181;
    }

    .portofolio p {
        font-weight: 900;
        font-size: 14px;
        line-height: 20px;
        color: #4F556A;
        max-width: 680px;
        margin: auto;
        margin-top: 14px;
        margin-bottom: 25px;
        text-align: center;
    }

    .portofolio p span {
        color: gray;
    }
        @media screen and (max-width: 600px) {
            .row-portofolio {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                grid-gap: 10px;
            }

            .portofolio h4 {
                font-size: 20px;
            }
        }
</style>