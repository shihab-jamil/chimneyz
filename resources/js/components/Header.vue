<template>
    <v-app-bar app flat color="black" class="px-10">
        <!-- Logo on the left -->
        <img @click="$router.push('/')" src="/public/images/ChimneyzLogo.png" class="logo cursor-pointer" />

        <!-- Menu on the right -->
        <v-spacer></v-spacer>
        <v-menu
            v-for="item in links"
        >
            <template v-slot:activator="{ props }">
                <v-btn
                    v-if="!$vuetify.display.sm"
                    :key="item"
                    :text="item.text"
                    variant="text"
                    :href="item.link"
                    :active="isActive(item)"
                    :class="{'bg-green' : isActive(item)}"
                    v-bind="props"
                ></v-btn>
            </template>

            <v-list
                v-model:opened="open"
            >
                <v-list-group v-for="subItem in item.subMenu" :value="subItem.text">
                    <v-list-item class="text-green font-weight-bold" :title="subItem.text"></v-list-item>
                    <hr class="w-75 bg-green" style="height: 5px; border-radius: 100px; margin: 0px auto">
                    <v-list-item
                        v-for="subSubItem in subItem.subSubMenu"
                        :title="subSubItem.text"
                        :value="subSubItem.text"
                    ></v-list-item>
                </v-list-group>
            </v-list>
        </v-menu>
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
            open : ['ABC', 'XYZ'],
            links: [
                {
                    text : "Services",
                    link : "",
                    subMenu : [
                        {
                            text : "ABC",
                            subSubMenu : [
                                {
                                    text : 'efg',
                                    link : ""
                                },
                                {
                                    text : 'hij',
                                    link : ""
                                },
                                {
                                    text : 'klm',
                                    link : ""
                                },
                            ]
                        },
                        {
                            text : "XYZ",
                            subSubMenu : [
                                {
                                    text : '21312',
                                    link : ""
                                },
                                {
                                    text : 'sad',
                                    link : ""
                                },
                                {
                                    text : '214',
                                    link : ""
                                },
                            ]
                        }
                    ]
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
