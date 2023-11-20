import "./assets/style.css";
import { createRouter, createWebHistory } from "vue-router";
import App from '@/App.vue'
import {createApp} from "vue";

import Home from '@/pages/Home.vue';
import Beranda from '@/components/Beranda/Beranda.vue';
import Blog from '@/components/Beranda/Blog.vue';
import Service from '@/components/Beranda/Service.vue';
import Portfolio from '@/components/Beranda/Portofolio.vue';
const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
    },
    {
        path: "/",
        name: "beranda",
        component: Beranda,
    },
    {
        path: "/",
        name: "blog",
        component: Blog,
    },
    {
        path: "/",
        name: "portofolio",
        component: Portfolio,
    },
    {
        path: "/",
        name: "service",
        component: Service,
    },
];
const router = createRouter({
    history: createWebHistory(),
    routes,
})
createApp(App).use(router).mount('#app');