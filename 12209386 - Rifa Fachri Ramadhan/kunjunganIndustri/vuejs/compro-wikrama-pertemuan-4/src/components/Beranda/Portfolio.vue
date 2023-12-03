<template>
  <div class="portofolio">
    <h3>Portofolio kami</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <div class="category">
        <span v-for="category in DataCategories" @click="filter(category.id)">{{ category.title }}</span>
    </div>
    <div class="row-portofolio">
        <CardPortfolio v-for="item in data" :portfolio="item"></CardPortfolio>
    </div>
  </div>
</template>
<script>
import CardPortfolio from '@/components/Portfolio/Card.vue';
import {Get} from '@/Api/index.js';

export default {

    components: {
        CardPortfolio
      
    },
    methods:{
        async filter(id){       
        const responsePortfolio = await Get('http://127.0.0.1:9000/api/portfolio?category_id=' + id);
        this.DataPortfolio = responsePortfolio.data.data;
        }
    },

    props: ['data'],
    data() {
            return {
                DataCategories:[],
                DataPortfolio: [],
            }
        },
        async created (){
            const responseCategories = await Get('http://127.0.0.1:9000/api/categories');
            console.log (responseCategories.data)
            this.DataCategories = responseCategories.data;

            const responsePortfolio = await Get('http://127.0.0.1:9000/api/portfolio');
            this.DataPortfolio = responsePortfolio.data.data;
        }  
}
</script>
<style scope>
.category{
    margin: 10px 0 35px 0;
    display: flex;
    flex-wrap: wrap;
}
.category span{
    background-color: #bdcdff;
    padding: 10px 15px;
    font-weight: 500;
    border-radius: 20px;
    margin: 5px;
    cursor: pointer;
}
.portofolio {
    margin-top: 10px;

}

.portofolio h3 {
    margin: top;
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

.row-portofolio {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}


@media screen and (max-width: 600px) {
    .row-portofolio {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
    }
    .portofolio h3 {
        font-size: 20px;
    }
}
</style>