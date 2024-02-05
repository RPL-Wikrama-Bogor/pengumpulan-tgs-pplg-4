import './assets/style.css'

import { createRouter, createWebHistory } from "vue-router";
import { createApp } from 'vue'
import App from './App.vue'
import Beranda from '@/components/Beranda/Beranda.vue';
import Blog from '@/components/Beranda/Blog.vue';
import Portofolio from '@/components/Beranda/Portofolio.vue';
import Service from '@/components/Beranda/Service.vue';

const routes = [
    {
        path: '/',
        component: Beranda,
        name: "Beranda"
    }, 
    {
        path: '/Portofolio',
        component: Portofolio,
        name: "Portofolio"
        
    },
    {
        path: '/Blog',
        component: Blog,
        name: "Blog"
       
    },
    {
        path: '/Service',
        component: Service,
        name: "Service"
        
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});
createApp(App).use(router).mount('#app')
