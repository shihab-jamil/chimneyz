<template>
    <v-app>
        <Header />

        <!-- Your main content goes here -->
        <v-main>
            <Home />
        </v-main>

        <Footer />
    </v-app>
</template>

<script>
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";
import Home from "./views/Home.vue";

export default {
    components: {Home, Footer, Header},
    data() {
        return {

        };
    },
    methods: {

    },
};
</script>

<style scoped>

</style>
