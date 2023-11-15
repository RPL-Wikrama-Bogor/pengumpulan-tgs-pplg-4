<template>
    <div class="card-service">
        <div class="card-content">
            <div class="img">
                <img src="../../assets/pin.jpeg" alt="">
            </div>
            <div class="imgf">
                <img src="../../assets/face.png" alt="">
            </div>
            <div class="text-content">
                <h4>
                    {{ title }}
                </h4>
                <p>{{ description }}</p>
                <slot></slot>
            </div>
            
        </div>
        <!-- <font-awesome-icon :icon="['fas', 'arrow-rotate-right']" /> -->
    </div>
</template>

<script>

export default {
    props: ['title', 'description']
}
</script>

<style scoped>
.card-service {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.card-content {
    width: 800px;
    height: 300px;
    border-radius: 7px;
    border: 4px;
    display: flex;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.50);
}

.text-content {
    width: 65%;
    height: 100%;
    padding: 10px;
    margin: 10px;
}

.card-service h4 {
    font-size: 18px;
    line-height: 30px;
    color: #282323; 
}

.card-service p {
    font-weight: 400;
    color: #827f8d;
    margin: 0;
}

img {
    width: 100%;
    height: 100%;
    display: flex;
    border-radius: 5px;
    /* position: absolute; */
}
.imgf{
    height: 40px;
    margin-top: 220px;
}

</style>

