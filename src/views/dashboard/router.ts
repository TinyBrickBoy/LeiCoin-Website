import { createRouter, createWebHistory, type RouteRecordRaw } from 'vue-router';

const routes: RouteRecordRaw[] = [
    { path: '/', name: 'AdminHome', component: () => import('../views/Home.vue') }
];

const dashboardRouter = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
});

export default dashboardRouter;
