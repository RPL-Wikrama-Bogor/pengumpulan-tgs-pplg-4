<template>
    <div class="card-service">
        <img :src="img" alt="">
       <h1> {{ nama }}</h1>
        <h4>
            {{ title }}
        </h4>
        <p>
            {{ description }}   
       </p>
 
        <slot></slot>
    </div>

 
    </template>
    <script>
    
    export default{
        props: ['title', 'description','img','nama',]
    }
    
    </script>
    
    <style scoped>
.card-service h1{
    font-size: 25px;
}
     .card-service {
     text-align: left;
     min-height: 250px;
     padding: 30px 30px 0px 30px;
     box-shadow: 0px 30px 30px rgba(0,0,0,0.05);
     border-radius: 60px 60px 60px 60px;
     background: rgb(255, 180, 67);
     transition: all 0.5s ease;
     margin: 10px 10px;
     }
    
     .card-service h4{
        font-size: 20px;
        line-height: 30px;
        color: #343b4e;
     }
     .card-service p{
        font-weight: 400;
        color: #827f8d;
        margin: 0 0 10px 0;
     }
     img{
        height: 200px;
     float: right;
     border-radius: 10px;
  

     }
    
    </style>