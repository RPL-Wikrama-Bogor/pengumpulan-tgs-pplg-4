// import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'

import Btn from "@/my-components/Button.vue";

const app = createApp(App);
app.component("MyBtn", Btn);
app.mount("#app");

// createApp(App).mount('#app')