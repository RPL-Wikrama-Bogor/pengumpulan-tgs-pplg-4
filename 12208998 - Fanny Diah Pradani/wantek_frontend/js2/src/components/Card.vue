<template>
<div class="wrap">
    <div class="card">
        <div class="img-wrap">
            <img :src="'/src/assets/img/' +image" alt="" srcset="">
        </div>
        <div class="text-wrap">
            <h3>{{ judul }}</h3>
      <div v-html="text"></div>
      <slot></slot>
        </div>
    </div>
</div>
</template>

<script>
export default {
    // mengambill data dari luar atau file lain
    // nama props == nama bind attribute dicomponent nya tempat data dikirim
    props: ['judul', 'text', 'image'],
}
</script>

<style scoped>
.wrap {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-bottom: 25px;
}
.card {
    width: 600px;
    height: auto;
    margin-top: 230px;
    border-radius: 5px;
    border:  solid #331D2C;
    display: flex;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.50);

}
.img-wrap {
    width: 35%;
    height: 100%;
    position: relative;

}
.text-wrap {
    width: 65%;
    height: 100%;
    padding: 10px;
}
.img-wrap img {
    width: 100%;
    height: 100%;
    display: flex;
    /* position: absolute; */
}
</style>