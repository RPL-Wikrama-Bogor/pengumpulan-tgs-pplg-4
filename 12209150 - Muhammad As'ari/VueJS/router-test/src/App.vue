<template>
  <div>
    <ul>
      <li>
        <router-link :to="{ name: 'Home' }">Home</router-link>
      </li>
      <li>
        <router-link to="/about">About</router-link>
      </li>
    </ul>
    <router-view></router-view>

    <div class="card-container">
      <Card
        v-for="card in cards"
        :key="card.id"
        :title="card.title"
        :description="card.description"
        :name="card.name"
        :date="card.date"
      ></Card>
    </div>
  </div>
</template>

<script>
import Card from '@/components/cards/card.vue';

export default {
  components: {
    Card,
  },
  data() {
    return {
      cards: [
        {
          id: 1,
          title: 'Shift the overall look and feel by adding these wonderful touches to furniture in your home',
          description: "Ever been in a room and felt like something was missing? perhaps it felt slightly bare and uninviting. I've got some simple tips to help you make any room feel complete.",
          name: 'Michelle Appleton',
          date: '28 Jun 2020',
        }
      ],
    };
  },
};
</script>

<style>
html, body {
  font-family: 'Poppins', sans-serif;
}
</style>