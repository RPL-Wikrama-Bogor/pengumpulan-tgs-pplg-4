<template>
    <div class="portofolio">
        <h3>Portofolio</h3>
        <p>Welcome to Soul Society Hospital, healthy greetings to all, may God give you health. sehat sehat cees</p>
        <div class="row-portofolio">
            <Card></Card>
            <Card></Card>   
            <Card></Card>   
        </div>
    </div>
</template>

<script>
import Card from '@/components/Portofolio/Card.vue';
export default {
    components: {
        Card
    }
}
</script>

<style>
.portofolio {
    margin-top: 80px;
}

.portofolio h3 {
    margin: auto;
    font-family: 'Raleway', sans-serif;
    font-weight: 900;
    font-size: 48px;
    line-height: 70px;
    color: #042181;
    margin-bottom: 15px;
    text-align: center;
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
}

.portofolio p span {
    color: gray;
}

.row-portofolio {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}

@media screen and (max-width: 680px) {
    .row-portofolio {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
    }
}

</style>