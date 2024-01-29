import {createRouter, createWebHistory} from "vue-router";
import Home from "../views/Home.vue";
import ContactPage from "../views/ContactPage.vue";
import ServiceDetailsPage from "../views/services/ServiceDetailsPage.vue";
import ProductDetails from "../views/ProductDetails.vue";
import FaqPage from "../views/FaqPage.vue";

const routes = [
    { path: '/', name : 'Home' , component: Home },
    { path: '/contact', name: 'Contact', component: ContactPage },
    { path: '/faq', name: 'FAQ', component: FaqPage },
    { path: '/service-details/:type', name: 'ServiceDetails', component: ServiceDetailsPage, props : true },
    { path: '/product-details/:type', name: 'ProductDetails', component: ProductDetails, props : true },
]


const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router
