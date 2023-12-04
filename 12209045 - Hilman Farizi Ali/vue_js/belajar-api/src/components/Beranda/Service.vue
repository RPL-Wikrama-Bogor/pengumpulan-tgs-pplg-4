<template>
    <div class="section_2">
        <h2>Layanan Kami</h2>
        <div class="row-service">
            <Card v-for="item in data" :layanan="item"></Card>
        </div>
    </div>
</template>
<script>
    import Card from '@/components/Service/Card.vue'
    export default {
        components: {
            Card,
        },
        props: ['data']
    }
</script>
<style scoped>
    .section_2 h2{
        font-weight: 900;
        font-size: 40px;
        line-height: 35px;
        color: rgb(0, 0, 0);
        margin-bottom: 30px;
        text-align: center;
    }
    .row-service {
        display: grid;
        grid-template-columns: repeat(3,1fr);
        grid-gap: 10px;
    }
    @media screen and (max-width: 600px){
        .row-service {
            display: grid;
            grid-template-columns: repeat(1,1fr);
            grid-gap: 10px;
        }
    }
</style>