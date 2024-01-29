<template>
    <v-app-bar app flat color="black" class="px-10">
        <!-- Logo on the left -->
        <img @click="$router.push('/')" src="/public/images/ChimneyzLogo.png" class="logo cursor-pointer"/>

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
                    @click="goToRoute(item)"
                    :active="isActive(item)"
                    :class="{'bg-green' : isActive(item)}"
                    v-bind="props"
                ></v-btn>
            </template>

            <v-list
                v-if="item.subMenu"
                v-model:opened="open"
            >
                <v-list-group v-for="subItem in item.subMenu" :value="subItem.text">
                    <v-list-item v-if="subItem.text" class="text-green font-weight-bold" :title="subItem.text"></v-list-item>
                    <hr v-if="subItem.text" class="w-75 bg-green" style="height: 5px; border-radius: 100px; margin: 0px auto">
                    <v-list-item
                        v-for="subSubItem in subItem.subSubMenu"
                        :title="subSubItem.text"
                        @click="$router.push({name : item.path , params : {type : subSubItem.params}})"
                    ></v-list-item>
                </v-list-group>
            </v-list>
        </v-menu>
        <v-app-bar-nav-icon @click.stop="toggleDrawer" class="d-sm-none"></v-app-bar-nav-icon>
    </v-app-bar>

    <!-- Drawer for mobile -->
    <v-navigation-drawer v-model="drawer" app location="top" color="black">
        <v-list v-model:opened="openMobile">
            <v-list-group
                v-for="item in links"
                :key="item"
                :value="item.text"
            >
                <template v-if="item.subMenu" v-slot:activator="{ props }">
                    <v-list-item
                        v-bind="props"
                        :title="item.text"
                    ></v-list-item>
                </template>

                <v-list-group
                    v-for="subItem in item.subMenu"
                    :key="subItem"
                    :value="subItem.text"
                >
                    <template v-slot:activator="{ props }">
                        <v-list-item
                            v-if="subItem.text"
                            v-bind="props"
                            :title="subItem.text"
                        ></v-list-item>
                    </template>

                    <v-list-item
                        v-for="subSubItem in subItem.subSubMenu"
                        :key="subSubItem"
                        :title="subSubItem.text"
                        @click="$router.push({name : item.path , params : {type : subSubItem.params}})"
                    />
                </v-list-group>
            </v-list-group>
            <v-list-item
                @click="$router.push({name : 'Contact'})"
                title="Contact"
            ></v-list-item>
        </v-list>
    </v-navigation-drawer>
</template>

<script>
export default {
    name: "Header",
    data() {
        return {
            open: ['Chimney Sweep & Repair', 'Fireplace', 'Masonry', ""],
            openMobile : [""],
            links: [
                {
                    text: "Services",
                    link: "",
                    path : "ServiceDetails",
                    subMenu: [
                        {
                            text: "Chimney Sweep & Repair",
                            subSubMenu: [
                                {
                                    text: 'Chimney Cleaner and Repair',
                                    params: "clean_repair"
                                },
                                {
                                    text: 'Chimney Inspection',
                                    params: "inspection"
                                },
                                {
                                    text: 'Chimney Sweep',
                                    params: "sweep"
                                }, {
                                    text: 'Chimney Repair',
                                    params: "repair"
                                },
                            ]
                        },
                        {
                            text: "Fireplace",
                            subSubMenu: [
                                {
                                    text: 'Installing a Fireplace',
                                    params: "fireplace"
                                },
                                {
                                    text: 'Gas Fireplace Repair and Service',
                                    params: "fireplace_repair"
                                },
                                {
                                    text: 'Pellet Stove Service',
                                    params: "stove"
                                },
                                {
                                    text: 'Installing a Fireplace Chimney',
                                    params: "fireplace_chimney"
                                },
                                {
                                    text: 'Gas Line Installation Service',
                                    params: "line_installation"
                                },
                            ]
                        },
                        {
                            text: "Masonry",
                            subSubMenu: [
                                {
                                    text: 'Repair and Construction of Masonry',
                                    params: "masonry"
                                },
                                {
                                    text: 'Outdoor Fireplace Building',
                                    params: "building"
                                },
                                {
                                    text: 'Other Construction',
                                    params: "construction"
                                }
                            ]
                        }
                    ]
                },
                {
                    text: "Products",
                    path : "ProductDetails",
                    link: "",
                    subMenu: [
                        {
                            text: "",
                            subSubMenu: [
                                {
                                    text: 'Chimney Caps',
                                    params: "caps"
                                },
                                {
                                    text: 'Gas Log Sets',
                                    params: "log"
                                },
                                {
                                    text: 'Gas Fireplace Insert',
                                    params: "fireplace"
                                },
                                {
                                    text: 'Liners',
                                    params: "liners"
                                },
                                {
                                    text: 'Wood Burning Fireplace Inserts',
                                    params: "wood"
                                },
                            ]
                        }
                    ]
                },
                {
                    text: "Contact us",
                    link: "/contact",
                    path : "Contact",
                }
            ],
            drawer: false,
            group: null
        }
    },
    watch: {
        group() {
            this.drawer = false
        },
    },
    methods: {
        toggleDrawer() {
            this.drawer = !this.drawer;
        },
        isActive(item) {
            return this.$route.path === item.link || this.$route.name === item.path
        },
        goToRoute(item){
            if(item.link){
                this.$router.push({name : item.path})
            }
        }
    },
}
</script>

<style scoped>
img {
    height: auto;
    width: 120px;
    padding-left: 7px;
}

:deep(.v-navigation-drawer) {
    height: 156px !important;
}

.active-class {
    background-color: green !important;
}
</style>
