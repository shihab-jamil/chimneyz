<template>
    <v-card >
        <v-layout>
            <v-app-bar color="black" prominent class="px-6">
                <img src="\public\images\ChimneyzLogo.png" alt="Logo">
                <v-spacer></v-spacer>
                <v-btn
                    v-if="!$vuetify.display.sm"
                    v-for="link in links"
                    :key="link"
                    :text="link"
                    variant="text"
                ></v-btn>
                <v-app-bar-nav-icon
                    v-if="$vuetify.display.sm"
                    variant="text"
                    @click.stop="drawer = !drawer"
                ></v-app-bar-nav-icon>
            </v-app-bar>

            <v-navigation-drawer color="black" v-model="drawer" location="top" temporary>
                <v-list variant="tonal" class="text-green" :items="links">
                </v-list>
            </v-navigation-drawer>
        </v-layout>
    </v-card>
</template>

<script>
export default {
    name: "Header",
    data(){
        return {
            links: [
                'Who Are You?',
                'Services',
                'Contact us',
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
}
</script>

<style scoped>
img {
    height: auto;
    width: 120px;
    padding-left: 7px;
}
:deep(.v-navigation-drawer){
    height: fit-content !important;
}
</style>
