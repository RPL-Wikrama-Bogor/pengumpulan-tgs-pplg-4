// import './assets/main.css'

import { createApp } from "vue";
import App from "./App.vue";
import Home from "@/pages/Home.vue";
import About from "@/pages/About.vue";
import {createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
        path: "/", 
        component: Home,
        name: "Home",
    },
    {
        path: "/About", 
        component: About,
        name: About,
    }
];
const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount('#app');