<template>
    <div class="portofolio">
        <h1>Portofolio</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, maxime. Iusto, ea sapiente obcaecati corrupti numquam odit </p>
        <div class="row-portofolio">
            <Card></Card>
        </div>
    </div>
</template>

<style>
    .portofolio h1 {
        text-align: center;
    }
</style>


<script>
    import Card from '../Portofolio/Card.vue';

    export default {
        components: {
            Card
        }
    };
</script>