import "@/assets/style.css";
import { createApp } from "vue";
import App from "./App.vue";
import { createRouter, createWebHistory } from "vue-router";
import Home from "@/pages/Home.vue";

import Protofolio from '@/page/Protofolio.vue';
const routes = [
  {
    path: "/",
    component: Home,
  },
  {
    path: '/Protofolio',
    component: Protofolio,
  }
];
const router = createRouter({
  history: createWebHistory(),
  routes,
});

createApp(App).use(router).mount("#app");
