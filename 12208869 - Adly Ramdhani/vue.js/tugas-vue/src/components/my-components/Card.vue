<template>
    <div class="card-service">
        <h1>  {{ title }} </h1>
        <p>{{ description }}</p>
        <h6>{{ name }}</h6>
        <img :src="image" alt="">
            <slot></slot>
            
    </div>
</template>
<script>
export default{
    props:['title', 'description', 'name', 'image' ]
}
</script>

<style scoped>
.card-service{
    text-align: center;
    /* min-height: 360px; */
    padding: 30px 30px 30px 30px ;
    box-shadow: 0px 10px 30px white;
    background: white;
    transition: all 0.5ms ease;
    margin: 20px 10px;
}

.card-service h6{
   font-size: 18px;
   line-height: 30px;
   color:#0F0F0F;
}
.card-service p{
   font-weight: 400;
   margin: 10px;
   color:#610C9F;
}



</style>