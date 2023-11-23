import "@/assets/style.css";
import { createApp } from "vue";
import App from "./App.vue";
import { createRouter, createWebHistory } from "vue-router";
import Home from "@/pages/Home.vue";
import Portfolio from "@/pages/Portofolio.vue";

const routes = [
  {
    path: "/",
    name: "home",
    component: Home,
  },
  {
    path: "/Portofolio",
    name: "portofolio",
    component: Portfolio
  }
];
const router = createRouter({
  history: createWebHistory(),
  routes,
});

createApp(App).use(router).mount("#app");
