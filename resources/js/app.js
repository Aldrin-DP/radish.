import { createApp } from 'vue';
import '../css/app.css';
import './bootstrap';
import Alpine from 'alpinejs'
import Toast from 'vue-toastification'
import "vue-toastification/dist/index.css";

import AddRecipeForm from './components/AddRecipeForm.vue';

window.Alpine = Alpine
Alpine.start()

const app = createApp({});

const options = {
    position: 'top-right',
    timeout: 3000,
    closeOnClick: true,
    pauseOnHover: true,
    draggable: true,
}

app.component('add-recipe-form', AddRecipeForm);


app.use(Toast, options);
app.mount('#app');