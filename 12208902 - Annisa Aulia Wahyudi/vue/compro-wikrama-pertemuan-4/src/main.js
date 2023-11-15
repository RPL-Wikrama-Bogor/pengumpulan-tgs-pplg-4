import "@/assets/style.css";
import { createRouter, createWebHistory } from "vue-router";

import { createApp } from "vue";

import Home from "@/pages/Home.vue";
import Portofolio from "@/pages/Portofolio.vue";
import Contact from "@/pages/Contact.vue";
import Blog from "@/pages/Blog.vue";

import App from "./App.vue";

const routes = [
  {
    path: "/",
    component: Home,
  },
  {
    path: "/Portofolio",
    component: Portofolio,
  },
  {
    path: "/Contact",
    component: Contact
  },
  {
    path: "/Blog",
    component: Blog
  }
];
const router = createRouter({
  history: createWebHistory(),
  routes,
});

createApp(App).use(router).mount("#app");
