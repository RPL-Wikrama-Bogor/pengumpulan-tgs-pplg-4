<template>
    <div class="card-container">
    <div class="card-services">
      <div class="content-wrapper">
        <img class="card-image" :src="gambar" alt="..">
        <div class="text-content">
          <h4 b>{{ title }}</h4>
          <h5>{{ description }}</h5>
          <img class="logo" src="@/assets/img/2.jpeg" alt="..">
          <p>{{ nama }}</p>
          <slot></slot>
        </div>
      </div>
    </div>
</div>
  </template>
  
  <script>
  export default {
    props: ['nama','logo','gambar', 'title', 'description']
  };
  </script>
  
  <style scoped>

  .card-container {
    margin-left: 10px;
  }
  .card-services {
    text-align: start;
    box-shadow: 0px 10px 30px rgb(255, 255, 255);
    background: rgb(255, 255, 255);
    transition: all 0.5s ease;
    margin: 10px;
    word-wrap: break-word;
    max-width: 100%;
    width: 500px;
    height: 200px;
  }
  
  .content-wrapper {
    display: flex;
    align-items: center;
  }
  
  .card-image {
    width: 200px; /* Sesuaikan lebar gambar sesuai preferensi Anda */
    height: 200px; /* Sesuaikan tinggi gambar sesuai preferensi Anda */
    margin-right: 20px;
  }
  
  .text-content {
    flex: 1;
  }
  
  .card-services h4 {
    font-weight: bold;
    margin: 8px;
    font-size: 12px;
    line-height: 13px;
    color: #343b4e;
  }
  
  .card-services p {
    font-weight: 400;
    color: #000000;
    margin-left: 60px;
    font-size: 13px;
  }

  .logo {
    width: 50px;
    height: 50px;
    border-radius: 100%;
    margin-bottom: -50px;
    padding: 2px;
  }
  </style>
  