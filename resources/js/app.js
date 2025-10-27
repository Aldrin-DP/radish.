import { createApp } from 'vue';
import '../css/app.css';
import Alpine from 'alpinejs'

import AddRecipeForm from './components/AddRecipeForm.vue';

window.Alpine = Alpine
Alpine.start()

const app = createApp({});

app.component('add-recipe-form', AddRecipeForm);

app.mount('#app');