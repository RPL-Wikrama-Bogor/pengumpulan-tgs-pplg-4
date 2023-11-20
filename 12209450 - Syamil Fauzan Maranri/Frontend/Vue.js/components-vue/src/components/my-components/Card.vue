<template>

    <div class="card-service">
        <h4>
            {{ title }}
        </h4>
        <p>{{ description }}</p>

        <slot></slot>
         <button class="btn-service">Detail</button>
         <button class="btn-service-global">Detail</button>
    </div>

</template>
<script>
export default{
    props: ['title', 'description']
}
</script>
<style scoped>

.btn-service{
    margin-top: 10px;
    font-size: 10px;
    font-weight: 400;
    color: #fff;
    background-color: purple;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}

.card-service{
    text-align: start;
    min-height: 206px;
    padding: 30px 30px 0 30px;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
    border-radius: 60px 0px 60px 0px;
    background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(0,0,0,1) 100%);    transition: all 0.5s ease;
    margin: 10px 10px;
    color: #fff;
}
.card-service h4{
    font-size: 10px;
    line-height: 30px;
    color: #fff;
}

.card-service p{
    font-weight: 400;
    color: #827f8d;
    margin: 0 0 10px 0;
}

</style>