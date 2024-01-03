import { createRouter, createWebHistory } from "vue-router";
import '@/assets/style.css'
import { createApp } from 'vue'
import App from './App.vue'
import Home from '@/pages/home.vue'
import beranda from '@/components/beranda/beranda.vue'
import blog from '@/components/beranda/blog.vue'
import portofolio from '@/components/beranda/portofolio.vue'
import service from '@/components/beranda/service.vue'




const routes = [
    {
        path:"/",
        component:Home,
        name: "home",
    },
    {
        path:"/",
        component:beranda,
        name: "beranda",
    },
    {
        path:"/blog",
        component:blog,
        name: "blog",
    },
    {
        path:"/portofolio",
        component:portofolio,
        name: "portofolio",
    },
    {
        path:"/service",
        component:service,
        name: "service",
    },
];
const router = createRouter({
    history: createWebHistory(),
    routes,
});
createApp(App).use(router).mount('#app')
