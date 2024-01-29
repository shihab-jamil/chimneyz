<template>
    <v-app>
        <Header />

        <!-- Your main content goes here -->
        <v-main>
            <router-view />
        </v-main>

        <Footer />
    </v-app>
</template>

<script>
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";
import Home from "./views/Home.vue";

export default {
    name: "App",
    components: {Home, Footer, Header},
    data() {
        return {

        };
    },
    methods: {

    },
};
</script>

<style>
:deep(.v-img__img){
    border-radius: 80px !important;
}
.v-img__img--contain{
    object-fit: unset !important;
}
</style>
