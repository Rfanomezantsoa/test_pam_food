import Vue from "vue";
import { createRouter, createWebHistory } from "vue-router";

import Home from "./pages/Home.vue";
import Menu from "./pages/Menu.vue";
import Reservation from "./pages/Reservation.vue";

const routes=[
    {
        path:'/',
        name:'home',
        component: Home
    },
    {
        path:'/menu',
        name:'menu',
        component: Menu
    },
    {
        path:'/reservation',
        name:'reservation',
        component: Reservation
    }
];

const router = new createRouter({

    history: createWebHistory(),
    linkExacttActiveClass:'active-link',
    routes
});

export default router;
