import {createRouter, createWebHistory} from "vue-router";
import Home from "../views/Home.vue";
import ContactPage from "../views/ContactPage.vue";
import ServiceDetailsPage from "../views/services/ServiceDetailsPage.vue";

const routes = [
    { path: '/', name : 'Home' , component: Home },
    { path: '/contact', name: 'Contact', component: ContactPage },
    { path: '/service-details', name: 'ServiceDetails', component: ServiceDetailsPage },
]


const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router
