import { createRouter, createWebHistory } from "vue-router";
import MainView from '../views/MainView.vue';
import LoginView from '../views/LoginView.vue';
import RegisterView from '../views/RegisterView.vue';

const router = new createRouter({
    base: "/",
    history: createWebHistory(),
    routes: [
        { path: "/", component: MainView },
        { path: "/login", component: LoginView },
        { path: "/register", component: RegisterView },
    ],
});

export default router;