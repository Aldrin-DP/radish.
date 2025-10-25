import { createApp } from 'vue';
import '../css/app.css';
import Alpine from 'alpinejs'
import App from './App.vue';

window.Alpine = Alpine
Alpine.start()

const app = createApp({});

app.mount('#app');