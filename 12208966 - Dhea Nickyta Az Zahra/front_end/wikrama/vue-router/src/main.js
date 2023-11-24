// import './assets/main.css'

import { createRouter, createWebHistory } from "vue-router";
import { createApp } from "vue";
import App from "./App.vue";
import Home from "@/pages/home.vue";
import About from "@/pages/About.vue";

const routes = [
    {
        path:'/',
        component: Home,
        name: "home"
    },
    {
        path:'/about',
        component: About,
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount('#app')
