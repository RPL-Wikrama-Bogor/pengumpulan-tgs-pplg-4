<template>
  <div class="card-service">
    <div class="card-content">
      <div class="card-image">
        <img src="@/assets/cardImage.jpg" alt="Card Image" />
      </div>
      <div class="text-content">
        <h4> {{ title }}</h4>
        <p>  {{ description }}</p>
        <slot></slot>
        <button class="card-button">Learn More</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['title', 'description']
};
</script>

<style scoped>
.card-service {
  border-radius: 10px;
  margin: 10px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s;
  background-color: #fff;
  max-width: 300px; /* Adjust the maximum width as needed */
  height: auto; /* Adjust the height as needed */
  display: flex;
  flex-direction: column;
  position: relative;
}

.card-image {
  max-width: 100%;
  height: 150px;
  overflow: hidden;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.card-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.card-content {
  padding: 20px; /* Increased padding for better spacing */
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.card-title {
  font-size: 1.5rem; /* Larger font for the title */
  margin: 0;
}

.card-description {
  font-size: 1rem;
  color: #5555557a;
  line-height: 1.6;
  margin-bottom: 20px; /* Increased margin for better spacing */
}

</style>
