<template>
    <div class="card-service">
        <h4>
            {{ title }}
        </h4>
        <div class="image">
            <img src="@/assets/kelaparan.jpeg">
        </div>
        <p>{{ description }}</p>
        
        <slot></slot>
        <button class="btn-service">Submit</button>
        <MyBtn></MyBtn>
    </div>
</template>

<script>
    export default {
        props: ['title', 'description']
    }
</script>

<style scoped>
.img{
    width: 10px;
    height: 10px;
}
.card-service {
    text-align: start;
    min-height: 300px;
    padding: 30px 30px 0 30px;
    box-shadow: 0 30px 30px rgba(0, 0, 0, 0.05);
    border-radius: 60px 0 0 0;
    background: white;
    transition: all 0.5s ease;
    margin: 10px 10px;
}

.card-service h4 {
    font-size: 15px;
    line-height: 30px;
    color: #343b4e;
}

.card-service p {
    font-weight: 400px;
    color: #827f8d;
    margin: 0 0 10px 0;
}

.btn-service {
    margin-top: 10px;
    font-size: 16px;
    font-weight: 400px;
    color: white;
    background-color: #4c55c4;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
}



</style>