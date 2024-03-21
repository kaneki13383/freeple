import './bootstrap';
import IndexComponent from './views/IndexView.vue';
import router from './router/router';
import { createApp } from 'vue';
import * as VeeValidate from 'vee-validate'

createApp(IndexComponent).use(router).use(VeeValidate).mount('#app');
