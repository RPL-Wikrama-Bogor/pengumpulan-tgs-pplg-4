import '@/assets/style.css'
import { createApp } from 'vue';
import App from "./App.vue";
import {createRouter, createWebHistory} from "vue-router";
import home from "@/pages/home.vue";

const routes =[
    {
        path: "/",
        component: home,
    },
];
const router= createRouter({
    history: createWebHistory(),
    routes,
});

createApp(App).use(router).mount('#app')
