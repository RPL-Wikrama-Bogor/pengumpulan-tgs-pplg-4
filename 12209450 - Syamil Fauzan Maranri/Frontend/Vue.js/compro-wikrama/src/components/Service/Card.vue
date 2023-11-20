<template>
    <div class="card-service">
        <img src="@/assets/img-wikrama-main/img/layanan.png" alt="layanan">
        <h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur illo nisi facere earum modi nostrum accusamus in labore eligendi possimus quae asperiores ipsa, adipisci, eveniet incidunt placeat error quaerat pariatur!</p>
    </div>
</template>

<script>

export default{
    props: ['layanan']
}

</script>

<style scoped>
    .card-service {
        text-align: start;
        min-height: 306px;
        padding: 30px 30px 0 30px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
        border-radius: 60px 0px 0px 0px;
        background: white;
        transition: all 0.5s ease;
        margin: 10px 10px;
    }

    .card-service img{
        width: 100px;
    }
    
    .card-service h4 {
        font-size: 18px;
        line-height: 30px;
        color: #343b4e;
    }

    .card-service p {
        font-weight: 400;
        color: #827f8d;
        margin: 0 0 10px 0;
    }

</style>