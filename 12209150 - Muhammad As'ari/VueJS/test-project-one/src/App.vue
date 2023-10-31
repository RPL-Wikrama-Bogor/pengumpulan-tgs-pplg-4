<template>
  <div class="card-service">
    <MyBtn></MyBtn>
    <Card v-for="item in cards" :title="item.title" :description="item.description"></Card>
    <!-- <p>{{ cards.date }}</p> -->
  </div>
  <button id="btn1" name="Btn"></button>
  <button id="btn1" name="Btn2"></button>
</template>

<script>
import Card from '@/components/my-components/Card.vue';
export default {
  components: { 
    Card
  }, 
  data() {
    return {
      cards: [
        {
          title: 'User-Friendly Behaviour For Business-minded People',
          description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe repellat ut hic expedita nesciunt molestiae aut, perspiciatis maiores rem, odit velit, provident adipisci. Magni natus sit ea, similique exercitationem minima?',
          date: '31 Oktober 2020',
        },
        {
          title: 'test',
          description: 'test',
        }
      ]
    };
  }
};
</script>


<style>

html, body {
  background-color: #f4f4f4;
  font-family: 'Poppins', sans-serif;
}

.card-service {
  display: flex;
}

.card-button {
  background-color: #007BFF;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 12px 20px; 
  font-size: 1.1rem; 
  cursor: pointer;
  align-self: flex-end; 
}

.card-button:hover {
  background-color: #0056b3;
}
</style>
