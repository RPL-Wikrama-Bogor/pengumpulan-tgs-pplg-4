<template>
    <div class="service">
        <h3>Layanan Kami</h3>
        <div class="row-service">
            <card></card>
            <card></card>
            <card></card>
        </div>
    </div>
</template>

<script>
import card from '@/components/service/card.vue';
export default{
    components:{
        card
    }
}
</script>

<style>
.service{
    margin-top: 80px;
}

.service h3{
    font-weight: 900;
    font-size: 48px;
    line-height: 35px;
    color: #213555;
    margin-top: 30px;
    text-align: center;
}

.row-service{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}

@media screen and (max-width: 600px) {
    .row-service{
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 10px;
    }
}
</style>