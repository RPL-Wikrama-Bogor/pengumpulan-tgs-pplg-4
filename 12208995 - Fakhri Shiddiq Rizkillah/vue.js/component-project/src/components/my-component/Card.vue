<template>
    <div class="card-service">
    <h4>
        {{ title }}
    </h4>
    <p> {{ description }}</p>

    <slot></slot>
    <button class="btn-service">Detail</button>
    <br>
    <button class="btn-service1">Detail</button>
</div>    
</template>
<script>
export default{
    props: ['title', 'description']
}

</script>

<style scoped>
.btn-service1 {
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400;   
    color: rgb(117, 102, 102);
    background-color: #6fff00;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}
.btn-service {
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400;
    color: rgb(117, 102, 102);
    background-color: #2600ff;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}
.card-service{
            text-align: start;
            min-height: 306px;
            padding: 30px 30px 0px 30px;
            box-shadow: 0px 10px 30px rgba(255, 0, 0, 0.144);
            background: rgb(255, 255, 255);
            transition: a11 0.5s ease;
            margin: 10px 10px;
        }
.card-service h4{
        font-size: 18px;
        line-height: 30px;
        color: rgb(255, 0, 0);
}
</style>

