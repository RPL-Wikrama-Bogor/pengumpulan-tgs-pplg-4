import './assets/main.css';

import { createApp } from 'vue';
import App from './App.vue';
import Btn from "@/components/my-components/Button.vue";

createApp(App).mount('#app');

App.component('MyBtn', Btn);
App.mount('#app');