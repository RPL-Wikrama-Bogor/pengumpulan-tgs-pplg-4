<template>
    <div class="portofolio">
        <h3>Portofolio Kami</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, cum sunt. Ex, exercitationem praesentium obcaecati veritatis tempore quidem! Iste quisquam doloribus animi ipsum placeat illo sint deleniti dolore harum mollitia.</p>
        <div class="row-portofolio">
            <Card v-for="item in data" :portfolio="item"></Card>
            <Card v-for="item in data" :portfolio="item"></Card>
            <Card v-for="item in data" :portfolio="item"></Card>
        </div>
    </div>
</template>
<script>
    import Card from '@/components/Portofolio/Card.vue'
    export default{
        components: {
            Card,
        },
        props:['data']
    }
</script>
<style>
    .portofolio{
        margin-top: 80px;
    }

    .portofolio h3 {
        margin: auto;
        font-family: 'Raleway', sans-serif;
        font-weight: 900;
        font-size: 48px;
        justify-content: center;
        display: flex;
    }

    .portofolio p{
        font-weight: 900;
        font-size: 14px;
        line-height: 20px;
        color: gray;
        max-width: 600px;
        margin: auto;
        margin-top: 14px;
        margin-bottom: 25px;
    }
    .portofolio p span{
        color: gray;
    }
    .row-portofolio{
        display: grid;
        grid-template-columns: repeat(3,1fr);
        grid-gap: 10px;
    }
    @media screen and (max-width: 600px) {
        .row-portofolio{
            display: flex;
            grid-template-columns: repeat(1,1fr);
            grid-gap: 10px;
        }
    }
</style>