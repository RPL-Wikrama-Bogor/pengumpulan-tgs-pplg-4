import "./assets/style.css";
import { createRouter, createWebHistory } from "vue-router";
import { createApp } from "vue";

import Home from "@/pages/Home.vue";
import Service from "@/pages/Service.vue";
import Portfolio from "@/pages/Portfolio.vue";
import Blog from "@/pages/Blog.vue";
import App from "./App.vue";

const routes = [
    {
        path: "/home",
         name: "home", 
         component: Home,
    },
    {
        path: "/service",
         name: "service", 
         component: Service,
    },
    {
        path: "/portfolio",
         name: "portfolio", 
         component: Portfolio,
    },
    {
        path: "/blog",
         name: "blog", 
         component: Blog,
    },
];
const router = createRouter({
    history: createWebHistory(), 
    routes,
});

createApp(App).use(router).mount("#app");