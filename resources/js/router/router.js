import { createRouter, createWebHistory } from "vue-router";
import MainView from '../views/MainView.vue';
import bookView from "../views/bookView.vue";
import ApView from "../views/ApView.vue";


const router = new createRouter({
    base: "/",
    history: createWebHistory(),
    routes: [
        { path: "/", component: MainView },
        { path: "/book", component: bookView },
        { path: "/ap", component:ApView}
    ],
});

export default router;