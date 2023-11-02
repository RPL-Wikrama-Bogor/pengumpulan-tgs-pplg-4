import './assets/main.css'

import { createRouter, createWebHistory } from 'vue-router';
import { createApp } from 'vue';
import App from './App.vue';
import Header from "@/components/Beranda/Header.vue";
import Portofolio from "@/components/Beranda/Portofolio.vue";
import Service from "@/components/Beranda/Service.vue";
import Blog from "@/components/Beranda/Blog.vue";

const routes = [
    {
        path: "/",
        component: Header,
        name: "Header",
    },
    {
        path: "/Portofolio",
        component: Portofolio,
    },
    {
        path: "/Service",
        component: Service,
    },
    {
        path: "/Blog",
        component: Blog,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount('#app')
