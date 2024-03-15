import './bootstrap';
import IndexComponent from './views/IndexView.vue';
import router from './router/router';
import { createApp } from 'vue';

createApp(IndexComponent).use(router).mount('#app');
