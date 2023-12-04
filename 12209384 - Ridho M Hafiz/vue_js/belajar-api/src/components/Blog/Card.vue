<template>
    <div class="card-blog">
        <img src="@/assets/img/portfolio-1.jpg" alt="">
        <div class="card-blog-description">
            <div class="time">
                {{ blog.created_at }}
            </div>
            <h4>
                {{ blog.title }}
            </h4>
            <p>
                {{ blog.description }}
            </p>
            <a href="">Read More</a>
        </div>
    </div>
</template>
<script>
export default{
    props:['blog']
}
</script>
<style>
.card-blog img {
    width: 200px;
    height: 200px;
    object-fit: contain;
    padding: 0 0 20px 20px;
}
.card-blog-description{
    padding: 0 20px 0 20px;
}
.card-blog-description .time{
    font-weight: 500;
    font-size: 12px;
    line-height: 17px;
    color: gray;
}
.card-blog-description a{
    font-weight: 900;
    font-size: 15px;
    line-height: 18px;
    text-transform: capitalize;
    color: blue;
    cursor: pointer;
    text-decoration: none;
}
.card-blog h4{
    font-weight: 900;
    font-size: 24px;
    line-height: 28px;
    color: darkblue;
    margin-bottom: 0px;
    margin-top: 5px;
}
.card-blog p{
    font-size: 16px;
    font-weight:400 ;
    line-height: 22px;
    color: gray;
    margin-top: 10px;
    margin-bottom: 5px;
}

@media screen and (max-width: 600px) {
    .row-blog {
        display: grid;
        grid-template-columns: repeat(1,1fr);
        grid-gap: 10px;
    }

    .card-blog {
        flex-direction: column;
        align-items: start;
    }

    .card-blog img {
        width: 100%;
        height: 260px;
        object-fit: contain;
    }
}
</style>