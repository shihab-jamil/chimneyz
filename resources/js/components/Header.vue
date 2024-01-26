<template>
    <v-app-bar app flat color="black" class="px-10">
        <!-- Logo on the left -->
        <img @click="$router.push('/')" src="/public/images/ChimneyzLogo.png" class="logo cursor-pointer" />

        <!-- Menu on the right -->
        <v-spacer></v-spacer>
        <v-btn
            v-if="!$vuetify.display.sm"
            v-for="item in links"
            :key="item"
            :text="item.text"
            variant="text"
            :href="item.link"
            :active="isActive(item)"
            :class="{'bg-green' : isActive(item)}"
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
                    link : "/contact"
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
        isActive(item){
           return this.$route.path === item.link
        }
    },
    mounted() {
        console.log(this.$route.name)
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
.active-class{
    background-color: green !important;
}
</style>
