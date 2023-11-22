// import './assets/main.css'
import { createRouter, createWebHistory } from "vue-router";
import { createApp } from 'vue'
import App from './App.vue'
import home from '@/pages/home.vue';
import about from '@/pages/about.vue';


const routes = [
    {
        path:"/",
        component:home,
        name: "home",
    },
    {
        path:"/about",
        component:about,
    },
];
const router = createRouter({
    history: createWebHistory(),
    routes,
});
createApp(App).use(router).mount('#app')
