<template>
    <v-footer
        color="black"
        class="text-left d-flex flex-column"
        padded
    >
        <v-container>
            <v-row class="py-6 text-white">
                <v-col md="4" cols="12" class="mb-4">
                    <div class="text-h5 mb-2">Company</div>
                    <v-divider class="mb-4 w-50" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                    <div class="subtitle-1">
                        Phone Number: <a href="tel:+12065498410" class="white--text">206 549 8410</a><br>
                        Email: <a href="mailto:usachimneyz@gmail.com" class="white--text">usachimneyz@gmail.com</a>
                    </div>
                </v-col>
                <v-col md="4" cols="12" class="mb-4">
                    <div class="text-h5 mb-2">Service Cities</div>
                    <v-divider class="mb-4 w-50" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                    <ul>
                        <li class="subtitle-1" v-for="item in ['Seattle', 'Tacoma']" :key="item">{{ item }}</li>
                    </ul>
                </v-col>
                <v-col md="4" cols="12" class="mb-4">
                    <div class="text-h5 mb-2">Follow Us</div>
                    <v-divider class="mb-4 w-50" color="green" style="border-top-width: 5px; opacity: 1;"></v-divider>
                    <v-row>
                        <v-col
                            cols="auto"
                            v-for="icon in icons"
                            :key="icon"
                            class="d-flex justify-center"
                        >
                            <v-btn
                                :icon="icon.icon"
                                :href="icon.link"
                                target="_blank"
                                variant="text"
                                class="mx-2"
                            ></v-btn>
                        </v-col>
                    </v-row>
                </v-col>
            </v-row>
        </v-container>
        <v-divider></v-divider>
        <v-container>
            <div class="text-center caption py-2">
                © Copyright {{ new Date().getFullYear() }} - chimney
            </div>
        </v-container>
    </v-footer>
</template>

<script>
export default {
    name: "Footer",
    data() {
        return {
            icons: [
                {
                    icon: 'mdi-facebook',
                    link: 'https://www.facebook.com/profile.php?id=61555476044565'
                },
                {
                    icon: 'mdi-twitter',
                    link: 'https://twitter.com/chimneyzoffical'
                },
                {
                    icon: 'mdi-pinterest',
                    link: 'https://www.pinterest.com/usachimneyz/'
                },
                {
                    icon: 'mdi-instagram',
                    link: 'https://www.instagram.com/chimneyzoffical/'
                },
            ],
        }
    }
}
</script>

<style scoped>
ul {
    list-style-type: none;
    padding-left: 0;
}

ul > li {
    padding: 0.25rem 0;
}

a.white--text {
    text-decoration: none;
    color: white;
}

a.white--text:hover {
    text-decoration: underline;
}
</style>
