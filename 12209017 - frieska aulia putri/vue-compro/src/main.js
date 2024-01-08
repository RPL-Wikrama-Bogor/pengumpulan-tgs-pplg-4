import '@/assets/style.css'
import { createRouter, createWebHistory } from 'vue-router'
import { createApp } from 'vue'
import App from './App.vue'
import Beranda from '@/components/Beranda/Beranda.vue';
import Portofolio from '@/Pages/Portofolio.vue';
import Blog from '@/Pages/Blog.vue';
import Contact from '@/Pages/Contact.vue';

const routes = [
    {
        path: '/',
        component: Beranda,
        name: 'home'
    },
    {
        path: '/Portofolio',
        component: Portofolio,
    },
    {
        path: '/Blog',
        component: Blog,
    },
    {
        path: '/Contact',
        component: Contact,
    },
]

const router = createRouter ({
    history:createWebHistory(),
    routes
})

createApp(App).use(router).mount('#app')
