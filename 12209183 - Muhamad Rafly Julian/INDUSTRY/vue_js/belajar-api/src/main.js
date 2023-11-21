import './assets/style.css'
import { createRouter, createWebHistory } from 'vue-router'

import { createApp } from 'vue'

import Home from '@/Pages/Home.vue'
import Service from '@/Pages/Serviceview.vue'
import Portfolio from '@/Pages/Portfolioview.vue'
import Blog from '@/Pages/Blogview.vue'


import App from './App.vue'
const routes = [
    {
        path:'/',
        component: Home,
    },
    {
        path:'/Service',
        component: Service,
    },
    {
        path:'/Portfolio',
        component: Portfolio,
    },
    {
        path:'/Blog',
        component: Blog,
    },
    
];
const router = createRouter({
    history: createWebHistory(),
    routes
})

createApp(App).use(router).mount('#app')
