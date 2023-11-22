<template>
    <div class="portofolio">
        <h3>Portofolio Kami</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        <div class="row-portofolio">
            <card></card>
        </div>
    </div>
</template>

<script>
import Card from '@/components/portofolio/card.vue';
export default {
    components: {
        Card
    }
}
</script>

<style >
    .portofolio{
        margin-top: 80px;
    }

    .portofolio h3{
        margin: auto;
        font-family: 'Relaway', sans-serif;
        font-weight: 900;
        font-size: 48px;
        line-height: 70px;
        color: #213555;
        margin-bottom: 15px;
        text-align: center;
    }

    .portofolio p{
        font-weight: 900;
        font-size: 14px;
        line-height: 20px;
        text-align: center;
        color: #4F556A;
        margin: auto;
        margin-top: 14px;
        margin-bottom: 25px;
    }

    .portofolio p span{
        color: #213555;
    }

    .row-portofolio{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 10px;
    }

    @media screen {
        
    }
</style>