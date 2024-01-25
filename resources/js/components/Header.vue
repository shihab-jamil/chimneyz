<template>
    <v-app-bar app flat color="black">
        <!-- Logo on the left -->
        <img src="/public/images/ChimneyzLogo.png" class="logo" />

        <!-- Menu on the right -->
        <v-spacer></v-spacer>
        <v-btn
            v-if="!$vuetify.display.sm"
            v-for="link in links"
            :key="link"
            :text="link.text"
            variant="text"
        ></v-btn>
        <v-app-bar-nav-icon @click.stop="toggleDrawer" class="d-sm-none"></v-app-bar-nav-icon>
    </v-app-bar>

    <!-- Drawer for mobile -->
    <v-navigation-drawer v-model="drawer" app location="top" color="black">
        <v-list variant="tonal">
            <v-list-item class="text-green" v-for="(item, index) in links" :key="index">
                <v-list-item-title>{{ item.text }}</v-list-item-title>
            </v-list-item>
        </v-list>
    </v-navigation-drawer>
</template>

<script>
export default {
    name: "Header",
    data(){
        return {
            links: [
                {
                    text : "Who Are you",
                    link : "/"
                },
                {
                    text : "Services",
                    link : "/"
                },
                {
                    text : "Contact us",
                    link : "/"
                }
            ],
            drawer : false,
            group : null
        }
    },
    watch: {
        group() {
            this.drawer = false
        },
    },
    methods : {
        toggleDrawer() {
            this.drawer = !this.drawer;
        },
    }
}
</script>

<style scoped>
img {
    height: auto;
    width: 120px;
    padding-left: 7px;
}
:deep(.v-navigation-drawer){
    height: 156px !important;
}
</style>
