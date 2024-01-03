<template>
    <div class="card-portofolio">
        <img src="@/assets/img/portfolio-1.jpg" alt="portofolio">
        <div class="card-portofolio-description">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p><span>klien: </span>fanny</p>
        </div>
    </div>
</template>
<style scoped>
.card-portofolio {
    text-align: start;
    min-height: 270px;
    padding: 20px 20px 0 30px;
    box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.05);
    border-radius: 45px 0px 0px 0px;
    background: white;
    transition: all 0.5s ease;
    margin: 10px 10px;
}
.card-portofolio img {
    max-width: 100%;
    height: auto;
}
.card-portofolio-description {
    padding: 0 20px 20px 20px;

}
.card-portofolio h4 {
   margin-top: 10px;
   font-weight: 900;
   font-size: 30px;
   line-height: 35px;
   margin-bottom: 0;
   color: #BEADFA;
}
</style>