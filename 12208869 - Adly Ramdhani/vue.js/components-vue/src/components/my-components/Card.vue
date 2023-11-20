<template>
    <div class="card-service">
        <h4>
            {{ title }}
        </h4>
          
        <p>{{ description }}</p>
            <slot></slot>
            <button class="btn-service">Detail</button > 
            <button class="btn-service-global">Detail</button > 
    </div>
</template>
<script>
export default{
    props: ['title', 'description']
}
</script>
<style scoped>
.card-service{
    text-align: start;
    min-height: 360px;
    padding: 30px 30px 30px 30px ;
    box-shadow: 0px 10px 30px #B6FFFA;
    border-radius: 60px ;
    background: #98E4FF;
    transition: all 0.5ms ease;
    margin: 10px 10px;
}

.card-service h5{
   font-size: 18px;
   line-height: 30px;
   color:#0F0F0F;
}
.card-service p{
   font-weight: 400;
   margin: 0 0 10px 0;
   color:#610C9F;
}

.btn-service{
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400;
    color: white;
    background-color: #80B3FF;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}

</style>