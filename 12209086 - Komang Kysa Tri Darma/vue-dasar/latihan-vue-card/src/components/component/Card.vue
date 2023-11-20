<template>
  <div class="main">
    <div class="card-service">
      <div class="card-image">
        <img :src="img" alt="Gambar">
      </div>
      <div class="card-content">
        <h2>{{ title }}</h2>
        <p>{{ description }}</p>
        <div class="author-info">
          <img :src="avatar" alt="Nama Penulis">
          <div class="author-details">
            <p class="nama">{{ name }}</p>
            <slot></slot>
          </div>
          <div class="share-icon">
          <img :src="imgShare" alt="Bagikan" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ['img', 'title', 'description', 'name', 'avatar', 'imgShare'],
};
</script>
<style scoped>
.card-service {
  display: flex;
  flex-direction: row;
  background-color: #fff;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 800px;
  margin: 10px;
  border-radius: 8px;
}

.card-image {
  flex: 1;
  overflow: hidden;
}
.card-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
}

.card-content {
  flex: 2;
  padding: 20px;
  margin-top: 20px;
}

h2 {
  font-size: 24px;
  margin: 0;
  margin-bottom: 10px;
}

p {
  font-size: 16px;
  color: #555;
}

.author-info {
  display: flex;
  align-items: center;
}

.author-info img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin-right: 10px;
}

.author-details p {
  font-size: 14px;
  margin: 0;
}

.author-info .share-icon {
  display: flex;
  align-items: center;
  margin-top: 20px;
  margin-left: auto;
}

.author-info .share-icon img {
  width: 20px;
  height: 20px;
  cursor: pointer;
}

.nama{
  font-weight: 600;
  font-size: 20px;
}
</style>